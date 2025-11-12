<?php 
include("connect.php");
error_reporting(0);
session_start();
$error = "";
$qry = "select * from add_parent";
$data = mysqli_query($conn,$qry);
$rult = mysqli_fetch_assoc($data);

if(isset($_POST['submit']))
{
$user = $_POST['stname'];
$pass = $_POST['pswd'];

 $query="select * from add_parent where Student_Name='$user' and Password='$pass' and status='active' ";
 $result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);
 $reult = mysqli_fetch_assoc($result);

 $lang = $reult[Language];

   if($count>0)
   {
      echo "Login Successful";
      switch ($lang) {
        case 'Hindi':
          header("location:P2LogHindi.html");
          exit();
          break;
        case 'English':
          header("location:P2Login.html");
          exit();
          break;
        case 'Marathi':
          header("location:P2LogMart.html");
          exit();
          break;
        
        default:
          header("location:P2Login.html");
          exit();
          break;
      }  
   }
   else
   {
     $error =  "** Incorrect Username or password **";
   }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Parent login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="newlog.css">
   <style type="text/css">
    .login{ background: royalblue; font-weight: bold;}
.login nav{border: 1px solid black; background-color: blue; margin-top: -10px;}
.login div ul li{font-size: 18px; list-style-type:none; margin-right: 50px; padding-right: 10px; padding-left: 10px;}
.login div ul li:hover{background-color: black;border-radius: 5px;}
#log{margin-top: 50px;}
.error{color: red; text-align: center; font-size: 15px; margin-top: -10px; margin-bottom: 0px;}
label{margin-top: 10px;}
</style>
 </head>
<body>
  <div class="login">
 <div class="logo" style="background: royalblue; font-weight: bold;border: 2px solid mediumblue;">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="text-align: center; margin-top: -90px;padding: 5px; font-size: 50px;font-family:'Righteous', cursive;">School Bus Tracking System</p></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto-light">
      <li class="nav-item"><a class="nav-link" href="home.html.html">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="about us.html">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="serc.html">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contant Us</a></li>
    </ul>
  </div>
</nav>
</div>
<div>
   <fieldset>
      <h2>PARENT LOGIN</h2>
      <p class="bg-success text-white px-4 text-center"><?php echo $_SESSION['msg']; ?></p>
   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit="return valide()" method="POST">
    <div class="error"><?php echo $error ?></div>
      <label>Student Name :</label>
      <input type="text" id="nam" name="stname" placeholder="Enter Student name">
      <span id="username"></span><br>
      <label>Password</label>
      <input type="password" name="pswd" id="pass" placeholder="Enter Password"> 
      <span id="password">&nbsp&nbsp</span><br>
      <a href="forgetpwd.php" id="fpass">Forget Password</a>
      <br> <br>
      <input type="submit" name="submit" value="LOGIN">
  </form>
 </fieldset>
 </div>
 <script type="text/javascript">
  function valide(){
      var user = document.getElementById('nam').value;
      var password = document.getElementById('pass').value;

      if(user == ""){
          document.getElementById('username').innerHTML = "**Please enter your Id";
          return false;
        }
        else{
          document.getElementById('username').innerHTML = "";
        }
        if(password == ""){
          document.getElementById('password').innerHTML = "**Please enter your password";
          return false;
        }
        else{
          document.getElementById('password').innerHTML = "";
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
