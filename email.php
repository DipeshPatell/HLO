<?php
error_reporting(0);
include 'Connect.php';
$errors ='';

if($_POST['submit']=='Send')
{
    $email=$_POST['email'];
    $password = $_POST['passsword'];

    $query = mysqli_query($con,"SELECT * FROM user_account WHERE User_Email='$email'");
    
                              
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress(''); // Your mail
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $code= rand(100,999);
    mail($email, "Send Code", $message);
    $mail->Body= $message="You activation link is:http://localhost/HLO/forgotPass.php?email=code=$code";

    if (mysqli_num_rows ($query)==1)
    {
        if($mail->send())
        {
           
        }
        $query2 = mysqli_query($con,"UPDATE password SET passsword='$password' WHERE email='$email'")
        or die(mysqli_error($con)); 
        }
        else
        {
       $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ForgotPassword</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-doc.css">
    <link href='https://fonts.googleapis.com/css?family=Bayon|Francois+One' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">

</head>
<body>

    <!-- Material form login -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5 rounded">
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4">
                    <strong>ForgotPassword</strong>
                    </h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                    <!-- Form -->
                    <form class="text-center"action="forgotpass.php" method="POST">
                        <!-- Email -->
                        <div class="md-form">
                        <?= $errors?>
                            <input type="email"name="email" id="email" class="form-control" placeholder="E-mail">
                        </div>
                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit" value="Send">Send Code To Mail</button>
                        <!-- Social login -->
                        <a href="signin.php">Sing in</a>
                        <p>or sign in with:</p>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </form>
                    <!-- Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>