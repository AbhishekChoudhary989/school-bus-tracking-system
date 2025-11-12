<?php 
include("connect.php");
error_reporting(0);
session_start();
ob_start();
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
      width: 50%;
      margin-top: 10%;
      margin-left: 25%;

    }
    #input{
      //width: 500px;
    }
  </style>
</head>
<body>
  <h2 class="text-center">Bus Tracking System</h2>
	<div class="card bg-light" id="cont">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Recover Your Account</h4>
         <p class="bg-info text-white px-5"><?php 
         if (isset($_SESSION['passmsg'])) {
            echo $_SESSION['passmsg'];
         }else{
           echo $_SESSION['passmsg']="";
         }
         
         ?></p>
			<form action="" method="POST">
 	          <div class="form-group input-group" id="input">
 	          	<div class="input-group-prepend">
 	          		<span class="input-group-text"><i class="fa fa-lock"></i></span>
 	          	</div>
 	          	<input type="email" name="pwd" class="form-control" placeholder="New Password" required>
 	          </div>

             <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="email" name="confpwd" class="form-control" placeholder="Confirm Password" required>
            </div>

 	          <div class="form-group">
 	          	<button type="submit" name="submit" class="btn btn-primary btn-block">Update Password</button>
 	          </div>
            </form>
		</article> 
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  if(isset($_GET['token'])){
    $token = $_GET['token'];

  $password=$_POST['pwd'];
  $confpass=$_POST['confpwd'];

    if($password === $confpass){
      $updateqry = "update add_parent set Password='$password' where token='$token' ";
      $qry = mysqli_query($conn,$updateqry);
      if($qry){
        $_SESSION['msg']="Your password has been updated" ;
        header('location:Parent_Login.php');
      }else{
        $_SESSION['passmsg']="Your password is not updated";
        header('location:resetpwd.php');
      }
    }
    else{
      echo "Password not matching";
    }
  }else{
    echo "No token";
  }
}
?>
