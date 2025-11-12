<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
.login{ }
.login nav{border: 1px solid black;
 //background-color: blue;}
.login div ul li{font-size: 18px; 
list-style-type:none; 
margin-right: 50px; 
padding-right: 10px; 
padding-left: 10px;}
.login div ul li:hover{background-color: black;
border-radius: 5px;}
</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
<div class="login">
  <div class="logo" style="background: royalblue; font-weight: bold;border: 2px solid mediumblue;">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; margin-left:-1122px; //height:80px"></img>
  <p id="heads" style="text-align: center; margin-top: -90px;padding: 5px; font-size: 50px;font-family: 'Righteous', cursive;">School Bus Tracking System</p>
   </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto-light">
      <li class="nav-item active"><a class="nav-link" href="home.html.html">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="about us.html">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="serc.html">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contant Us</a></li>
    </ul>
     <ul class="navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="P2Login.html"><span class="glyphicon glyphicon-log-in"></span>  Back</a></li>
    </ul>
 </div>
</nav>
</div>
<div class="name_display">
<? php
echo $_POST["Driver_Name"];
echo $_POST["Email"];
?>
<div>

	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thanks for pointing out what we can do better in the future for our kids <br> we really appreciate your valuable feedback..</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2014 | All Rights Reserved</p>
	</footer>
</div>
</body>
</html>