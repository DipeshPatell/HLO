<?php
session_start();
if(isset($_POST['Answer']))
{
  $user = $_SESSION['name'];
  $id = $_SESSION['id'];
    include 'Connect.php';
    $sql = "SELECT * FROM que_doc where QueD_ID = '$id'";
    if($result = mysqli_query($db, $sql)){
          $row = mysqli_fetch_array($result);
             $stat = $row['que_st'];
             echo"$stat";
          mysqli_free_result($result);
      } else{
        include('header.php');
        echo '  
              <br><br><br><h1>Sorry no records found.</h1><hr>';
              include('footer.php'); 
      }
if($stat == 0)
{

    $sql = "SELECT * FROM doc_account where Doc_Name = '$user'";
    if($result = mysqli_query($db, $sql)){
          $row = mysqli_fetch_array($result);
             $DocID = $row['Doc_ID'];
          
          mysqli_free_result($result);
      } else{
          echo "No records matching your query were found.";
      }
  $ans = $_POST['acontent'];
  $sql = "INSERT INTO  ans_doc (QueD_ID,Doc_ID,Ans_Text) VALUES ('$id','$DocID',' $ans')";
  
  if (mysqli_query($db, $sql)) {
     echo "New record created successfully";
     $_SESSION['msg']="Answer is stored. Thanks for Response.";
     $res="SELECT User_ID from que_doc where QueD_ID='$id'";
     $sql1=mysqli_query($db,$res);
     $res3=mysqli_fetch_assoc($sql1);
     $sql2=$res3['User_ID'];
     $res1="SELECT User_Name,User_Email FROM user_account WHERE User_ID='$sql2'";
     $res2=mysqli_query($db,$res1);
     $res4=mysqli_fetch_assoc($res2);
     $res5=$res4['User_Name'];
     $res6=$res4['User_Email'];
   
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
       $mail->addAddress($res6,$res5);     //Add a recipient
   
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //Content
       $mail->isHTML(true);                                  //Set email format to HTML
       $mail->Subject = "Email Activation";
       $mail->Body    = "Hi, $res5. your que is answered by our doctor:- $ans";
       $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
   
       $mail->send();
   
   } 
   catch (Exception $e) 
   {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }

    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }

 $sql="UPDATE que_doc
      SET que_st= 1
      WHERE QueD_ID='$id'";

  if (mysqli_query($db, $sql)) {
    #echo "status changed successfully";
     header("location:Docpanel.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }
}
else{
   #echo "Add a sorry already answered page here";
}
  }else{
    include('404.html');
  }

