
<?php 
$to="kajolpathak04@gmail.com";
$subject="Test mail";
$message="i would like inform you that there is BUS has some problem";
$from="sbtracking22@gmail.com";
$headers="From:" . $from;

if(mail($to,$subject,$message,$headers))
{
	header("location:mailsent.html");
       exit();
}
else{
	header("location:notsentmail.html");
       exit();
}

?>