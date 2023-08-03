<?php
session_start();
ob_start();
if(isset($_GET['id'])){
    include 'Connect.php';
    $id = $_GET['id'];
    $type = $_GET['stat'];

    if($type == "ans"){
    $sql= "DELETE FROM que_doc WHERE QueD_ID=$id" ;
    if($result = mysqli_query($db, $sql)){
      echo "data deleted";
    header('location:Adminpanel.php');
    mysqli_free_result($result);
     
  } else{
       echo "No records matching your query were found.";
   }
  }

  else if($type == "user"){
    $sql= "DELETE FROM user_account WHERE User_ID=$id" ;
    if($result = mysqli_query($db, $sql)){
      echo "data deleted";
    header('location:admuser.php');
    mysqli_free_result($result);
     
  } else{
       echo "No records matching your query were found.";
   }
  }

  else if($type == "doc"){
    $sql= "DELETE FROM doc_account WHERE Doc_ID=$id" ;
    if($result = mysqli_query($db, $sql)){
      echo "data deleted";
    header('location:admdoc.php');
    mysqli_free_result($result);
     
  } else{
       echo "No records matching your query were found.";
   }
  }

  else if($type == "post"){
    $sql= "DELETE FROM post_info WHERE Post_ID=$id" ;
    if($result = mysqli_query($db, $sql)){
      echo "data deleted";
    header('location:admpost.php');
    mysqli_free_result($result);
     
  } else{
    include('header.php');
    echo '  
          <br><br><br><h1>Sorry no records found.</h1><hr>';
          include('footer.php'); 
   }
  }else{
    include('404.html');
  }

} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
mysqli_close($db);
?>
