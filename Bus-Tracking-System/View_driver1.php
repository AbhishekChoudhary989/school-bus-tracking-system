<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display driver record</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	h1{
		align: center;
		background-color: skyblue;
		text-align: center;
		padding: 5px;
		color: darkblue;
	}
	table{
		margin: 0px;
		padding: 0px;
		border-radius: 5px;
	}
	table th,td{
		padding: 8px;
		text-align: center;
	}
	a{
		text-decoration: none;
		padding: 5px;
		//background-color: green;
		color: white;
		border: 2px solid black;
	}
	#button{
		background-color: green;
		color: white;
		height: 32px;
		width: 125px;
		border-radius: 25px;
		font-size: 16px;
	}
	#amp{
		background-color:black
	}
	img{
		height:50px;
		 width:50px;
	}
	a{
		background:black;
	}
</style>
<body>
	<h1>DRIVER DETAILS</h1>
<table border="1">
	<tr>
		<th>Bus_No.</th>
		<th>Driver_Name</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Address</th>
		<th>Photo</th>
		<th colspan="2" align="center"><a href = 'Add_driver.php' onclick='return checkadd()' style="background-color: grey; font-size: 15px;">+ ADD</th>
		</tr>
	<?php
include("connect.php");
error_reporting(0);
$query = "select * from add_driver";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
	echo "
	<tr>
		<td>".$result['Bus_No']."</td>
		<td> ".$result['Driver_Name']."</td>
		<td>".$result['Email']."</td>
		<td>".$result['Cont_Num']."</td>
		<td>".$result['Address']."</td>
		<td><img src=".$result['Photo']."></td>
		<td ><a href='Driver_update.php? busno=$result[Bus_No] & drivername=$result[Driver_Name] & email=$result[Email] & Cont_Num=$result[Cont_Num] & add=$result[Address]'>UPDATE</a></td>
		<td ><a href='Delete_driver.php? email=$result[Email]' onclick='return checkdelete()'>DELETE</a></td>
	</tr>
	";
	}
}
else
{
	echo "no record";
}
?>
</table>

<script>
function checkdelete(){

return confirm('Are you sure you want to delete' );

}
</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>