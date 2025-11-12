<?php 
include("connect.php");
error_reporting(0);
session_start();
$error = "";
$qry = "select * from add_parent";
$data = mysqli_query($conn,$qry);
$rult = mysqli_fetch_assoc($data);

if(isset($_POST['submit']))
{
  date_default_timezone_set('Asia/Kolkata');
$name = $_POST['name'];
$bnum = $_POST['busno'];

 $query="select * from add_parent where Student_Name='$name' and Bus_No='$bnum' ";
 
 $result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);
 
   if($count>0)
   {
    $date=date("Y-m-d");

     $quey="select * from driver_att where date='$date' and BusNo ='$bnum' and status='active' ";
     $relt=mysqli_query($conn,$quey);
     $cont=mysqli_num_rows($relt);
 
      if($cont>0)
     {
       $bnm = $_POST['busno'];

       echo "Login Successful";
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
        default:
          break;
       }  
    }
    else{
    ?><script>alert("No Bus Active");</script>
     <?php
    }
  }
   else
   {
     $error =  "** Incorrect Student_Name or Bus_No **";
   }
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>trackltn page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
<script>
   function passvalues() {
      var busnum=document.getElementById("busno").value;
      localStorage.setItem("textans",busnum);
      // var email=document.getElementById("eml").value;
      // localStorage.setItem("textvalue2",email);
      return false;
    }
</script>
</head>
<body>
  <div class="login1">
   <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="">School Bus Tracking System</p>
 </div>
</div>
  <fieldset>
  <div class="card" id="cont" style="background-color:#f4f4f6; padding:10px; margin: 5% 25% 0% 25%; border: 1px solid black; width:50%">
    <article class="card-body mx-auto" style="//max-width: 1000px;">
      <h1 class="card-title mt-3 text-center">TRACK LOCATION</h1><br>
      <form action="#" method="POST" onsubmit="return valide()">
        <div class="error"><?php echo $error ?></div>
            <label>Student Name :</label>
            <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off" required>
            </div>
            <span id="username"></span><br>
  
             <label>Bus No. </label>
             <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="text" name="busno" id="busno" class="form-control" placeholder="Enter Bus No." autocomplete="off" required>
            </div>
             <span id="trkltn">&nbsp&nbsp</span><br>
             
            <div class="form-group">
              <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-block" onclick="passvalues();">
            </div>
            </form>
    </article> 
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
