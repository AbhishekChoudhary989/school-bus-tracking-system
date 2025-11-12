<?php
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		#name{margin-top:50px; margin-left:110px; font-size:20px;color:red;}
	</style>
</head>
<body>
	<form>
	<p>&nbspBus no : &nbsp<span id="answer1"></span>&nbsp</p>
	  <p id="name"><span id="answer1"></span><input type="text" id="demo" name="bun" size="10" readonly></p>
	    <input type="submit" name="submit" value="submit" id="button" class="present" onclick="getLocation()";>    
	</form>
<script>
	var x = document.getElementById("answer1").innerHTML=localStorage.getItem("textans");
 var mylist = document.getElementById("answer1").value = localStorage.getItem("textans");
  document.getElementById("demo").value = x;
 
 </script>
 <?php
if(isset($_GET['submit']))
{
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$time= date('H:i:s A');

  $qury = "select * from driver_att where date='$date' and status='active' ";
  $qry = mysqli_query($conn,$qury);
  $count = mysqli_num_rows($qry);
  if($count > 0)
  {
    switch ($nam) {
    	case '301':
    		    header('301track.php');
    break;
    	
    	case '302': 
    		
    		break;

    	default:
    		break;
    }
  }
  else
      {
        echo "failed to update".mysql_connect_error();
      }
}
?>

</body>
</html>
