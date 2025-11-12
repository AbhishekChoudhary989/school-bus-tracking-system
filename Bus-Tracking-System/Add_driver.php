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
    <div class="title">Driver Registration</div>
    <div class="content">
      <form action="" method="POST" onsubmit="return valide()" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Bus No.</span>
            <input type="text" name="busno" placeholder="Enter Driver Bus No." required>
          </div>
          <div class="input-box">
            <span class="details">Driver Name</span>
            <input type="text" name="driname" placeholder="Enter Driver Name" required>
          </div>
          <div class="input-box">
            <span class="details">Email Id</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="Number" name="cnumber" placeholder="Enter Contact Number" required>
          </div>
          <div class="input-box">
            <span class="details">Home Address</span>
            <textarea cols=20 row=2s0 name="address" placeholder="Enter Home Address" required></textarea>
            </div>
          <div class="input-box">
            <span class="details">Photo</span>
            <input type="file" name="photo" placeholder="Uplode Photo" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Send Mail">
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
$bno=$_POST['busno'];
$drnam=$_POST['driname'];
$eml=$_POST['email'];
$cnum=$_POST['cnumber'];
$add=$_POST['address'];
$pht=$_FILES['photo']['name'];

$tempname=$_FILES['photo']['tmp_name'];
$folder ="doc_photo/.$pht";

move_uploaded_file($tempname, $folder);
//echo $folder;

 $comb = 'abcdefghijklmnopqrstuvwxyz1234567890';
 $pass = array(); 
 $combLen = strlen($comb) - 1; 
 for ($i = 0; $i < 6; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];}
  $passd=implode($pass); 
  $token = bin2hex(random_bytes(15));

  $emailquery = "select * from add_driver where email='$eml' ";
  $qry = mysqli_query($conn,$emailquery);
  $emailcount = mysqli_num_rows($qry);


if($emailcount > 0){
  echo "Email already exists";
    ?><script>alert("Email already exists");</script>
     <?php
}
else{
$query="INSERT INTO ADD_DRIVER VALUES('$bno','$drnam','$eml','$cnum','$add','$pht','$passd','$token','inactive')";
$data=mysqli_query($conn,$query);

if($data){
     $subject="Account activation mail";
     $body="Hii, . Click here to activate your account http://localhost/finalproject/activate_driver.php?token=$token ";
     $sender_email="From: sbtracking22@gmail.com";

      if(mail($eml, $subject, $body, $sender_email)){
      ?><script> alert("Data Inserted Successfully")</script>
      <?php
      }else{
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
