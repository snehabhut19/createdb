<?php
$servername= "localhost";
$username="root";
$password="";
$dbname="mydatabase";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
 die("connection fail".mysqli_connect_error());
}

//insert data

$sql = "insert into myguests(firstname,lastname,email)values('sneha','bhut','snehabhut19@gmail.com')";

if(mysqli_query($conn,$sql))
{
	echo"new record created successfully ";
}else{
	echo"error".$sql."<br>".mysqli_query($conn);
}

mysqli_close($conn);

?>