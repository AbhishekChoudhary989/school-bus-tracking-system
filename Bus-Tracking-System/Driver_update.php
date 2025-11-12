<?php
include("connect.php");
error_reporting(0);
$busno=$_GET['busno'];
$drivername=$_GET['drivername'];
$email=$_GET['email'] ;
$contnum=$_GET['Cont_Num'];
$add=$_GET['add'];
?>
<html>
<head>
<title>Update Driver Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
*{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
}
body{
    background-color:#D3D3D3;
    background:url("back.jpg");
    background-color: rgba(255,255,255,0.5);
    background-blend-mode: lighten;
    background-position:center;
    background-size:cover;
}
.navigation-bar{
    width:100%;
    background: linear-gradient(to right,blue,indigo,violet);
    margin-top:-5px;
    height: 80px;
}
.logo{
    width:80px;
    height:80px;
    margin-right:20px;
    margin-top:1px;
}
#bus{
    font-size:40px;
    text-align:center;
    color:bisque;
    text-transform:uppercase;
    margin-top: -60px;
}
.container{
    border-radius:5px;
    background-color:white;
    padding:10px;
    border-width:1px;
    border-style:groove;
    width:45%;
    margin-top:60px;
}
h2{
    color: darkolivegreen;
    text-align: center;
}
input[type=text]{
    width:90%;
    padding:12px 20px;
    border:3px solid #ccc;
    border-radius:4px;
    resize:vertical;
   // margin:40px;
    display:block;
    box-sizing:border-box;
    //margin-left:120px;
}
label{
    padding:12px 12px 12px 0;
    display:inline-block;
}
input[type=submit]{
    border-radius:5px;
    background-color:blue;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    color: white;
    font-weight:bold;
    font-size:20px;
    text-transform: uppercase;
    border:2px solid black;
    width:30%;
    height:5%;
    //margin-top:80px;
    //margin-left:200px;
}
input[type=submit]:hover{
   transform: scale(0.99); 
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
.col-25{
    width:26%;
    margin-top:8px;
    font-size:18px;
    color:black;
    text-transform:uppercase;
}
.col-75{
    float:left;
    width:74%;
    height:80px;
    margin-top:6px;
}
.row:after{
    content:"";
    display:table;
    clear:both;
}
@media screen and (max-width: 1250px)
{
    .container{
    width:72%;
   }
   h2{
    font-size: 28px;
   }
   .col-25, .col-75{
    font-size: 17px;
   }
}
@media screen and (max-width: 750px)
{
    .container{
    width:95%;
   }
   h2{
    font-size: 25px;
   }
   .col-25, .col-75{
    font-size: 15px;
   }
}
</style>
<body>
<div class="navigation-bar">
    <div id="navigation-container">
        <img class="logo" src="logo.jpg">
        <h2 id="bus" class="text-center">Bus tracking</h2>
    </div>
</div>
<div class="container">
 <form action="" method="GET">
    <div class="">
        <h2 class="text-center">&nbsp&nbsp&nbspSTUDENT REGISTRATION</h2><br>
    </div>
<div class="row">
<div class="col-25 text-right">
 <label for="busno">Bus No :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$busno" ?>" name="busno" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="drivername">Driver Name :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$drivername" ?>"  name="drivername" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="email">Email :</label>
 </div>
 <div class="col-75">
<td><input type="text" value="<?php echo "$email" ?>"  name="email" required ></td>
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="cont">Contact :</label>
 </div>
 <div class="col-75">
<td><input type="text" value="<?php echo "$contnum" ?>"  name="contnum" required ></td>
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="Add">Address :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$add" ?>"  name="add" required >
</div>
</div>
<div class="text-center">
<input type="submit" id="button" name="submit" value="update"></a>
</div>
</form>
</div>
</body>
</html>
<?php
if($_GET['submit'])
{
    $bus_no=$_GET['busno'];
    $driver_name=$_GET['drivername'];
    $email=$_GET['email'];
    $contnum=$_GET['contnum'];
    $add=$_GET['add'];
$query="UPDATE ADD_DRIVER SET Bus_No='$bus_no',Driver_Name='$driver_name',Email='$email',Cont_Num='$contnum',Address='$add'  WHERE Email='$email' ";
$datas=mysqli_query($conn,$query);
if($datas){
    echo "<script>alert('Record Updated')</script>";
}
else{
    echo "Failed to record";
}
}
?>
</table>
</body>
</html>

