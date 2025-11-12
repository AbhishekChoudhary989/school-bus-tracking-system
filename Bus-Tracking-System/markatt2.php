<?php
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title>Mark Attendance</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o"></script>
<style type="text/css">
*{margin: 0px; padding: 0px; box-sizing: border-box;}
table th,td{padding: 5px; text-align: center;}
#attend{  }
button{background-color:red;color: white;padding: 10px;}
button:focus{background-color:lightgreen;color: white;}
.container{margin-top: px; height: 450px;width: ;//float: right;object-position: right;align-content: right; padding-bottom:0px;}
#embedMap{width: 100%;height: 95%;border: 1px solid blue;margin-top: 1%; margin-left:2%;//float: right;}
p{padding-left: 2%;}
</style>
   </head>
<body>
  <script src="https://maps.google.com/maps/api/js?sensor=false">getLocation()</script>
   <div class="logo" style="background: royalblue; font-weight: bold; border: 2px solid mediumblue;">
      <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
      <p id="heads" style="text-align: center; margin-top: -90px; padding: 10px; font-size: 50px;font-family: 'Righteous', cursive;">School Bus Tracking System</p>
   </div>
      <div class="container"><label style="font-size: 20px; padding: 2%; color: red; font-weight: bold;">Location of Bus Number 302</label>
        <div id="filename"></div>
     <script> 
     $(function(){
       $('#filename').load("maps.php");
     });
    </script>
   <!--      <button  id="button" class="present" onclick="getLocation()">Start</button><br>
       <p id="m"></p>
       <p id="latitude"></p>
       <p id="longitude"></p>
       <p><div id="embedMap" style="width:400px; height:300px;"></div></p>
    --> </div>    
     <h1 style="text-align:center; background-color:#AEC6CF ; color:black; margin-top:5% ;">Students</h1> 
       <label>Date:</label><span id="date"></span>
       <label>Time:</label><span id="time"></span>
      <table id="student" border="1" style="padding: 10px;">
      <tr>
      <th>Student_Name</th>
      <th>Bus_No</th>
      <th>Pick Up</th>
      <th>Reached</th>
      <th>Depart</th>
      <th>Droped</th>
      </tr>
      <form action="#" method="POST" onsubmit="">
<?php 
date_default_timezone_set('Asia/Kolkata');

// $date=date("d-m-Y");
// $time= date('H:i:s A');
$name=$_POST['name'];
$bnum=$_POST['bnum'];

$query = "select * from add_parent where Bus_No='302' ";
$qbus = "select * from driver_att ";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$info = mysqli_query($conn,$qbus);
$rlt = mysqli_fetch_assoc($info);
if($total!=0)
{
  while($result = mysqli_fetch_assoc($data))
  {
?>
        <tr>
            <td><?php echo" ".$result['Student_Name']." ";?></td>
            <td><?php echo" ".$result['Bus_No']." ";?></td>     
            <td><input type="submit" name="" value="Pick up"></td>
            <td><input type="submit" name="" value="Reached"></td>
            <td><input type="submit" name="" value="Depart"></td>
            <td><input type="submit" name="" value="Droped"></td>
        </tr>
        <?php
        }
}
else
{
  echo "no record";
}
?>
        </form>
      </table>
      <p id="demo"></p>
    <p id="alert"></p>
<script>
function display_ct6() 
{
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getDate() +  "/" + x.getMonth() + 1+"/" + x.getFullYear(); 
x2 =  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('date').innerHTML = x1;
document.getElementById('time').innerHTML = x2;
display_c6();
 }
 function display_c6(){
var refresh=10; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>
</body>
</html>
