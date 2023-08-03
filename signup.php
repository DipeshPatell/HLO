<?php 

session_start();
include 'Connect.php';
?>


<?php 

#Variable Declaration

$email = "";
$username = "";
$token = bin2hex(random_bytes(15));
$errors = array();

#Sign-up Backend

if(isset($_POST['signup_user']))
{	
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password']);
	$password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);


	#If Password Same

	if($password_1 != $password_2)
	{
		array_push($errors, "Password do not match");
	}

	#if user exists or not

	$user_check_query = "SELECT * FROM user_account WHERE User_Email = '$email'";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc( $result);

	if($user)
	{
		if($user['User_Email'] === $email)
		{
		array_push($errors, "Email id is already registered");
		}
		if($user['User_Name'] === $username)
		{
			array_push($errors, "Username is already registered");
		}
	
	}

	if(count($errors) === 0)
	{
		$password = md5($password_1);
		
		$query = "INSERT INTO user_account(User_Name,User_Email,User_Pwd,User_Token,U_Valid) VALUES('$username','$email','$password','$token','active')";
	
		mysqli_query($db, $query);
		
		if($query)
		{	
				header("location: login.php");

			} 
		
			
		
	}
}
include 'Errors.php';
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


<link href="assets/css/style.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
</head>
 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-colock-time"></i>
      </div>
      <div class="d-flex align-items-center">
        <!--
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
        -->
      </div>
    </div>
  </div>
<div class="signup-form">
    <form action="signup.php" method="post" class="form-horizontal">
      	
		<div class="row">
        	<div class="col-8 offset-4">
				<h2>Sign Up</h2>
			</div>	
      	</div>		
		  <p style="margin-left:12px;">Register here and get the benifits by various features provided by us.</p>	
		<div class="form-group row">
			<label class="col-form-label col-4">User Name<span class="required"> *</span></label>
			<div class="col-8">
                <input type="text" class="form-control" name="username" required="required">
            </div> 
		</div>
		<div class="form-group row">
			<label class="col-form-label col-4">Email Address<span class="required"> *</span></label>
			<div class="col-8">
                <input type="email" class="form-control" name="email" required="required">
            </div>        	
        </div>
		<div class="form-group row">
			<label class="col-form-label col-4">Password<span class="required"> *</span></label>
			<div class="col-8">
                <input type="password" class="form-control" name="password" required="required">
            </div>        	
        </div>
		<div class="form-group row">
			<label class="col-form-label col-4">Confirm Password<span class="required"> *</span></label>
			<div class="col-8">
                <input type="password" class="form-control" name="confirm_password" required="required">
            </div>        	
        </div>
		<div class="form-group row">
			<div class="col-8 offset-4">
				<p><label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
				<button type="submit" class="btn btn-primary btn-lg" name= "signup_user">Sign Up</button>
				<div class="text-center,padding-top:2px">Already have an account? <a href="login.php">Login here</a></div>
				
				<div class="center"><a href="doc-signup.php">Click For Doctor Registration & Login</a></div>
			</div>  
		</div>		      
    </form>

</div>
</body>
</html>