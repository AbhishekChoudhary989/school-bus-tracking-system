<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Two Pages One Script</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="newlog.css">
   <link rel="stylesheet" type="text/css" href="A2Login.css">
	<link rel="stylesheet" href="./common.css" />
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    h1{
        align: center;
        background-color: skyblue;
        text-align: center;
        padding: 5px;
        color: darkblue;
    }
    table{
        text-align: right;
        align-content: left;
        margin: 10px;
        padding: 10px;
        //color: white;
        border-radius: 5px;
    }
    table th,td{
        padding: 10px;
        text-align: center;
    }
    
#add{
        background-color: slateblue; 
        padding:10px 20px 10px 20px; 
        font-size: 20px;
    }
</style>

</head>
<body id="posta">
    <header>
    	<h1>Users</h1>
    </header>
    <nav></nav>
        <div class="middle">
  <div class="menu">
    <li class="item" id="bus">
      <a href="#bus" class="btn"><i class="fa fa-user">Bus</i></a>
       <div class="s1menu">
         <a href="#">Bus Location</a>
         <a href="#">Bus histroy</a>
      </div></li>
      <li class="item" id="admin">
      <a href="#admin" class="btn"><i class="fa fa-user">Admin</i></a>
       <div class="smenu">
         <a href="#">View Details</a>
         <a href="Add_admin.html">Add Admin</a>
      </div></li>
    <li class="item" id="profile">
      <a href="#profile" class="btn"><i class="fa fa-user">Driver</i></a>
       <div class="smenu">
         <a href="#">View Details</a>
         <a href="#">Add Driver</a>
      </div></li>
    <li class="item" id="message">
      <a href="#message" class="btn"><i class="fa fa-envelope">Parent</i></a>
       <div class="smenu">
         <a href="#">View Details</a>
         <a href="#">Student Registration</a>
    </div></li>
<li class="item" id="settings">
      <a href="#settings" class="btn"><i class="fa fa-cog">Feedback</i></a>
       <div class="smenu">
         <a href="#">View Feedback</a>
    </div></li>
<li class="item">
      <a href="#" class="btn"><i class="fa fa-sign-out">Logout</i></a>
       <div class="smenu">
    </div></li>
 </div>
</div>

<!--     	<a href="page-one.php" class="posts">Admin</a>
        <a href="page-two.php" class="users">Parent</a>
        <a href="page-three.php" class="users">Driver</a>
 -->    
    <main>
    	<ul id="user-list" class="list">
    		<!-- the live data will be loaded here -->
           <h1>DRIVER DETAILS</h1>
<table border="1">
    <tr>
        <th>Bus_No.</th>
        <th>Driver_Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Address</th>
        <th>Photo</th>
        <th colspan="2" align="center"><a href = 'Add_driver.php' onclick='return checkadd()' style="background-color: grey; font-size: 15px;">+ ADD</th>
        </tr>
    <?php
include("connect.php");
error_reporting(0);
$query = "select * from add_driver";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result = mysqli_fetch_assoc($data))
    {
    echo "
    <tr>
        <td>".$result['Bus_No']."</td>
        <td> ".$result['Driver_Name']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Cont_Num']."</td>
        <td>".$result['Address']."</td>
        <td><img src=".$result['Photo']."></td>
        <td ><a href='Driver_update.php? busno=$result[Bus_No] & drivername=$result[Driver_Name] & email=$result[Email] & Cont_Num=$result[Cont_Num] & add=$result[Address]'>UPDATE</a></td>
        <td ><a href='Delete_driver.php? email=$result[Email]' onclick='return checkdelete()'>DELETE</a></td>
    </tr>
    ";
    }
}
else
{
    echo "no record";
}
?>
</table>

<script>
function checkdelete(){

return confirm('Are you sure you want to delete' );

}
</script> 
    	</ul>
    </main>
    <script src="./comon.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>