<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="newlog.css">
   <link rel="stylesheet" type="text/css" href="A2Login.css">
</head>
<style>
*{margin:0; padding:0; font-family; list-style:none; text-decoration:none;}
.middle{position:absolute; top:24%; left:40%; #transform: translate(-50%,-50%);}
.menu{width:250px; border-radius:10px; overflow:hidden;}
.item{border-top:1px solid #2980b9; overflow:hidden; text-align: center;}
.btn{display:block; padding:16px 20px; background:#3498db; color:white; position:relative;}
.btn:before{content:""; position:absolute; width:14px; height:14px; background:#3498db; left:20px; bottom:-7px; transform:rotate(45deg);}
.btn i{margin-right:10px; font-size: 20px; font-style: normal;}
.smenu{background:#333; overflow:hidden; transition:max-height 0.5s; max-height:0px;}
.s1menu{background:#333; overflow:hidden; transition:max-height 0.5s;max-height:0px;}
.smenu a{display:block; padding:16px 26px; color:white; font-size:20px; margin:4px 0; position:relative;}
.s1menu a{display:block; padding:16px 26px; color:white; font-size:20px; margin:4px 0; position:relative;}
.s1menu a:before{content:""; position:absolute; width:5px; height:100%; background:#333; left:0; top:0; transition:0.5s; opacity:0;}
.smenu a:hover:before{opacity:1;}
.item:target .smenu{max-height:20em;}
.s1menu a:hover:before{opacity:1;}
.item:target .s1menu{max-height:20em;}
</style>
<body>
<div class="login">
 <div class="logo" style="background: royalblue; font-weight: bold;border: 2px solid mediumblue;">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="text-align: center; margin-top: -90px;//padding: 5px; font-size: 50px;font-family:'Righteous', cursive;">School Bus Tracking System</p></div>
</div>
<div class="middle">
  <div class="menu">
    <li class="item" id="bus">
      <a href="#bus" class="btn"><i class="fa fa-user">Bus</i></a>
       <div class="s1menu">
         <a href="admintrack.php">Bus Location</a>
         <a href="Busdetails.php">Bus histroy</a>
      </div></li>
      <li class="item" id="admin">
      <a href="#admin" class="btn"><i class="fa fa-user">Admin</i></a>
       <div class="smenu">
         <a href="View_admin1.php">View Details</a>
         <a href="Add_admin.php">Add Admin</a>
         <a href="compose.php">Mail as Admin</a>
      </div></li>
    <li class="item" id="profile">
      <a href="#profile" class="btn"><i class="fa fa-user">Driver</i></a>
       <div class="smenu">
         <a href="View_driver1.php">View Details</a>
         <a href="Add_driver.php">Add Driver</a>
      </div></li>
    <li class="item" id="message">
      <a href="#message" class="btn"><i class="fa fa-envelope">Parent</i></a>
       <div class="smenu">
         <a href="View_parent1.php">View Details</a>
         <a href="Add_parent.php">Student Registration</a>
    </div></li>
<li class="item" id="settings">
      <a href="#settings" class="btn"><i class="fa fa-cog">Feedback</i></a>
       <div class="smenu">
         <a href="viewfeedback.php">View Feedback</a>
    </div></li>
<li class="item">
      <a href="Login.html" class="btn"><i class="fa fa-sign-out">Logout</i></a>
       <div class="smenu">
    </div></li>
 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
