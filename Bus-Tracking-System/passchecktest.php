<?php

include('connect.php');
$to = "9372592588@sms.alltelwireless.net";
$from = "tannukesarwani17@gmail.com";
$message ="This is text message";      
$headers = "From $from\n";
//mail($to,'', $message,$headers);
if(mail($to,'', $message,$headers))
{
      ?><script> alert("Data Inserted Successfully")</script>
      <?php
}
else
{      echo "failed..";
      ?><script>alert("Data not Inserted");</script>
     <?php
     }
?>