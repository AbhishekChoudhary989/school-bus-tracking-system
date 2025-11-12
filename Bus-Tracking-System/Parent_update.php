<?php
include("connect.php");
error_reporting(0);
$Roll_No=$_GET['Roll_No'];
$Student_Name=$_GET['Student_Name'];
$Class=$_GET['Class'] ;
$Father_Name=$_GET['Father_Name'];
$Mother_Name=$_GET['Mother_Name'];
$Email=$_GET['Email'];
$Contact_Num=$_GET['Contact_Num'];
$Home_Add=$_GET['Home_Add'];
$Bus_stop=$_GET['Bus_stop'];
?>
<html>
<head>
<title></title>
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
    align:center ;
    text-align: center;
    border-radius:5px;
    background-color:white;
    padding:10px;
    border-width:1px;
    border-style:groove;
    width:50%;
    margin-top:30px;
}
h2{
    color: darkolivegreen;
    text-align: center;
    margin: 5px;
    padding-bottom: 5px;
}
input[type=text]{
    width:85%;
    padding:4px 20px;
    border:2px solid ;
    border-radius:4px;
    resize:vertical;
   // margin:40px;
    display:block;
    box-sizing:border-box;
    //margin-left:120px;
}
label{
    padding:4px 20px 12px 0;
    display:inline-block;
    font-weight: bold;
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
    width:25%;
    height:5%;
    margin: 5px;
    //margin-top:80px;
    //margin-left:200px;
}
input[type=submit]:hover{
   transform: scale(0.99); 
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
.col-25{
    width:25%;
    margin-top:8px;
    font-size:15px;
    color:black;
    text-transform:uppercase;
}
.col-75{
    float:left;
    width:74%;
   // height:80px;
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
    font-size: 25px;
   }
   .col-25, .col-75{
    font-size: 13px;
   }
}
@media screen and (max-width: 750px)
{
    .container{
    width:95%;
   }
   h2{
    font-size: 22px;
   }
   .col-25, .col-75{
    font-size: 10px;
   }
   input[type=submit]{
    width: 20%;
    font-size: 16px;
   }

}
</style>
<body>
    <div class="navigation-bar">
        <div id="navigation-container">
            <img class="logo" src="logo.jpg">
            <h2 id="bus">Bus tracking</h2>
</div>
</div>
<div class="container">
 <form action="" method="GET">
  <div class="">
        <h2 class="text-center">&nbsp&nbsp&nbspSTUDENT REGISTRATION</h2>
    </div>
<div class="row">
<div class="col-25 text-right">
 <label for="Roll_No">Roll No :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$Roll_No" ?>" name="Roll_No" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="Student_Name">Name :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$Student_Name" ?>"  name="Student_Name" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="Class">Class :</label>
 </div>
 <div class="col-75">
<td><input type="text" value="<?php echo "$Class" ?>"  name="Class" required ></td>
</div>
</div>
<div class="row">
<div class="col-25 text-right">

 <label for="Father_Name">Father Name :</label>
 </div>
 <div class="col-75">
<td><input type="text" value="<?php echo "$Father_Name" ?>"  name="Father_Name" required ></td>
</div>
</div>

<div class="row">
<div class="col-25 text-right">
 <label for="Mother_Name">Mother Name :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$Mother_Name" ?>"  name="Mother_Name" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="Email">Email :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$Email" ?>"  name="Email" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="Contact_Num">Contact :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$Contact_Num" ?>"  name="Contact_Num" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="Home_Add">Address :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$Home_Add" ?>"  name="Home_Add" required >
</div>
</div>
<div class="row">
<div class="col-25 text-right">
 <label for="Bus_stop">Bus stop :</label>
 </div>
 <div class="col-75">
<input type="text" value="<?php echo "$Bus_stop" ?>"  name="Bus_stop" required >
</div>
</div>
<div class="text-center">
<input type="submit" id="button" name="submit" value="submit"></a>
</div>
</form>
</div>
</body>
</html>
<?php
if($_GET['submit'])
{
    $Roll_No=$_GET['Roll_No'];
    $Student_Name=$_GET['Student_Name'];
    $Class=$_GET['Class'];
    $Father_Name=$_GET['Father_Name'];
    $Mother_Name=$_GET['Mother_Name'];
    $Email=$_GET['Email'];
    $Contact_Num=$_GET['Contact_Num'];
    $Home_Add=$_GET['Home_Add'];
    $Bus_stop=$_GET['Bus_stop'];
$query="UPDATE ADD_PARENT SET Roll_No='$Roll_No',Student_Name='$Student_Name',Class='$Class',Father_Name='$Father_Name',Mother_Name='$Mother_Name',Email='$Email',Contact_Num='$Contact_Num',Home_Add='$Home_Add',Bus_stop='$Bus_stop'  WHERE Roll_No='$Roll_No' ";
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

