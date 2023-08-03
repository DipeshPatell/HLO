<?php
session_start();
ob_start();
include 'Connect.php';
#include 'header.php';
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

    <form action="#" method="post" class="form-horizontal">
      	<div class="row">
        	<div class="col-8 offset-4">
				<h2>Forgot Password</h2>
			</div>	
		  </div>			
		  
		<div class="form-group row">
			<label class="col-form-label col-4">New password<span class="required"> *</span></label>
			<div class="col-8">
                <input type="password" class="form-control" name="forgot" required="required">
            </div>        	
        </div>
        <div class="form-group row">
			<label class="col-form-label col-4">Confrim Password<span class="required"> *</span></label>
			<div class="col-8">
                <input type="password" class="form-control" name="forgot1" required="required">
            </div>        	
        </div>
		<div class="form-group row">
			<div class="col-8 offset-4">
              <button type="submit" name="submit-pass" class="btn btn-primary btn-lg">Submit</button> 
			</div>  
			
		</div>		      
    </form>
	  <?php
	  

	   if(isset($_POST['submit-pass']))
         {
			 if(isset($_GET['token'])){
				 $token = $_GET['token'];
			 }
			 $newpassword = mysqli_real_escape_string($db,$_POST['forgot']);
			 $cpassword = mysqli_real_escape_string($db,$_POST['forgot1']);

			 
			 if($newpassword === $cpassword)
			 {
				$password = md5($newpassword);
				$updatequery = "UPDATE doc_account SET Doc_Pwd='$password' Where Doc_Token='$token'";
					
				 $iquery= mysqli_query($db,$updatequery);

				 if($iquery)
				 {
					  $_SESSION['msg']="your password has been updated";
					  header('location:logindoc.php');
				 }
				 else
				 {
					  $_SESSION['msg']="your password is not updated";
					  header('location:forgotdoc.php');
				 }
			 }
			 else
			 {
				$_SESSION['msg']="your password is not updated";
				echo"password are not matching";
			 }
			
			}
			
			else{
				$_SESSION['msg']="no token found";
			
				
			}
			
	  ?>
</div>
</body>
</html>