<?php 
include('Server.php');
include('header.php');
?>

<?php

#Variable Declaration

$email = "";
$errors = array();

#Sign-in Backend

if(isset($_POST['login_user']))
{
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password']);	
	
	$password = md5($password_1);
	$query = "SELECT * FROM user_account WHERE User_Email='$email' AND User_Pwd='$password' and U_Valid='active'";
	$result = mysqli_query($db, $query);
	
	if(mysqli_num_rows($result))
	{
		$array=mysqli_fetch_assoc($result);
		$_SESSION['email'] = $email;
		$username = $array['User_Name'];
		$_SESSION['username'] = $username;
		$_SESSION['name'] = $username;
		$_SESSION['type']='U';
		$_SESSION['success'] = "logged in successfully";		
		#Print_r($_SESSION);
		header("location: index.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Wrong email or password');</script>";
	}
}
?>


<body>
<div class="signup-form">
    <form action="login.php" method="post" class="form-horizontal">

		<div class="row">
        	<div class="col-8 offset-4">
				<h2>Log In</h2>
			</div>	
      	</div>
		<div>
		<p class= "bg-success text-white px-4"> 
		<?php
		if(isset($_SESSION['msg']))
	{
	    echo $_SESSION['msg'];
	}
    else
	{
		echo $_SESSION['msg']= "";
	}
	?>
	</p>
		</div>
		<div class="form-group row">
			<label class="col-form-label col-4">Account Type</label>
			<div class="col-8">
			<select name="account type" onchange="location = this.options[this.selectedIndex].value;">
			<option value="login.php">User</option>
			<option value="logindoc.php">Doctor</option>
			</select>
            </div>        	
        </div>
		
		
		<div class="form-group row">
			<label class="col-form-label col-4">Email Address</label>
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
			<div class="col-8 offset-4">
				<button type="submit" class="btn btn-primary btn-lg" name="login_user">Log In</button>
				<div class="center">Don't have an account? <a href="signup.php">sign up here</a></div>
				<div class="center"><a href="forgotpass.php">Forgot Password</a></div>
			</div>  
			
		</div>		      
    </form>
</div>
</body>
</html>