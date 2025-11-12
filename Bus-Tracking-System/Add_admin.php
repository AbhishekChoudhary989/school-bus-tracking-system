<?php
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Responsive Registration Form</title>
    <link rel="stylesheet"  type="text/css" href="add_admin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title"> Admin Registration</div>
    <div class="content">
      <form action="#" method="POST" onsubmit="return valide()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" id="phonenum" name="pnum" placeholder="Number" required>
            <span id="message" style="color: red;"></span>

            <span id="">&nbsp&nbsp</span><br>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="pass" name="apass" placeholder="Password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="confpasswd" name="aconfpass" placeholder="Confirm your password" required>
            <span id="confirmpass" style="color: red;">&nbsp&nbsp</span><br>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="addinfo" value="Send OTP">
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript">
  function valide(){

      var phonenum = document.getElementById('phonenum').value;
      var password = document.getElementById('pass').value;
      var confpass = document.getElementById('confpasswd').value;
      
       if(confpass != password){
          document.getElementById('confirmpass').innerHTML = "**Please enter correct password";
          return false;
       }
       else{
          document.getElementById('confirmpass').innerHTML = "";
       }        

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
$fnam=$_POST['fname'];
$lnam=$_POST['lname'];
$eml=$_POST['email'];
$cnum=$_POST['pnum'];
$pwd=$_POST['apass'];
$confpwd=$_POST['aconfpass'];

if(isset($_POST['addinfo']))
{
$query="INSERT INTO ADD_ADMIN VALUES('$fnam','$lnam','$eml','$cnum','$pwd','$confpwd')";
$data=mysqli_query($conn,$query);

if($data)
{
 echo "data inserted into database";
}
else
{
  echo "failed to insert".mysql_connect_error();
}
}
?>
