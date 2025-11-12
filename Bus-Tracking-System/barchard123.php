<?php
include("connect.php");
error_reporting(0);
session_start();
?>
<html>
  <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
.card {
  width: 300px;
  height: 280px;
  margin-top: 100px;
  padding: 0;
  margin-left: 40px;
  box-shadow: 0 2px 4px 2px rgba(0,0,0,0.1);
  border-radius: 8px;
  box-sizing: border-box;
  overflow: hidden;
}
.card * {
  transition: 0.3s ease all;
}
.card img {
  margin: 0;
  width: 300px;
  height: 224px;
  object-fit: cover;
  display: block;
}
.card h3 {
color:red;
  margin: 0;
  padding: 12px 12px 48px;
  font-weight: 300;
  font-size: 20px;
}
.card .focus-content {
  display: block;
  padding: 8px 12px;
}
.card:hover img, .card:focus-within img {
  margin-top: -80px;
}
.card:hover h3, .card:focus-within h3 {
  padding: 8px 12px 0;
}
#barchart_values{
margin-left:500px;
margin-top:-20%;
}
</style>
       
    <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
var efficient= '<?=$Efficient?>';
var experience= '<?=$Experience?>';
var safety = '<?=$Safety?>';
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Efficient",5, "red"],
        ["Experience", 3, "green"],
        ["Safety",2, "orange"],
     
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Feedback of Driver",
        width: 800,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>

  </head>
  <body>
<div class="login">
  <div class="logo" style="background: royalblue; font-weight: bold;border: 2px solid mediumblue;">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; //height:80px"></img>
  <p id="heads" style="text-align: center; margin-top: -90px;padding: 5px; font-size: 50px;font-family: 'Righteous', cursive;">School Bus Tracking System</p>
   </div>
<div>
<?php
$name=$_GET['Driver_Name'];
$email=$_GET['Email'];
$photo=$_GET['Photo'];

?>
</div>
<div class="show_image">
<div class="card">
<?php
$photo=$_GET['Photo'];
echo $photo;
?>
  <h3 style="width: 50px;color:Red; height: 50px; margin-left: 100px;">
    <?php
$name=$_GET['Driver_Name'];
echo $name;
?>
  
</h3>
  </div>
</div>
</div>

<div id="barchart_values" style="width: 900px;margin-top: -350px; height: 300px;"></div>
</html>
