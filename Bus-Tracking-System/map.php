<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj-spO7qSdlBcId6htCIg3xrxHhX8cOcE&callback=loadMap&libraries=&v=weekly"defer></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
  </head>
<style type="text/css">
  .container{
    height: 450px;
    margin-top: -165px;
  }
  #map{
    margin-top: -165px;
    width: 100%;
    height: 100%;
    border: 1px solid blue;
  }
</style>
  <body onload="getLocation()">
    <div class="container">
    //  <p id="demo"></p>
     // <p><div id="embedMap" style="width:400px; height:300px;"></div></p> 
    <div id="map"></div>
  </div>
  </body>
  <script type="text/javascript">
     function loadMap(){
      var mumbai = { lat: 19.0759837, lng: 72.8776559 };
      var map = new google.maps.Map(
     document.getElementById("map"),{
       zoom: 10,
       center: mumbai,
     });
      var marker = new google.maps.Marker({
     position: mumbai,
     map: map,
   });
   }
//var x = document.getElementById("demo");

//   function getLocation() {
//   if (navigator.geolocation) {
//    navigator.geolocation.getCurrentPosition(showPosition, showError);
//   } else { 
//     x.innerHTML = "Geolocation is not supported by this browser.";
//   }
// }
// autoUpdate();

// function showPosition(position) {
//   var latitude = position.coords.latitude;
//   var longitude= position.coords.longitude;
//   document.getElementById('latitude').innerHTML = "Latitude:"+latitude;
//   document.getElementById('longitude').innerHTML = "Longitude:"+longitude;
//   var latlong = new google.maps.LatLng(latitude, longitude);
    
//     var myOptions = {
//         center: latlong,
//         zoom: 18,
//         mapTypeControl: true,
//         navigationControlOptions: {
//           style:google.maps.NavigationControlStyle.SMALL
//         }
//     }
//     var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
//     var marker = new google.maps.Marker({ position:latlong, map:map, title:"You are here!" });
// }

// function showError(error) {
//   switch(error.code) {
//     case error.PERMISSION_DENIED:
//       var m = "User denied the request for Geolocation.";
//       break;
//     case error.POSITION_UNAVAILABLE:
//       x.innerHTML = "Location information is unavailable."
//       break;
//     case error.TIMEOUT:
//       x.innerHTML = "The request to get user location timed out."
//       break;
//     case error.UNKNOWN_ERROR:
//       x.innerHTML = "An unknown error occurred."
//       break;
//   }
// }
 </script>
</html>
                     