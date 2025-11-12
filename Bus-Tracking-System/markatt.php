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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o"></script>
<style type="text/css">
*{margin: 0px; padding: 0px; box-sizing: border-box;}
table{margin-top: 10px; text-align: center; width: 100%; font-size: 20px;}
table th,td{padding: 10px;}
input{padding: 10px 25px 10px 25px; font-size: 15px;}
#attend{  }
button{background-color:red;color: white;padding: 10px;}
button:focus{background-color:lightgreen;color: white;}
.container{margin-top: px; height: 450px;width: ;//float: right;object-position: right;align-content: right; padding-bottom:0px;}
#embedMap{width: 100%;height: 95%;border: 1px solid blue;margin-top: 1%; margin-left:2%;//float: right;}
p{padding-left: 2%;}
#timed{font-size: 20px; margin-left: 1%; padding: 10px 250px 10px 25px;}
</style>
   </head>
<body>
  <script src="https://maps.google.com/maps/api/js?sensor=false">getLocation()</script>
   <div class="logo" style="background: royalblue; font-weight: bold; border: 2px solid mediumblue;">
      <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
      <p id="heads" style="text-align: center; margin-top: -90px; padding: 10px; font-size: 50px;font-family: 'Righteous', cursive;">School Bus Tracking System</p>
    <button class="back" style="color:white;width: 4%;float:right;border: 2px solid black;font-size:20px;border-radius: 15%;background-color: royalblue;margin-top:-50px;"><a style="color:white;" href="D2Login.php">Back</a></button> </h1></div>
  
   </div>
      <div class="container"><label style="font-size: 20px; padding: 2%; color: red; font-weight: bold;">Location of Bus Number 301</label>
         <script src="https://maps.google.com/maps/api/js?sensor=false">getLocation()</script>
      <div class="container">
       <p id="m"></p>
       <p id="latitude"></p>
       <p id="longitude"></p>
       <p><div id="embedMap" style="width:95%; height:400px;"></div></p>
    </div>    
      <p id="demo"></p>
    <p id="alert"></p>
<script>
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    var options = {timeout:60000};
   navigator.geolocation.watchPosition(showPosition, showError,options);
  } else { 
    alert("Sorry, browser does not support geolocation!");
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
  //display_c6();
}
function showPosition(position) {
  var latitude = position.coords.latitude;
  var longitude= position.coords.longitude;
  document.getElementById('latitude').innerHTML = "Latitude:"+latitude;
  document.getElementById('longitude').innerHTML = "Longitude:"+longitude;
  var latlong = new google.maps.LatLng(latitude, longitude);
    
    var myOptions = {
        center: latlong,
        zoom: 17,
        mapTypeControl: true,
        navigationControlOptions: {
          style:google.maps.NavigationControlStyle.SMALL
        }
    }
       const image ="https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
       //const image ="vans.png";
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({ position:latlong, map:map, icons:image ,label: {
      text: "\ue530",
      fontFamily: "Material Icons",
      color: "#ffffff",
      fontSize: "28px",
    }, title:"K J School bus is here!",  });
  // const beachMarker = new google.maps.Marker({
  //   position: { lat: -33.89, lng: 151.274 },
  //   map,
  // });
    $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
 
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
 function display_c6(){
var refresh=9000; // Refresh rate in milli seconds
mytime=setTimeout('getLocation()',refresh)
}
display_c6()
</script>
<!-- 
        <div id="filename"></div>
     <script> 
     $(function(){
       $('#filename').load("maps.php");
     });
    </script>
     <button  id="button" class="present" onclick="getLocation()">Start</button><br>
 -->   <!--     <p id="m"></p>
       <p id="latitude"></p>
       <p id="longitude"></p>
       <p><div id="embedMap" style="width:400px; height:300px;"></div></p>
     </div>     -->
   <h1 style="text-align:center; background-color:#AEC6CF ; color:black; margin-top:5% ;">Students</h1> 
      <div id="timed">
      <label>Date:</label><span id="date"></span>&nbsp&nbsp&nbsp
       <label>Time:</label><span id="time"></span>
     </div>
      <table id="student" border="1" style="padding: 10px;">
      <tr>
      <th>Student_Name</th>
      <th>Bus_No</th>
      <th>Bus Stop</th>
      <th>Pick Up</th>
      <th>Droped</th>
      </tr>
      <form action="#" method="POST" onsubmit="">
<?php 
date_default_timezone_set('Asia/Kolkata');

// $date=date("d-m-Y");
// $time= date('H:i:s A');
$name=$_POST['name'];
$bnum=$_POST['bnum'];

$query = "select * from add_parent where Bus_No='301' ";
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
            <td><?php echo" ".$result['Bus_stop']." ";?></td>     
            <td><input type="submit" name="pick" value="Pick up"></td>
            <td><input type="submit" name="drop" value="Droped"></td>
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
<?php
if(isset($_POST['pick']))
{
$qry = "select * from add_parent";
$data = mysqli_query($conn,$qry);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result = mysqli_fetch_assoc($data))
    {
    $user = $result['Student_Name'];
    $email = $result['Email'];
    $stop = $result['Bus_stop'];
    $pwd = $result['Password'];
}
}
      $eml="$email";
      $subject="Child Picked from Stop.";
      $body="Hii, Parent 
      Your child $user is picked from stop ' $stop. ' ";
      $sender_email="From: sbtracking22@gmail.com";

       if(mail($eml, $subject, $body, $sender_email))
       {
      ?><script>alert("Message send");</script>
     <?php
       }
       else{
         echo "failed..";
       }
}
?>
<?php
if(isset($_POST['drop']))
{
$qry = "select * from add_parent";
$data = mysqli_query($conn,$qry);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result = mysqli_fetch_assoc($data))
    {
    $user = $result['Student_Name'];
    $email = $result['Email'];
    $stop = $result['Bus_stop'];
    $pwd = $result['Password'];
}
}
      $eml="$email";
      $subject="Child Dropped on Stop.";
      $body="Hii, Parent 
      Your child $user has been dropped on stop ' $stop. ' ";
      $sender_email="From: sbtracking22@gmail.com";

       if(mail($eml, $subject, $body, $sender_email))
       {
      ?><script>alert("Message send");</script>
     <?php
       }
       else{
         echo "failed..";
       }
}
?>
