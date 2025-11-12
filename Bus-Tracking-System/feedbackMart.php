<?php
include("connect.php");
error_reporting(0);
session_start();
$error = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Feedback Form in HTML Example </title>

    <meta name="author" content="Codeconvey" />
    
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="demo.css" >

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
.driver_data{
margin-left:50px;
}
  .error{
      color: red;
      text-align: center;
      font-size: 15px;
      margin-top: -10px;
      margin-bottom: 0px;
    }
    label{
      margin-top: 10px;
    }

@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
  .login{ background: royalblue; font-weight: bold;}
.login nav{border: 1px solid black; background-color: blue; margin-top: -10px;}
.login div ul li{font-size: 18px; list-style-type:none; margin-right: 50px; padding-right: 10px; padding-left: 10px;}
.login div ul li:hover{background-color: black;border-radius: 5px;}
</style>
</head>
<body>
<div class="login">
  <div class="logo" style="background: royalblue; font-weight: bold;border: 2px solid mediumblue;">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="text-align: center; margin-top: -90px;padding: 5px; font-size: 50px;font-family:'Righteous', cursive;">स्कूल बस ट्रॅकिंग सिस्टम</p></div>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="P2LogMart.html"><span class="glyphicon glyphicon-log-in"></span>  बाहेर जाणे</a></li>
    </ul>
 </div>
</nav>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>अभिप्राय फॉर्म </h1>
                <p></p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
 
<div class="feedback">
<p>प्रिय माता-पिता,<br>
आम्ही कशी कामगिरी केली हे आम्हाला जाणून घ्यायचे आहे. कृपया आम्हाला आपला मौल्यवान अभिप्राय देण्यासाठी काही क्षण द्या कारण यामुळे आम्हाला आमची सेवा सुधारण्यास मदत होईल </p>
<div class="driver_data">
    <form action="#" method="POST" onsubmit="return valide()" enctype="multipart/form-data">
         <div class="error"> <?php echo $error ?></div>
        
        <label>चालकाचे नाव :</label>
            <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
            <input type="text" name="driname" class="form-control" placeholder="नाव प्रविष्ट करा" autocomplete="off" required>
            </div>
            <span id="username"></span>
  
             <label>बस नंबर. </label>
             <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="text" name="busno" class="form-control" placeholder="बस नंबर प्रविष्ट करा" autocomplete="off" required>
            </div>
             <span id="trkltn">&nbsp&nbsp</span>
             
<br>
</div>
<h4>कृपया खालील पॅरामीटर्ससाठी आपल्या सेवा अनुभवाचे मूल्यांकन करा</h4>

<form method="post" action="#action-url">
<label>1. तुमचा आमच्याबरोबरचा एकूण अनुभव ?</label><br>
  
<span class="star-rating">
  <input type="radio" name="rating1" value="1" required><i></i>
  <input type="radio" name="rating1" value="2"><i></i>
  <input type="radio" name="rating1" value="3"><i></i>
  <input type="radio" name="rating1" value="4"><i></i>
  <input type="radio" name="rating1" value="5"><i></i>
</span>

  <div class="clear"></div> 
  <hr class="survey-hr">
<label>2. चालक किती कार्यक्षम आहे?</label><br>
<span class="star-rating">
  <input type="radio" name="rating2" value="1" required><i></i>
  <input type="radio" name="rating2" value="2"><i></i>
  <input type="radio" name="rating2" value="3"><i></i>
  <input type="radio" name="rating2" value="4"><i></i>
  <input type="radio" name="rating2" value="5"><i></i>
</span>


  <div class="clear"></div> 
  <hr class="survey-hr">
<label>3.आपल्या मुलांना ड्रायव्हरकडून किती सुरक्षितता वाटते?</label><br><br/>
  <div style="color:grey">
    <span style="float:left">खराब</span>
    <span style="float:right; margin-right: 30px;">सर्वोत्तम</span>
  </div>

<span class="scale-rating">
  <label value="1">
  <input type="radio" name="rating" value="1" required>
  <label style="width:100%;"></label>
  </label>
  <label value="2">
  <input type="radio" name="rating" value="2" required>
  <label style="width:100%;"></label>
  </label>
  <label value="3">
  <input type="radio" name="rating" value="3">
  <label style="width:100%;"></label>
  </label>
  <label value="4">
  <input type="radio" name="rating" value="4">
  <label style="width:100%;"></label>
  </label>
  <label value="5">
  <input type="radio" name="rating" value="5">
  <label style="width:100%;"></label>
  </label>
  <label value="6">
  <input type="radio" name="rating" value="6">
  <label style="width:100%;"></label>
  </label>
  <label value="7">
  <input type="radio" name="rating" value="7">
  <label style="width:100%;"></label>
  </label>
  <label value="8">
  <input type="radio" name="rating" value="8">
  <label style="width:100%;"></label>
  </label>
  <label value="9">
  <input type="radio" name="rating" value="9">
  <label style="width:100%;"></label>
  </label>
  <label value="10">
  <input type="radio" name="rating" value="10">
  <label style="width:100%;"></label>
  </label>
</span>

  <div class="clear"></div> 
  <hr class="survey-hr"> 
<label for="m_3189847521540640526commentText">4. इतर कोणत्याही सूचना:</label><br/><br/>
<textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
<br>
  <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit"  name="submit" value="आपले पुनरावलोकन सबमिट करा">&nbsp;
</form>
                  </div>
           
    		</div>
		</div>
    </div>
</section>
    <!-- Analytics -->
	</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$drnam=$_POST['driname'];
$bno=$_POST['busno'];
$experi=$_POST['rating1'];
$effict=$_POST['rating2'];
$safety=$_POST['rating'];
$suggest=$_POST['commentText'];

 $query="select * from add_driver where Driver_Name='$drnam' and Bus_No='$bno'  ";
 $result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);
    if($count>0)
    {
    $ins="INSERT INTO FEEDBACK VALUES('$drnam','$bno','$experi','$effict','$safety','$suggest')";
    $data=mysqli_query($conn,$ins);
      if ($data) 
     {
      echo "submitted review";
     } 
     else{
       echo "not submitted";
     }
    
     // echo "Login Successful";
      //header("location:D2Login.html");
      //exit();
   }
   else
   {
     $error =  "** Incorrect Username or password **";
   }
 }
 ?>


