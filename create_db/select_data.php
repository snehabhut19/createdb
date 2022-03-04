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

$sql="select * from myguests";
$result = mysqli_query($conn,$sql);
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
	<table border="2">
		
		<thead>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
			?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['firstname'];?></td>
				<td><?php echo $row['lastname']; ?></td>
			</tr>
			<?php
		}

		}else{
			?>
			<tr>
				<td>There is no data</td>
			</tr>
			<?php
		}


		?>

		</tbody>
	</table>
</body>
</html>