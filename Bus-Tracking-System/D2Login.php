<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="newlog.css">
<style type="text/css">
*{margin:0; padding:0; box-sizing:border-box;list-style-type: none;}
.login{ background: royalblue; font-weight: bold;}
.border{text-align: center; border:10px solid darkblue; border-radius:5%; background-color:cornflowerblue; width: 350px; height:60%; //padding: 50px; margin-top: 80px; display: block; margin-left:35%; padding: 10px 25px;cursor: pointer;}
a{text-decoration: none;}
.menu li{width:230px; height:50px; cursor:pointer; border:2px solid mediumblue; border-radius:20px; background-color:#F5F5F5; color:black; flex: inline-flex;font-size:18px; font-weight: bold; padding: 10px; margin: 20px 30px 30px 30px;//cursor: pointer;}
.b1,.b2,.b3,.b4,.b5{user-select:none; margin-top:20px; text-align: center; margin-left:10%;border:3px solid mediumblue;}
.sub-menu-1{display:none;}
.menu ul li:hover .sub-menu-1{display:block; position:absolute;background:cornflowerblue;border-radius: 10px;margin-top: -45px;margin-left:218px;border:2px solid darkblue;}
</style>
</head>
<body>
  <div class="login"> 
  <div class="logo" style="background: royalblue; font-weight: bold;border: 2px solid mediumblue;">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="text-align: center; margin-top: -90px; font-size: 50px;font-family:'Righteous', cursive;">School Bus Tracking System</p></div>
 
</div>
<div class="border" style="border: 2px solid royalblue;">
<div class="menu">
<ul>
   <a href="Driver_attend.php"><li class="b1">Start Tracking</li></a>
   <a href="drivertracklct.php"><li class="b2">Track Location</li></a>
   <a href="attendance.php"><li class="b2">Attendance Report</li></a>
   <a href="button.html"><li class="b3">Emergency</li></a>
   <a href="Driverstop.php"><li class="b4">Stopped Tracking</li></a>
   <a href="Login.html"><li class="b5">Exit</li>
</ul>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>