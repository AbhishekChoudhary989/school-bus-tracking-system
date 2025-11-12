<?php
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mark Attendance</title>
</head>
<style type="text/css">
	table th,td{
		padding: 5px;
		text-align: center;
	}
	#attend{

	}
	button{
    background-color:red;
    color: white;
    padding: 10px;
   }
   button:focus
   {
	background-color:lightgreen;
	color: white;
   }

</style>
<body>
   <h1 style="text-align:center; background-color:#AEC6CF ; color:black;">Driver</h1> 
  <table id="driver" border="1">
    <form>
  	<tr>
  		<th>Date</th>
  		<th>Time</th>
  		<th>Driver_Name</th>
  		<th>Bus_No</th>
  		<th>Attendance</th>
  	</tr>
  	<tr>
  	  <td><p id='date' name="date"></p></td>
      <td><p id='time' name="time"></p></td>
      <td><input type="text" name="fname" placeholder="First name" required></td>
      <td><input type="text" name="busnum" placeholder="Enter bus no"></td>
      <td><input type="submit" name="submit" id="attend" value="Absent"></td>
    </tr>
</form>
  </table>
   <input type="submit" name="submit" value="Send OTP">
  <table id="student">
  	
  </table>
  <script>
  	function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getDate() + 1+ "/" + x.getMonth() + "/" + x.getFullYear(); 
x2 =  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('date').innerHTML = x1;
document.getElementById('time').innerHTML = x2;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>

</body>
</html>
<?php
$date=date("d-m-Y");
$time=date("h:i:s:a");
$name=$_POST['fname'];
$bnum=$_POST['busnum'];
$pwd=$_POST['apass'];
$confpwd=$_POST['aconfpass'];

if(isset($_POST['submit']))
{
$query="INSERT INTO driver_att VALUES('$date','$time','$name','$bnum','Present','hrlo','confpwd')";
$data=mysqli_query($conn,$query);

if($data)
{
 echo "data inserted into database";
}
else
{
  echo "failed to insert".mysql_connect_error();
}
}
?>
