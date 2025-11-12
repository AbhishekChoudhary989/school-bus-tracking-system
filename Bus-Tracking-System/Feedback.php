<?php
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Responsive Registration Form</title>
    <link rel="stylesheet"  type="text/css" href="add_parent.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">FEEDBACK</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Roll No.</span>
            <input type="text" name="rollno" placeholder="Enter Student Roll No." required>
          </div>
          <div class="input-box">
            <span class="details">Student Name</span>
            <input type="text" name="stname" placeholder="Enter Student Name" required>
          </div>
          <div class="input-box">
            <span class="details">Class</span>
            <input type="text" name="std" placeholder="Enter Student Class" required>
          </div>
          <div class="input-box">
            <span class="details">Driver Name</span>
            <input type="text" name="dadname" placeholder="Enter Father Name" required>
          </div>
          <div class="input-box">
            <span class="details">Feedback</span>
            <textarea cols=20 row=20 name="address" placeholder="Enter Home Address" required></textarea>
           </div>
          <div class="input-box">
            <span class="details">Any Suggestion</span>
            <textarea cols=20 row=20 name="address" placeholder="Enter Home Address" required></textarea>
           </div>
         
        </div>
        <div class="button">
          <input type="submit" name="save" value="SUBMIT">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
$rno=$_POST['rollno'];
$snam=$_POST['stname'];
$cls=$_POST['std'];
$dnam=$_POST['dadname'];
$mnam=$_POST['momname'];
$eml=$_POST['email'];
$connum=$_POST['cno'];
$addr=$_POST['address'];
$bstop=$_POST['busstop'];

if(isset($_POST['save']))
{
$query="INSERT INTO ADD_PARENT VALUES('$rno','$snam','$cls','$dnam','$mnam','$eml','$connum','$addr','$bstop')";
$datas=mysqli_query($conn,$query);

if($datas)
{
 echo "data inserted into database";
}
else
{
  echo "failed to insert".mysql_connect_error();
}
}
?>
