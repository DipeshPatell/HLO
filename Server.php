
<?php 

#registration

session_start();

$email = "";
$username = "";

$errors = array();

$db = mysqli_connect('localhost','root','','hlo') or die("could not connect to database");

if(isset($_POST['signup_user'])){
	
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password']);
$password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);

$token = bin2hex(random_bytes(15));

if(empty($username))
{
	array_push($errors, "Username is required");
}
if(empty($email))
{
	array_push($errors, "Email is required");
	}
if(empty($password_1))
{
	array_push($errors, "Password is required");
}
if($password_1 != $password_2)
{
	array_push($errors, "Password do not match");
}
$user_check_query = "SELECT * FROM user_account WHERE User_Email = '$email'";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc( $result);

if($user)
{
	if($user['User_Email'] === $email)
	{
		array_push($errors, "Email id is already registered");
	}
	if($user['User_name'] === $username)
	{
		array_push($errors, "Username is already registered");
	}
	session_destroy();
	
}

if(count($errors) === 0)
	{
	#$password = md5($password_1);
	$query = "INSERT INTO user_account(User_Name,User_Email,User_Pwd,User_Token,U_Valid) VALUES('$username','$email','$password_1','$token','inactive')";
	
	mysqli_query($db, $query);
	if($query){
		
		$subject = "Email Activation";
		$body = "Hi, $username. Click here to activate your account http://localhost/hlo/activate.php?token=$token";
		$sender_email = "From: healthylittleservices@gmail.com";

		if (mail($email, $subject, $body, $sender_email)) {
			$_SESSION['msg'] = "Check mail to activate your account $email";
			
			header("location: login.php");
	}
		
	else {
				echo "Email sending failed...";
			}
		}	
	}
}

#loginuser

if(isset($_POST['login_user'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);	
	if(empty($email)){
		array_push($errors, "Email is required");
	}
	if(empty($password)){
		array_push($errors, "Password is required");
	}
	if(count($errors) == 0 ){
		#$password = md5($password);
		$query = "SELECT * FROM user_account WHERE User_Email='$email' AND User_Pwd='$password' and U_Valid='active'";
		$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result)){
			
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "logged in successfully";
				$username = $array['User_Name'];
		        $_SESSION['username'] = $username;
		        $_SESSION['name'] = $username;
		        $_SESSION['type']='U';
	
				header("location: index.php");
				SESSION_destroy();
			}
			else{
				array_push($errors, "Wrong username or password");
			}
	}
}


?>


		
<?php
include('Errors.php') 
?>