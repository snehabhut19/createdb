<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydatabase";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
die("connection fail:".mysqli_connect_error());
}

$sql="select * from myguests";

$result=mysqli_query($conn,$sql);





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<table border=2px;>
		
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>lastname</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?Php  echo $row['id'];?></td>
			<td><?Php  echo $row['firstname'];?></td>
			<td><?Php  echo $row['lastname'];?></td>
			<td>
				<a href="">EDIT</a>
				<a href="delete.php?deleteid=<?php echo $row['id']; ?>">DELETE</a>
			</td>
		</tr>
		<?php
	}
	}else{
		?>
		<tr>
			<td>there is no data
			</td>

		</tr>
		<?php
	}
			?>

			
		</tbody>
	</table>


</body>
</html>
