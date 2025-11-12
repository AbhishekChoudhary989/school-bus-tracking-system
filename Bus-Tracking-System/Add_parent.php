<?php
include("connect.php");
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Responsive Registration Form</title>
    <link rel="stylesheet"  type="text/css" href="add_parent.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Student Registration</div>
    <div class="content">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return valide()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Roll No.</span>
            <input type="text" name="rollno" placeholder="Enter Student Roll No." autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Student Name</span>
            <input type="text" name="stname" placeholder="Enter Student Name" autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Class</span>
            <input type="text" name="std" placeholder="Enter Student Class" autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Father Name</span>
            <input type="text" name="dadname" placeholder="Enter Father Name" autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Mother Name</span>
            <input type="text" name="momname" placeholder="Enter Mother Name" autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Email Id</span>
            <input type="email" name="email" placeholder="Enter your email" autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" name="cno" placeholder="Enter Contact Number" autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Home Address</span>
            <textarea cols=20 row=20 name="address" placeholder="Enter Home Address" autocomplete="of" required></textarea>
           </div>
          <div class="input-box">
            <span class="details">Bus Stop</span>
            <input type="text" name="busstop" placeholder="Enter near by Stop" autocomplete="of" required>
          </div>
          <div class="input-box">
            <span class="details">Bus No.</span>
            <input type="text" name="bsno" placeholder="Enter alloated Bus no." autocomplete="of" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Send OTP">
        </div>
      </form>
    </div>
  </div>
   <script type="text/javascript">

  function valide(){

      var phonenum = document.getElementById('phonenum').value;

      if(phonenum==""){
        document.getElementById("message").innerHTML="**Mobile  number is required";
        return false;
      }
      if(isNaN(phonenum)){
        document.getElementById("message").innerHTML="**Enter only Numberic Value";
        return false;
      }
      if(phonenum.length<10){
        document.getElementById("message").innerHTML="**Mobile Number must be 10 digit";
        return false;
      }
      if(phonenum.length>10){
        document.getElementById("message").innerHTML="**Mobile Number must be 10 digit";
        return false;
      }
      if((phonenum.charAt(0)!=9)&&(phonenum.charAt(0)!=8)&&(phonenum.charAt(0)!=7)){
        document.getElementById("message").innerHTML="**Mobile Number  is Invalid";
        return false;
     }  
}
</script>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
  $rno=$_POST['rollno'];
  $snam=$_POST['stname'];
  $cls=$_POST['std'];
  $dnam=$_POST['dadname'];
  $mnam=$_POST['momname'];
  $emal=$_POST['email'];
  $connum=$_POST['cno'];
  $addr=$_POST['address'];
  $bstop=$_POST['busstop'];
  $btop=$_POST['bsno'];
  
 $comb = 'abcdefghijklmnopqrstuvwxyz1234567890';
 $pass = array(); 
 $combLen = strlen($comb) - 1; 
 for ($i = 0; $i < 6; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];}
  $passd=implode($pass); 
  $token = bin2hex(random_bytes(15));

  $emailquery = "select * from add_parent where email='$emal' ";
  $qry = mysqli_query($conn,$emailquery);
  $emailcount = mysqli_num_rows($qry);

  if($emailcount > 0)
  {
       echo "Email already exists";
     ?><script>alert("Email already exists");</script>
     <?php
  }
   else{
    $query="INSERT INTO ADD_PARENT VALUES('$rno','$snam','$cls','$dnam','$mnam','$emal','$connum','$addr','$bstop','$btop','$passd','English','$token','inactive')";
    $datas=mysqli_query($conn,$query);
     if($datas){
     $subject="Account activation mail";
     $body="Hii, $snam. Click here to activate your account http://localhost/finalproject/activate.php?token=$token ";
     $sender_email="From: sbtracking22@gmail.com";

      if(mail($emal, $subject, $body, $sender_email))
      {
         ?><script> alert("Data Inserted Successfully")</script><?php
      }
      else
      {
      echo "failed..";
      ?><script>alert("Mail not sent");</script>
     <?php
     }   
  }else{
    ?><script>alert("Data not Inserted");</script>
  <?php
  }
 }
}
?>
