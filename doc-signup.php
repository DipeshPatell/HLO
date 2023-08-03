<?php 
session_start();

include 'Connect.php';
?>
<head>
<title>
Doctor signup</title>
</head>
  
<?php
	$errors = array();
	
	if(isset($_POST['Submit'])){
	$files = "";
	$files1 = "";
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$qualification = mysqli_real_escape_string($db, $_POST['qualification']);
	$experience = mysqli_real_escape_string($db, $_POST['experience']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	
	$password_1 = mysqli_real_escape_string($db, $_POST['password']);
	$password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);
	$token = bin2hex(random_bytes(15));

	$files = $_FILES['image'];

	$filename = $files['name'];
	$fileerror = $files['error'];
	$filetmp = $files['tmp_name'];

	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));
	$fileexstored = array('png','jpg' ,'jpeg');

	#image code is from here

	$files1 = $_FILES['image1'];

	$filename1 = $files1['name'];
	$fileerror = $files1['error'];
	$filetmp1 = $files1['tmp_name'];

	$fileext1 = explode('.',$filename1);
	$filecheck1 = strtolower(end($fileext1));
	$fileexstored1 = array('png','jpg' ,'jpeg');
	
	if($password_1 != $password_2)
{
	array_push($errors, "Password do not match");
}
       
	$doc_check_query = "SELECT * FROM doc_account WHERE Doc_Email = '$email'";
	$result = mysqli_query($db, $doc_check_query);
	$doc = mysqli_fetch_assoc( $result);

	if($doc)
	{	
		if($doc['Doc_Email'] === $email ){
			array_push($errors, "Email id is already registered");
	}
}

	
if(count($errors) === 0)
	{
		$password = md5($password_1);
		if(in_array($filecheck,$fileexstored))
		{
			$destinationfile = 'upload/' .$filename;
			move_uploaded_file($filetmp,$destinationfile);
		
			$destinationfile1 = 'upload/' .$filename1;
			move_uploaded_file($filetmp1,$destinationfile1);

			$query = "INSERT INTO doc_account(Doc_Name,Doc_Qualification,Doc_Image,Doc_Certificate,Doc_Experience,Doc_Address,Doc_Email,Doc_Pwd,Doc_Token,D_Valid) VALUES('$username','$qualification','$destinationfile1','$destinationfile','$experience','$address','$email','$password','$token','active')";
			mysqli_query($db , $query);
			
	
			if($query)
			{
		
			
				header("location: logindoc.php");

			} 
		
			}	
		}

	
}
include ('Errors.php');

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
    <form action="doc-signup.php" method="post" class="form-horizontal" enctype = "multipart/form-data">
	
      	<div class="row">
        	<div class="col-8 offset-2">
                <h2>Doctor Registration.</h2>
            </div>	
            <p style="margin-left:12px;">Register here if you are a Doctor. Thank You</p>
      	</div>		
		<div>
		<p class= "bg-success text-white px-4"> 
	
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
			<label class="col-form-label col-4">Your-Photo<span class="required"> *</span></label>
			<div class="col-8">
                <input type="file" name="image1" id  = "image" class="form-control">
            </div>  
		</div>
        <div class="form-group row">
			<label class="col-form-label col-4">Certificate<span class="required"> *</span></label>
			<div class="col-8">
                <input type="file" name="image" id  = "image" class="form-control">
            </div>  
		</div>
		<div class="form-group row">
			<label class="col-form-label col-4">Experience<span class="required"> *</span></label>
			<div class="col-8">
                <input type="text"class="form-control" name="experience">
            </div>  
        </div>
		<div class="form-group row">
			<label class="col-form-label col-4">Address<span class="required"> *</span></label>
			<div class="col-8">
                <input type="text"class="form-control" name="address">
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
					<div class="text-center">Click Here <a href="signup.php">For User Registration & Login</a></div>
					<div class="center">Already have an account? <a href="logindoc.php">Login here</a></div>
			</div> 
					      
    </form>
</div>


</body>
</html>