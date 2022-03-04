<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydatabase";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection fail".mysqli_connect_error());
}

$sql="insert into myguests(firstname,lastname,email)values('snehaben','bhut','snehabhut1904@gmail.com')";

$xyz=mysqli_query($conn,$sql);

if($xyz){
	$last_id=mysqli_insert_id($conn);
	  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sxyz . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>