<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display driver record</title>
</head>
<style>
*{
  font-family:sans-serif;
}

:root{
  --colorHead:rgb(25, 27, 151);
  --filaPar:#e1e6f8;
  --filaImpar:#c3cdff;
  --colorBorde:#a8afcc;
  
}

table tr td,th:not(.th-head){
  border-right: 1px solid var(--colorBorde);
}
table,tfoot{
  border:1px solid var(--colorBorde);
  word-break: break-all;

}

table:nth-of-type(1) caption {
  font-weight: 800;
}


table {
  border-collapse: collapse;
  border-spacing:1rem 0.1rem;
  table-layout:fixed;/*auto viene por defecto*/
  width: 100%;
  empty-cells: hide;
  text-align: center;
}

thead{
  color:white;
  background:var(--colorHead) ;
   text-align: center;
}
thead th{
  /* border: none; */
}

table tbody tr:not(tfoot):nth-child(odd) {
	background: var(--filaPar);
}
table tbody tr:nth-child(even) {
	background: var(--filaImpar);
}

tr:not(.tr-head):hover{
  background:rgb(130, 130, 130);
}
td:hover{
  background:rgb(126, 126, 126);

}

td{
text-align: right;
}

th{
  text-align:left;
}
#caption{
width:100%;
height:45px;
background-color:grey;
color:white;
font-size:30px;
margin-top:-1.4%;
text-align:center;
}
img{
    height:50px;
     width:50px;
  }
</style>
<body>
<div class="logo" style="background: royalblue; font-weight: bold;border: 2px solid mediumblue;">
  <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="text-align: center; margin-top: -90px;padding: 0px; font-size: 50px;font-family: 'Righteous', cursive;">School Bus Tracking System</p>
   </div>
 <table >
      <p id="caption" style="border: 2px solid black; padding: 5px; background-color: darkmagenta; margin-top: 10px;">LIST OF DRIVER FEEDBACK</p>
       <thead>
           <tr class="tr-head">
               <th class="th-head">Bus_No.</th>
               <th class="th-head">Driver_Name</th>
               <th class="th-head">Email</th>
               <th class="th-head">Photo</th>
               <th class="th-head" colspan="2" align="center">Feedback</th>
           </tr>
       </thead>
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
    <td><img src=".$result['Photo']."></td>
		<td ><a href='barchard123.php? Bus_No=$result[Bus_No] & Driver_Name=$result[Driver_Name] & Photo=<img src=".$result['Photo']."> & Email=$result[Email]'>View</a></td>
	</tr>
	";
	}
}
else
{
	echo "no record";
}
?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
       </tfoot>
   </table>