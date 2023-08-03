<?php 
session_start();
ob_start();
include('Connect.php');
include('header.php');
?> 


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
	
	$emailquery="SELECT * FROM user_account WHERE User_Email ='$email'";
	
	$query= mysqli_query($db, $emailquery);

	$userdata=mysqli_fetch_assoc($query);

	$username= $userdata['User_Name'];
	
	$token= $userdata['User_Token'];
	
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
			 $mail->Password   = 'Healthy@strong';                               //SMTP password
			 $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			 $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			 //Recipients
			 $mail->setFrom('healthylittleservices@gmail.com', 'From Healthy Little Services');
			 $mail->addAddress($email,$username);     //Add a recipient
 
				//Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
				//Content
			 $mail->isHTML(true);                                  //Set email format to HTML
			 $mail->Subject = "Email Activation";
			 $mail->Body    = "Hi, $username. Click here to change your account password http://localhost/hlo/forgotpass1.php?token=$token";
			 $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

			 $mail->send();
	 
			 $_SESSION['msg'] = "Check mail to Update your password $email";	
           session_destroy();
		 } 
		 catch (Exception $e) 
		 {
		 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		 }
    }
}
?>

</body>
</html>