<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "finalproject1";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) 
{
   // echo "Connection okk"; 	
} 
else{
	echo "Connection failed".mysqli_connect_error();
}
?>