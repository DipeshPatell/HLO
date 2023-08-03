<?php

$db=mysqli_connect("localhost","root","","hlo");
$errors = array();
if($db)
{
    #echo "connection sucessful";
}
else
{
    echo "connection failed";
}
?>
