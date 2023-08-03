<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["type"]);
header("Location:adminlogin.php");
?>