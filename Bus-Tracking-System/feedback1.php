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
<style>
.driver_data{
margin-left:60px;
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
</style>
</head>
<body>

		
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto-light">
      <li class="nav-item active"><a class="nav-link" href="home.html">Home <span class="sr-only"></span></a></li>
      <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.html">Contant Us</a></li>
    </ul>
  </div>
</nav>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Feedback Form </h1>
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
<p>Dear Parents,<br>
We would like to know how we performed. Please spare some moments to give us your valuable feedback as it will help us in improving our service </p>
<div class="driver_data">
    <form action="#" method="POST" onsubmit="return valide()" enctype="multipart/form-data">
         <div class="error"> <?php echo $error ?></div>
        
        <label>Driver Name :</label>
            <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
            <input type="text" name="driname" class="form-control" placeholder="Enter your name" autocomplete="off" required>
            </div>
            <span id="username"></span>
  
             <label>Bus No. </label>
             <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="text" name="busno" class="form-control" placeholder="Enter Bus No." autocomplete="off" required>
            </div>
             <span id="trkltn">&nbsp&nbsp</span>
             
<br>
</div>
<h4>Please rate your service experience for the following parameters</h4>

<form method="post" action="#action-url">
<label>1. Your overall experience with us ?</label><br>
  
<span class="star-rating">
  <input type="radio" name="rating1" value="1" required><i></i>
  <input type="radio" name="rating1" value="2"><i></i>
  <input type="radio" name="rating1" value="3"><i></i>
  <input type="radio" name="rating1" value="4"><i></i>
  <input type="radio" name="rating1" value="5"><i></i>
</span>

  <div class="clear"></div> 
  <hr class="survey-hr">
<label>2. How efficient is the driver?</label><br>
<span class="star-rating">
  <input type="radio" name="rating2" value="1" required><i></i>
  <input type="radio" name="rating2" value="2"><i></i>
  <input type="radio" name="rating2" value="3"><i></i>
  <input type="radio" name="rating2" value="4"><i></i>
  <input type="radio" name="rating2" value="5"><i></i>
</span>


  <div class="clear"></div> 
  <hr class="survey-hr">
<label>3.How much your kids feels safety by the driver?</label><br><br/>
  <div style="color:grey">
    <span style="float:left">POOR</span>
    <span style="float:right; margin-right: 30px;">BEST</span>
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
<label for="m_3189847521540640526commentText">4. Any Other suggestions:</label><br/><br/>
<textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
<br>
  <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit"  name="submit" value="Submit your review">&nbsp;
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


