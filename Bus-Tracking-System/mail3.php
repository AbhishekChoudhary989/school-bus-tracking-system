
<?php 
$to="tannukesarwani17@gmail.com";
$subject="From School Driver";
$message="I regret to inform you that today, I am having difficulty in conversations due to poor network connection.";
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