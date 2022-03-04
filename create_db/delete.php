<?php
$servarname="localhost";
$username="root";
$password="";
$dbname="mydatabase";

$conn=mysqli_connect($servarname,$username,$password,$dbname);

if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
$id=$_GET['deleteid'];
$sql="delete from myguests where id =$id";
$res=mysqli_query($conn,$sql);

if($res){
	header("location:fetchdata.php");
}else
{
	echo " error in record delete";
}


?>