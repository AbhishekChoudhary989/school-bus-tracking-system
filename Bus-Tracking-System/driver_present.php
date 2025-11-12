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
.border{border-radius:5%; background-color:#AEC6CF; width: 300px; height:15%; border: 2px solid black; padding: 50px;margin-top: 100px;display: block;margin-left:50px;padding: 10px 25px;// cursor: pointer;}
.login{ background:white;}
#name{margin-top:-110px; margin-left:110px; font-size:20px;color:white;}
.present{font-size:20px; color:black; background-color:light green; width:70%; height:40px; margin-left:60px; margin-top:20px;border:2px solid black; border-radius:15%;}
#location{color:red; border:1px solid black; font-size:14px; //width:290px; height:20px;//box-sizing:border-box;}
</style>
<body>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<link rel = "icon" href="driver.jpg" type = "image/x-icon">
<div class="login">
  <h1 style="text-align:center; background-color:#AEC6CF ; color:black;">Driver</h1> 
  <div class="border">
    <img src="person.png" alt="Driver" style="width:90px;height:140px; clip-path:circle();">
      <p id="name">Kajol</p>
      <p id='date' style="color:white; font-size:18px;margin-left:110px"></p>
      <p id='time' style="color:white; font-size:18px;margin-left:110px"></p>

      <button  id="button" class="present" onclick="getLocation()">PRESENT</button><br>
      <br><p id="m"></p>
      <p id="latitude"></p>
      <p id="longitude"></p>
       <p><div id="embedMap" style="width:400px; height:300px;"></div></p> 
  </div>
</div>
<p id="alert"></p>
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
    
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({ position:latlong, map:map, title:"You are here!" });

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
