<?php 
session_start();
include 'Connect.php'; 

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Doc Reg</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<!--header Starts from here-->
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  
	<title>Doctor Registration</title>
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
  <link href="assets/css/login.css" rel="stylesheet">

  
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  </head>
  
  <body>
  
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
   
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
	  <div class="container d-flex align-items-center">
  
		<a href="index.html" class="logo mr-auto"><img src="assets/img/log.png" alt=""></a>
  
		<nav class="nav-menu d-none d-lg-block">
		  <ul>
			<li class="active"><a href="index.html">Home</a></li>
  
			<li><a href="#services">Symptom checker</a></li>
			<li><a href="#departments">Q&A</a></li>
			<li><a href="#doctors">Find A doctor</a></li>
  
			 <li class="drop-down"><a href="">Health tools</a>
			<ul>
			  <li><a href="#">BMI</a></li>
			  <li><a href="#">Due Date Calculator</a></li>
			  <li><a href="#">Vaccine Reminder</a></li>
			  <li><a href="#">Teething Guide</a></li>
			</ul>
		  </li> 
			<li><a href="#contact">Contact</a></li>
		  </ul>
		</nav><!-- .nav-menu -->
  
		<a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Login</a>
  
	  </div>
	</header>
	<!-- End Header -->
<body>
<div class="signup-form">
    <form action="" method="post" class="form-horizontal">
	
      	<div class="row">
        	<div class="col-8 offset-2">
                <h2>Doctor Registration.</h2>
            </div>	
            <p style="margin-left:12px;">Then register yourself and get benefited by using various features provided by us.</p>
      	</div>		
		<div>
		<p class= "bg-success text-white px-4"> 
		<?php
	 		 if(isset($_SESSION['msg']))
	  {
		  echo $_SESSION['msg'];
	  }
      else{
		  echo $_SESSION['msg']="";
	  }
    		  
	?> 
	</p>
		</div>		
        <div class="form-group row">
			<label class="col-form-label col-4">Username<span class="required"> *</span></label>
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
			<label class="col-form-label col-4">Qualification<span class="required"> *</span></label>
			<div class="col-8">
                <input type="tel" class="form-control" 
                name="qualification"
                id="qualification"
                required="required"
               />
            </div>        	
        </div>
        <div class="form-group row">
			<label class="col-form-label col-4">Certificate<span class="required"> *</span></label>
			<div class="col-8">
                <input type="file" name="certificate" class="form-control">
            </div>  
		</div>
		<div class="form-group row">
			<label class="col-form-label col-4">Experience<span class="required"> *</span></label>
			<div class="col-8">
                <input type="text"class="form-control" name="experience">
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
			<div class="form-group row">
				<div class="col-8 offset-4">
					<br><p><label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
					<button type="submit" name = "Submit" class="btn btn-primary btn-lg">Register</button>
				</div>  
				<div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
			</div>		      
    </form>
</div>
<?php
if(isset($_POST['Submit'])){
$files = "";
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$qualification = mysqli_real_escape_string($db, $_POST['qualification']);
$experience = mysqli_real_escape_string($db, $_POST['experience']);
$password_1 = mysqli_real_escape_string($db, $_POST['password']);
$password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);
$token = bin2hex(random_bytes(15));
$files = mysqli_real_escape_string($db, $_FILES['certificate']);
print_r($files);
$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));
$fileexstored = array('png','jpg' ,'lpej');

          


if(empty($username))
{
	array_push($errors, "Username is required");
}
if(empty($email))
{
	array_push($errors, "Email is required");
	}
if(empty($qualification))
{
	array_push($errors, "Qualification is required");
}
if(empty($experience))
{
	array_push($errors, "expirence is required");
}
if(empty($certificate))
{
	array_push($errors, "certificate is required");
}
if(empty($password_1))
{
	array_push($errors, "Password is required");
}

if($password_1 != $password_2)
{
	array_push($errors, "Password do not match");
}


$doc_check_query = "SELECT * FROM doc_account WHERE Doc_Email = '$email'";
$result = mysqli_query($db, $doc_check_query);
$doc = mysqli_fetch_assoc( $result);

if($doc)
{
	if($doc['Doc_Email'] === $email)
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
	 if(in_array($filecheck,$fileexstored)){
		 $destinationfile = 'upload/' .$filename;
		move_uploaded_file($filetmp,$destinationfile);
		
		
	$query = "INSERT INTO doc_account(Doc_Name,Doc_Qualification,Doc_Certificate,Doc_Experience,Doc_Email,Doc_Pwd,Doc_Token,D_Valid) VALUES('$username','$qualification','$destinationfile','$expirence','$email','$password','$token','inactive')";

	mysqli_query($db , $query);
	echo $query;
	if($query){
		
		$subject = "Email Activation";
		$body = "Hi, $username. Click here to activate your account http://localhost/hlo/activatedoc.php?token=$token";
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
}
include ('Errors.php') 
?>

</body>
</html>