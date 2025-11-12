<?php 
session_start();
include("connect.php");
error_reporting(0);

$qry = "select * from add_parent";
$data = mysqli_query($conn,$qry);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result = mysqli_fetch_assoc($data))
    {
    $user = $result['Student_Name'];
    $email = $result['Email'];
    $busno = $result['Bus_No'];
    $pwd = $result['Password'];
}
}
if(isset($_GET['token']))
{
    $token = $_GET['token'];

    $updatequery = " update add_parent set status='active' where token='$token' ";
    $query = mysqli_query($conn,$updatequery);

    if($query)
    {
      $eml="$email";
      $subject="Account activated.";
      $body="Hii, $user. 
      Your account is activated successfully.
      Your username is $user and password is $pwd and your child Bus number is $busno ";
      $sender_email="From: sbtracking22@gmail.com";

       if(mail($eml, $subject, $body, $sender_email))
       {
         $_SESSION['msg'] = "Check mail to get username and password"  ;
         header('location:Parent_login.php');
       }
       else{
         echo "failed..";
       }
    }
    else{
            $_SESSION['msg']="You are logout";
            header('location:Parent_login.php');
        }
}
else{
        $_SESSION['msg']="Account not activated";
            header('location:Parent_login.php');
    }

 ?>