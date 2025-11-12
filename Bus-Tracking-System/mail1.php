
<?php 
$to="tannukesarwani17@gmail.com";
$subject="Test mail";
$message="i would like you inform that we are stuck in heavy";
$from="From: sbtracking22@gmail.com";

if(mail($to,$subject,$message,$from))
{
	header("location:mailsent.html");
       exit();
}
else{
	header("location:notsentmail.html");
       exit();
}
?>