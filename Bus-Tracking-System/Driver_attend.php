<?php
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <title></title>
</head>
<style type="text/css">
*{margin:0;padding:0;box-sizing:border-box;}
body{//overflow:hidden;//display:flex; background-color:#ffffff;}
.border{border-radius:5%; background-color:#AEC6CF; width: 300px; height:15%; border: 2px solid black; padding: 50px;margin-top: 100px;display: block;margin-left:35%;padding: 10px 25px;// cursor: pointer;}
.login{ background:white;}
#name{margin-top:-110px; margin-left:110px; font-size:20px;color:white;}
.present{font-size:20px; color:black; background-color:light green; width:70%; height:40px; margin-left:60px; margin-top:20px;border:2px solid black; border-radius:15%;}
#location{color:red; border:1px solid black; font-size:14px; //width:290px; height:20px;//box-sizing:border-box;}
</style>
<body>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<link rel = "icon" href="driver.jpg" type = "image/x-icon">
<div class="login">
  <div class="a"><h1 style="text-align:center; background-color:royalblue ;width: 100%;height: 30%; color:white;">Driver  <button class="back" style="color:white;width: 4%;float:right;border: 2px solid black;font-size:24px;border-radius: 15%;background-color: royalblue;margin-top:9px;"><a style="color:white;" href="D2Login.php">Back</a></button> </h1></div>

  <div class="border">
    <img src="person.png" alt="Driver" style="width:90px;height:140px; clip-path:circle();">
    <form action="#" name="formcontact1" method="POST" onsubmit="">
      
      <p id="name"><span id="result1"></span><input type="text" id="demo" name="dname" size="10" readonly hidden></p>
      <p id='date' style="color:white; font-size:18px;margin-left:110px"></p>
      <p id='time' style="color:white; font-size:18px;margin-left:110px"></p>
      <input type="text" name="buss" placeholder="Enter Bus Number" autocomplete="of" required style="margin-left: 15%;">
      <input type="submit" name="submit" value="START TRACKING" id="button" class="present" onclick="getLocation()";>
      </form>
      <br>
      <br><p id="m"></p>
      <p id="latitude"></p>
      <p id="longitude"></p>
  </div>
</div>
<p id="alert"></p>
<script>
 var x = document.getElementById("result1").innerHTML=localStorage.getItem("text");
 var mylist = document.getElementById("result1").value = localStorage.getItem("text");
  document.getElementById("demo").value = x;
 </script>
 <script>
{
   function ValidateEmail(event, inputText){
      event.preventDefault();
      //remaining function logic goes here
   }
}
</script>
<script>function display_ct6() {
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
<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  var latitude = position.coords.latitude;
  var longitude= position.coords.longitude;
  var m="Current Location:";
  document.getElementById('m').innerHTML = m;
  document.getElementById('latitude').innerHTML = "Latitude:"+latitude;
  document.getElementById('longitude').innerHTML = "Longitude:"+longitude;
  var latlong = new google.maps.LatLng(latitude, longitude);
    
    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {
            style:google.maps.NavigationControlStyle.SMALL
        }
    }
    
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      var m = "User denied the request for Geolocation.";
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}
</script>
</body>
</html>
</body>
<?php
if(isset($_POST['submit']))
{
  date_default_timezone_set('Asia/Kolkata');

$date=date("Y-m-d");
$time= date('H:i:s A');
$nam=$_POST['dname'];
$bus=$_POST['buss'];

  $qury = "select * from driver_att where date='$date' and name='$nam' and status='active' ";
  $qry = mysqli_query($conn,$qury);
  $count = mysqli_num_rows($qry);

  if($count > 0)
  {
    //echo "already exists";
    ?><script>alert("Tracking is already started");</script>
     <?php
   }
   else{
    $query="INSERT INTO driver_att VALUES('$date','$time','$nam','$bus','Present','active','')";
    $data=mysqli_query($conn,$query);
      if($data)
      {
       echo '<script>getLocation();</script>';
        ?><script>alert("Tracking Started");</script>
     <?php
      }else
      {
        echo "failed to insert".mysql_connect_error();
      }
    }
}
?>
