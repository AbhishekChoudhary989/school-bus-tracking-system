<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Two Pages One Script</title>
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
        padding: 0.5%;
        color: darkblue;
    }
    table{
        align: center;
        width: 98vw;
        margin: 1%;
        padding: 1%;
        border-radius: 0.5%;
        justify-content: space-around;
    }
    table th,td{
        padding: 2%;
        text-align: center;
    }
    table a{
        text-decoration: none;
        padding: 10%;
        margin: -18%;
        text-align: center;
        background-color: green;
        color: white;
        border: 2px solid black;
        font-size: 15px;
    }
    #add{
        background-color: slateblue; 
        padding:10px 20px 10px 20px; 
        font-size: 20px;
    }

@media screen and (max-width: 850px)
{
    table th,td{
        padding: 2%;
        font-size: 15px;
    }
    a{
        padding: 5%;
        margin: -40%;
        border: 1px solid black;
        font-size: 10px;
    }
   #add{
        padding:2.5px 5px 2.5px 5px; 
        font-size: 15px;
            }
}
@media screen and (max-width: 700px)
{
    table th,td{
        padding: 1%;
        font-size: 10px;
    }
    a{
        padding: 4%;
        border: 1px solid black;
        font-size: 8.5px;
    }
   #add{
        padding:2.5px 5px 2.5px 5px; 
        font-size: 10px;
    }
}
</style>

</head>
<body id="posta">
    <header>
    	<h1>School Bus Tracking</h1>
    </header>
    <nav>
    	<a href="page-one.php" class="posts">Admin</a>
    	<a href="page-two.php" class="users">Parent</a>
        <a href="page-three.php" class="users">Driver</a>
    </nav>
    <main>
    	<ul id="post-list" class="list">
    		<!-- the live data will be loaded here -->
            <h1>ADMIN DETAILS</h1>
<table border="2">
    <tr>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Password</th>
        <th colspan="2" align="center"><a href = 'Add_admin.php' onclick='return checkadd()' id="add" >+ ADD</th>
        </tr>
    <?php
include("connect.php");
error_reporting(0);
$query = "select * from add_admin";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result = mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['First_Name']."</td>
        <td>".$result['Last_Name']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Phone_Number']."</td>
        <td>".$result['Password']."</td>
        <td ><a href='Admin_update.php? First_Name=$result[First_Name] & Last_Name=$result[Last_Name] & Email=$result[Email] & Phone_Number=$result[Phone_Number]'>UPDATE</a></td>
        <td><a href = '' onclick='return checkupdate()'>DELETE</td>
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

    	</ul>
    </main>
    <script src="./common.js"></script>
</body>
</html>