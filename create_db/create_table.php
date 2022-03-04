<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydatabase";

//create connection
 $conn=mysqli_connect($servername,$username,$password,$dbname);

 if (!$conn) {
 	die("connection fail" . mysqli_connect_error());
 	# code...
 }

 //create table

 $sql="create table myguests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if(mysqli_query($conn,$sql)){
	echo"table create successfully";

}else{
	echo "error to creating table".mysqli_error($conn);
}

mysqli_close($conn);
?>