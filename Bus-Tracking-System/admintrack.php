<?php 
include("connect.php");
error_reporting(0);
session_start();
$error = "";

if(isset($_POST['submit']))
{
  date_default_timezone_set('Asia/Kolkata');
$bnum = $_POST['busno'];

    $date=date("Y-m-d");

     $quey="select * from driver_att where date='$date' and BusNo ='$bnum' and status='active' ";
     $relt=mysqli_query($conn,$quey);
     $cont=mysqli_num_rows($relt);
 
   if($cont>0)
   {
   	echo "function test";
    
        $bnm = $_POST['busno'];
        switch ($bnm) 
        {
         case '301':
            header("location:301track.php");
          exit();
      
           break;
         case '302':
             header("location:302track.php");
          exit();
      
          break;
        //default:
          //break;
       }  
    }
    else{
    ?><script>alert("This Bus is not Running");</script>
     <?php
    }
  }
   else
   {
     $error =  "** Incorrect Bus Number **";
   }
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<title></title>
</head>
<style type="text/css">
*{margin: 0;padding: 0}
a{text-decoration: none;}
label{//font-size: 20px;//color: blue;}
.login1{background-color: royalblue; font-weight: bold;border: 3px solid black;}
.login1 p{padding: 5px;}
#heads{text-align: center; margin-top: -100px;font-size: 50px;}
#heading{text-align: center;color: darkblue;background-color: #F0F8FF;}
.error{color: red; text-align: center;font-size: 15px;margin-bottom: 10px;}
#input{//border: 1px solid black;}
@media screen and (max-width: 950px){
.login1 p{font-size: 30px;text-align: center;padding-left: 50px;}
#heads{text-align: center; margin-top: -80px;font-size: 30px;margin-left: 10%;}
#input{//width: 350px;}
h1{font-size: 35px;}
}
</style>
<body>
    <div class="login1">
   <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="">School Bus Tracking System</p>
 </div>
    
  <fieldset>
  <div class="card" id="cont" style="background-color:#f4f4f6; padding:10px; margin: 5% 25% 0% 25%; border: 1px solid black; width:50%">
    <article class="card-body mx-auto" style="//max-width: 1000px;">
      <h1 class="card-title mt-3 text-center">TRACK LOCATION</h1><br>
      <p class="bg-success text-white px-4 text-center"><?php echo $_SESSION['msg']; ?></p>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return valide()">
        <div class="error"><?php echo $error ?></div>
  
             <label>Bus No. </label>
             <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="text" name="busno" class="form-control" placeholder="Enter Bus No." autocomplete="off" required>
            </div>
             <span id="trkltn">&nbsp&nbsp</span><br>
             
            <div class="form-group">
              <button type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-block">SUBMIT</button>
            </div>
            </form>
    </article> 
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
</html>