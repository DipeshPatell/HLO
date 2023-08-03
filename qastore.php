<?php
if(isset($_POST["submit"])){
session_start();
$user = $_SESSION['name'];
$type = $_SESSION['type'];

    include 'Connect.php';
  $sql = "SELECT * FROM user_account where User_Name = '$user'";
  if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
           $userID = $row['User_ID'];
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

$que = $_POST['que'];
if(isset($que))
{
$age = $_POST['age'];
$gender = $_POST['gender'];
$sql = "INSERT INTO que_doc (User_ID,Que_Text,que_st,age,gender) VALUES ($userID,'$que',0,'$age','$gender')";
if (mysqli_query($db, $sql)) {
  $_SESSION['msg']="Your Query is Submitted Sucessfully.";
  header("location:qa.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
}
else
{
  $_SESSION['msg']="Please Enter Your Question.";
  header("location:qa.php");
}
}
else{
  include('404.html');
}
mysqli_close($db);
?>
