<?php
session_start();

include("connect.php");
error_reporting(0);
$error = "";

if(isset($_POST['submit']))
{
$usernam=$_POST['name'];
$userpwd=$_POST['password'];
$query="select * from add_admin where First_Name='$usernam' and Password='$userpwd'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
   if($count>0)
   {
      echo "Login Successful";
      header("location:A2Login.php");
      exit();
   }
   else
   {
       $error =  "** Incorrect Username or password **";
  //echo "Login Failed".mysqli_connect_error();
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Righteous&display=swap" rel="stylesheet">
<style type="text/css">
*{margin: 0;padding: 0;}
.login{ background: royalblue; font-weight: bold;}
.login nav{border: 1px solid black; background-color: blue; margin-top: -10px;}
.login div ul li{font-size: 18px; list-style-type:none; margin-right: 50px; padding-right: 10px; padding-left: 10px;}
.login div ul li:hover{background-color: black;border-radius: 5px;}
    a{
     text-decoration: none;
   }
    label{
      font-size: 20px;
      color: blue;
    }

    #heading{
      text-align: center;
      color: darkblue;
       background-color: #F0F8FF;
    }
    h2{
      padding-bottom: 20px;
      color: darkblue;
      font-size: 200%;
    }
    .error{
      color: red;
      text-align: center;
      font-size: 15px;
      margin-top: -15px;
      margin-bottom: 10px;
    }
    #cont{
      width: 40%;
      margin-top: 1.5%;
      margin-left: 30%;
      border: 1px solid black;
      border-radius: 20px;
      background-color: #F0F8FF;
    }
    #input{
      border: 1px solid black;
    }
    @media(max-width: 600px){
      #heading{
        font-size: 200%;

      }
      #cont{
        width: 80%;
        margin-left: 10%;
  }
}
   
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
    <h2 class="text-center"></h2>
  <div class="card" id="cont">
    <article class="card-body mx-auto" style="max-width: 1000px;">
      <h2 class="card-title mt-3 text-center">ADMIN LOGIN</h2>
      <form action="#" method="POST" onsubmit="return valide()">
        <div class="error"> <?php echo $error ?></div>
            <label>Admin Name :</label>
            <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
  
              </div>
              <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <span id="username"></span><br>
  
             <label>Password : </label>
             <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Enter Password" autocomplete="off" required>
            </div>
             <span id="password">&nbsp&nbsp</span><br>
             <a href="forgetpwd.php" class="text-center" id="fpass">Forget Password</a>
            <br> <br>
      
            <div class="form-group">
              <button type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-block">LOGIN</button>
            </div>
            </form>
    </article> 
    </div>
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
