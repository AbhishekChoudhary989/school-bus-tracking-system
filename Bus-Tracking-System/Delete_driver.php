<?php 
include("connect.php");
error_reporting(0);
$email=$_GET['email'];
$query="DELETE from ADD_DRIVER where Email='$email'";
$data=mysqli_query($conn,$query);
if($data){
    echo"<script>alert('Record Deleted from Database')</script>";
    ?>
    <META HTTP-EQUIV='Refresh' CONTENT="0"; URL="http://localhost/finalproject/View_driver.php">
    }

else{
    <?php
    echo"<script>alert('Record failed  to Deleted from Database')</script>";
}
?>