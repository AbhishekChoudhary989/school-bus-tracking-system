<?php
include("connect.php");
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Responsive Registration Form</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
     *{
  margin: 0%;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}

.container{

  max-width: 100%;
  width: 100%;
  background-color: #AEC6CF;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  position:relative;
//  margin-bottom: -20px;
  height: 100%;
  height:100%;
}
.input-box1{
  margin-left:470px;
  margin-top:40px;
  width:20%;
  height:50%;
  font-size:15px;
}
.input-box2{
  margin-left:470px;
  margin-top:10px;
  width:20%;
  height:50%;
  font-size:15px;
}
.input-box3{
  margin-left:470px;
  margin-top:15px;
  width:50%;
  height:50%;
  font-size:15px;
}
.input-box4{
  margin-left:470px;
  margin-top:20px;
  width:20%;
  height:50%;
  font-size:15px;
}
.month{
  margin-left:470px;
  margin-top:27px;
  width:20%;
  height:50%;
  font-size:15px;
}
#payment{
  margin-left:470px;
  margin-top:40px;
  width:20%;
  border-radius:50px;
  height:80%;
  font-size:25px;
}
#month{
  margin-left:470px;
  margin-top:10px;
  width:20%;
  height:50%;
  font-size:15px;
}
#payment{
  align:center;
}
#roll_no{
  font-size:15px;
}
#name{
  font-size:15px;
}
#email{
  font-size:15px;
}
#number{
  font-size:15px;
}
#month{
  font-size:15px;
}
.title{
  font-size:25px;
  color:red;
  text-align: center;
}
</style>
<body>
  <div class="container">
    <div class="title">Fees Payment</div>
    <div class="content">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return valide()">
        <div class="user-details">
          <div class="input-box1">
            <span  class="details">Roll No.</span>
            <input type="text" id="roll_no" name="rollno" placeholder="Roll No." required>
          </div>
          <div class="input-box2">
            <span  class="details">Student Name</span>
            <input type="text" id="name" name="stname" placeholder="Student Name" required>
          </div>
          <div class="input-box3">
            <span class="details">Email Id</span>
            <input type="email"id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box4">
            <span class="details">Contact Number</span>
            <input type="text" id="number" name="cno" placeholder="Contact Number" required>
          </div>
          <div class="month">
          <label for="Installement">Installement</label>
</div>
<select name="Installement" id="month">
  <option value="first">First Installement</option>
  <option value="second">Second Installement</option>
  <option value="third">Third Installement</option>
  <option value="fourth">Fourth Installement</option>
</select>
<div id="money">
  <button type="button" id="money" value="Pay" onclick="money()">Pay</button>
<p id="amount"></p></div>
        </div>
        <div  class="button">
          <button type="submit"  id="payment" name="payment" value="Payment">Payment</button>
        </div>
      </form>
    </div>
  </div>
   <script type="text/javascript">
function money(){
  var a=document.getElementById("month").value;
  if(a=="first" or b=="second" or c="third" d="fourth"){
    var x=600;
    document.getElementbyId("amount").innerHTML=x;
  }
  else{
    alert("select a Installement");
  }
}
  function valide(){

      var phonenum = document.getElementById('number').value;

      if(phonenum==""){
        document.getElementById("message").innerHTML="**Mobile  number is required";
        return false;
      }
      if(isNaN(phonenum)){
        document.getElementById("message").innerHTML="**Enter only Numberic Value";
        return false;
      }
      if(phonenum.length<10){
        document.getElementById("message").innerHTML="**Mobile Number must be 10 digit";
        return false;
      }
      if(phonenum.length>10){
        document.getElementById("message").innerHTML="**Mobile Number must be 10 digit";
        return false;
      }
      if((phonenum.charAt(0)!=9)&&(phonenum.charAt(0)!=8)&&(phonenum.charAt(0)!=7)){
        document.getElementById("message").innerHTML="**Mobile Number  is Invalid";
        return false;
     }  
}
</script>
</body>
</html>
<?php
$db = mysqli_select_db( $conn,"add_parent");
if(isset($_POST['save']))
{
  $rollno=$_POST['rollno'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $installement=$_POST['installement'];
  
  $dataquery = "select * from add_parent where email='$email' and Roll_no='$rollno' and Student_Name='$name' and Contact_Num=' $number' ";
  $query_run= mysqli_query($conn,$dataquery);
  $count=mysqli_num_rows($result);

}
?>