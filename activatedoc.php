<?php
session_start();
include 'Connect.php';
if(isset($_GET['token'])){
	$token = $_GET['token'];
	$updatequery = " update doc_account set D_Valid='active' where Doc_Token='$token'";
	$query = mysqli_query($db, $updatequery);
	if($query){
		if(isset($_SESSION['msg'])){
			$_SESSION['msg'] = "Account Updated Successfully";
			header('location: logindoc.php');
		}
	else{
			$_SESSION['msg'] = "You are logged out";
			header('location: logindoc.php');
	}
	}
	else{
		$_SESSION['msg'] = "Account Not Updated";
			header('location: doc-signup.php');
	}

}

?>
