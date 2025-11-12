<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display student record</title>
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
		padding: 2px;
		color: darkblue;
	}
	table{
		margin: 10px;
		padding: 2px;
		//color: white;
		border-radius: 5px;
	}
	table th,td{
		padding: 3px;
		text-align: center;
	}
	a{
		text-decoration: none;
		padding: 2px;
		background-color: green;
		color: white;
		border: 2px solid black;
	}
#add{
		background-color: slateblue; 
		padding:5px 10px 5px 5px; 
		font-size: 15px;
	}
</style>
<body>
	<h1>STUDENT DETAILS</h1>
<table border="2">
	<tr>
		<th>Roll_No.</th>
		<th>Student_Name</th>
		<th>Class</th>
		<th>Father_Name</th>
		<th>Mother_Name</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Address</th>
		<th>Bus_Stop</th>
		<th colspan="2" align="center"><a href = 'Add_parent.php' onclick='return checkadd()' id="add">+ ADD</th>
		</tr>
	<?php
include("connect.php");
error_reporting(0);
$query = "select * from add_parent";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['Roll_No']."</td>
		<td>".$result['Student_Name']."</td>
		<td>".$result['Class']."</td>
		<td>".$result['Father_Name']."</td>
		<td>".$result['Mother_Name']."</td>
		<td>".$result['Email']."</td>
		<td>".$result['Contact_Num']."</td>
		<td>".$result['Home_Add']."</td>
		<td>".$result['Bus_stop']."</td>
		<td ><a href='Parent_update.php? Roll_No=$result[Roll_No] & Student_Name=$result[Student_Name] & Class=$result[Class] & Father_Name=$result[Father_Name] & Mother_Name=$result[Mother_Name]& Email=$result[Email]& Contact_Num=$result[Contact_Num]& Home_Add=$result[Home_Add]& Bus_stop=$result[Bus_stop]'>UPDATE</a></td>
		<td><a href = '' onclick='return checkdelete()'>DELETE</td>
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
</body>
</html>

