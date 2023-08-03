<?php 
include 'Connect.php'; 
#include 'header.php';
include ('Errors.php');
session_start();
?>
<?php

#logindoc

if(isset($_POST['login_doc'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password']);	
	#$password = password_hash($password_1,PASSWORD_BCRYPT);
		$password = md5($password_1);
		$query = "SELECT * FROM doc_account WHERE Doc_Email='$email' AND Doc_Pwd='$password' and D_Valid='active'";
		$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result))
			{
			    $result1=mysqli_fetch_assoc($result);
				$_SESSION['email'] = $email;
				$username= $result1['Doc_Name'];
				$_SESSION['doc_name'] = $username;
                $_SESSION['name'] = $username;
				$_SESSION['type']='D';
				$_SESSION['success'] = "logged in successfully";
				#print_r($_SESSION);
				header("location: index.php");
			}
			else{
				echo "<script type='text/javascript'>alert('Wrong email or password');</script>";
			}
	
}
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
<body>
<div class="signup-form">
    <form action="logindoc.php" method="post" class="form-horizontal">

		<div class="row">
        	<div class="col-8 offset-4">
				<h2>Log In Doctor</h2>
			</div>	
      	</div>
		<div>
		<p class= "bg-success text-white px-4"> 
		<?php
		if(isset($_SESSION['msg']))
	{
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
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
			<option value="logindoc.php">Doctor</option>
			<option value="login.php">User</option>
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
				<button type="submit" class="btn btn-primary btn-lg" name="login_doc">Log In</button>
				<div class="center">Don't have an account? <a href="doc-signup.php">sign up here</a></div>
				<div class="center"><a href="forgotdoc.php">Forgot Password</a></div>
			</div>  
			
		</div>		      
    </form>
</div>
</body>
</html>