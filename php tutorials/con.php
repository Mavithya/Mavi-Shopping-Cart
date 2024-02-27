<?php

$host="localhost";
$username="root";
$password="";
$db="cart";
$con=mysqli_connect($host,$username,$password,$db);

if (mysqli_connect_errno()) {
    die("Connection Unsuccessfull".mysqli_connect_error());

}else{
    //echo "Connection Successfull";

}


?>