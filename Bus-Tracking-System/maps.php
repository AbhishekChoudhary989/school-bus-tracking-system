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
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o"></script>
<style type="text/css">
*{margin: 0px; padding: 0px; box-sizing: border-box;}
button{background-color:red;color: white;padding: 10px;}
button:focus{background-color:lightgreen;color: white;}
.container{margin-top: px; height: 450px;width: ;//float: right;object-position: right;align-content: right; padding-bottom:0px;}
#embedMap{width: 100%;height: 95%;border: 1px solid blue;margin-top: 1%; margin-left:2%;//float: right;}
</style>
   </head>
<body>
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
       //const image ="https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
       const image ="vans.png";
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({ position:latlong, map:map,label: {
      text: "\ue530",
      fontFamily: "Material Icons",
      color: "#ffffff",
      fontSize: "18px",
    }, title:"School bus are here!",  });
  // const beachMarker = new google.maps.Marker({
  //   position: { lat: -33.89, lng: 151.274 },
  //   map,
  // });
 
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
</body>
</html>
