<?php

$servername ="localhost";
$username = "root";
$password ="";


$con =mysqli_connect($servername,$username,$password);
 
 if(!$con)
 {
 	die("connection fail".mysqli_connect_error());
 }

 //create database

 $sql="create database mydatabase";
 if(mysqli_query($con,$sql)){
 	echo "database create success";
 }
 else{
 	echo "error creating database". mysqli_error($con);
 }

 mysqli_close($con);


?>