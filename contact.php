<?php
include 'Connect.php';
session_start();

$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$Subject=mysqli_real_escape_string($db,$_POST['subject']);
$message=mysqli_real_escape_string($db,$_POST['message']);

$sql="SELECT User_ID from user_account where User_Email='$email'";
$sql1=mysqli_query($db,$sql);
$sql2=mysqli_fetch_assoc($sql1);
$sql3=$sql2['User_ID'];
if($sql1)
{
$result = "INSERT INTO contact(User_ID,User_Name,User_Email,Con_Sub,Con_Text) VALUES ('$sql3','$name','$email','$Subject','$message')";
$result1=mysqli_query($db, $result);
}
else{
    echo "problem in user query";
}
?>
