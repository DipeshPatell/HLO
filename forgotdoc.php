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
		<h3>Please Fill the Email Properly.</h3>
		<div class="form-group row">
			<label class="col-form-label col-4">Email Address<span class="required"> *</span></label>
			<div class="col-8">
				<input type="email" class="form-control" name="email" required="required">
            </div>        	
        </div>
	     	
		<div class="form-group row">
			<div class="col-8 offset-4">
			<button type="submit" name="Submit-email" class="btn btn-primary btn-lg">Send mail</button>			
		    </div>  
		</div>		      
    </form>

</div>
<?php 
if(isset($_POST['Submit-email']))
{
	$email=mysqli_real_escape_string($db,$_POST['email']);
	
	$emailquery="SELECT * FROM doc_account WHERE Doc_Email ='$email'";
	
	$query= mysqli_query($db, $emailquery);

	$userdata=mysqli_fetch_assoc($query);
	$username=$userdata['Doc_Name'];
	$token=$userdata['Doc_Token'];
	if($userdata>0)
    {
 		//Email ACTIVATION
		 require 'PHPMailer/PHPMailerAutoload.php';

		 //Instantiation and passing `true` enables exceptions
		 $mail = new PHPMailer(true);

		 try 
		 {
			 //Server settings
				//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
			 $mail->Host       = 'smtp.gmail.com;';                     //Set the SMTP server to send through
			 $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			 $mail->Username   = 'healthylittleservices@gmail.com';                     //SMTP username
			 $mail->Password   = 'Healthyhlo4';                               //SMTP password
			 $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			 $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			 //Recipients
			 $mail->setFrom('healthylittleservices@gmail.com', 'From Healthy Little Services');
			 $mail->addAddress($email,$username);     //Add a recipient
 
				//Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
				//Content
			 $mail->isHTML(true);                                  //Set email format to HTML
			 $mail->Subject = "Password Updatation.";
			 $mail->Body    = "Hi, $username. Click here to change your account password http://localhost/hlo/forgotdoc1.php?token=$token";
			 $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

			 $mail->send();
		 } 
		 catch (Exception $e) 
		 {
		 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		 }

		 $_SESSION['msg'] = "Check mail to Update your password $email";	
		 header("location:logindoc.php");
	
    }
}
?>

</body>
</html>