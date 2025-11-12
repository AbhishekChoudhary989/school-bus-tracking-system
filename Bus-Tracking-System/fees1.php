
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
  height:400px;
  border: 2px solid white;
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
margin-top:30px;
margin-left:50px;
border:2px solid #AEC6CF;
}
.b3{
user-select:none;
margin-top:30px;
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
<div class="border">
<a href="fees2.php"><button class="b1">Payment</button></a>
<a href="payment_history"><button class="b2">Payment History</button></a>
<a href="driver_login.php"><button class="b3">Exit</button></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

