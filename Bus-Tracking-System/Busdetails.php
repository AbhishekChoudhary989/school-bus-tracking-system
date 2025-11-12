<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display driver record</title>
</head>
<style type="text/css">
*{margin: 0; padding: 0;}
h1{align: center; background-color: skyblue; text-align: center; padding: 5px; color: darkblue;}
table{margin: 10px; padding: 0px; border-radius: 5px;}
table th,td{padding: 18px; text-align: center;}
a{text-decoration: none; padding: 5px;//background-color: green; color: white;border: 2px solid black;}
a{background:black;}
</style>
<body>
	<h1>BUS DETAILS</h1>
<table border="1">
	<tr>
		<th>Date</th>
		<th>Bus_No.</th>
		<th>Driver_Name</th>
		<th>Started Time</th>
		<th>Stopped Time</th>
		</tr>
	<?php
include("connect.php");
error_reporting(0);
$query = "select * from driver_att order by date";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
	echo "
	<tr>
		<td>".$result['Date']."</td>
		<td>".$result['BusNo']."</td>
		<td> ".$result['Name']."</td>
		<td>".$result['Time']."</td>
		<td>".$result['Stopped_Time']."</td>
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>