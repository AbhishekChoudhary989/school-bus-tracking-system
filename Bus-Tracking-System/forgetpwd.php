<?php 
include("connect.php");
error_reporting(0);
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style type="text/css">
    #cont{
      width: 40%;
      margin-top: 10%;
      margin-left: 30%;

    }
  </style>
</head>
<body>
  <h2 class="text-center">Bus Tracking System</h2>
	<div class="card bg-light text-center" id="cont">
		<article class="card-body mx-auto" style="max-width: 300px;">
			<h4 class="card-title mt-3 text-center">Recover Your Account</h4>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
 	          <div class="form-group input-group">
 	          	<div class="input-group-prepend">
 	          		<span class="input-group-text"><i class="fa fa-envelope"></i></span>
 	          	</div>
 	          	<input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
 	          </div>

 	          <div class="form-group">
 	          	<button type="submit" name="submit" class="btn btn-primary btn-block">Send Mail</button>
 	          </div>
            </form>
		</article> 
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $eml=$_POST['email'];
 
  $emailquery = "select * from add_parent where email='$eml' ";
  $qry = mysqli_query($conn,$emailquery);

  $emailcount = mysqli_num_rows($qry);
  if($emailcount>0){

  	$userdata = mysqli_fetch_array($qry);

  	$username = $userdata['Student_Name'];
  	$token = $userdata['token'];
    
     $subject="Password Reset";
     $body="Hii, $username. Click here to activate your account http://localhost/finalproject/resetpwd.php?token=$token ";
     $sender_email="From: tannukesarwani17@gmail.com";

     if(mail($eml, $subject, $body, $sender_email))
     {
       $_SESSION['msg']="Check mail to reset your Password";
       header('location:Parent_login.php');
     }
     else
     {
      echo "Email sending failed..";
      }   
  }
  else{
  	echo "Email Not Found";
  }
}
?>
