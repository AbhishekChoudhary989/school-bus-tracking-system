<!html lang="en">
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="newlog.css">
	<title></title>
</head>
<style type="text/css">
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
/*body{
overflow:hidden;
display:flex;
background-color:#ffffff;
}*/
.border {
  border-radius:10%;
  background-color:#AEC6CF;
  width: 300px;
  height:55%;
  border: 2px solid black;
  padding: 50px;
  margin-top: 100px;
  display: block;
  margin-left:500px;
  padding: 10px 25px; /* Some padding */
  cursor: pointer;
}
a{
  text-decoration: none;
}
.login{ 
        background:white;
    
      }
.login nav{
  border: 2px solid black;
  background-color: blue;
      }
      ul{
          margin-right:900px;
          display:block;
      }
.login div ul li{
  font-size: 20px;
  list-style-type:none;
  padding-right: 50px;
  color: white;
  #float: left;
  display:inline;
}
button{
        width:150px;
        height:50px;
        cursor:pointer;
        border:none;
        border-radius:25px;
        background-color:white;
        color:black;
        font-size:16px;
        cursor: pointer;
}
.b1{
user-select:none;
margin-top:50px;
margin-left:45px;
border:2px solid #AEC6CF;
}
.b2{
user-select:none;
margin-left:50px;
border:2px solid #AEC6CF;
}
.b3{
user-select:none;
margin-left:50px;
border:2px solid #AEC6CF;
}
.b4,.b5{
user-select:none;
margin-left:50px;
border:2px solid #AEC6CF;
}
</style>
<body>
<div class="login">
  <h1 style="text-align: center; background-color:#AEC6CF ; color:black;">Driver</h1> 
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto-light">
      <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="border">
<a href="driver_present.php"><button class="b1">Mark Attendance</button></a>
<button class="b2">Attendance Report</button>
<button class="b3">Emergency</button>
<a href="driver_absent.php"><button class="b4">Center Close </button></a>
<button class="b5">Exit</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

