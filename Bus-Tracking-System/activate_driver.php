<?php 
session_start();
include("connect.php");
error_reporting(0);

$qry = "select * from add_driver";
$data = mysqli_query($conn,$qry);
$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
$user = $result['Driver_Name'];
$email = $result['Email'];
$pwd = $result['Password'];

if(isset($_GET['token']))
{
    $token = $_GET['token'];

    $updatequery = " update add_driver set status='active' where token='$token' ";
    $query = mysqli_query($conn,$updatequery);

    if($query)
    {
      $eml="$email";
      $subject="Account activated.";
      $body="Hii, $user. 
      Your account is activated successfully.
      Your username is $user and password is $pwd. ";
      $sender_email="From: tannukesarwani17@gmail.com";

       if(mail($eml, $subject, $body, $sender_email))
       {
         $_SESSION['msg'] = "Check mail to get username and password"  ;
         header('location:Driver_login.php');
       }
       else{
         echo "failed..";
       }
    }
    else{
            $_SESSION['msg']="You are logout";
            header('location:Driver_login.php');
        }
}
else{
        $_SESSION['msg']="Account not activated";
            header('location:Driver_login.php');
    }

 ?>