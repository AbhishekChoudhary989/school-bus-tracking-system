<?php
include("connect.php");
error_reporting(0);
$stdname=$_GET['stname'];
$lang=$_GET['language'] ;
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Update Student Language</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="">
      .login{
    background-color: royalblue; font-weight: bold;border: 3px solid black;
    }
  </style>
<body>
    <div class="login">
     <img id="" src="logoimg1.png" alt="school-bus-tracker" style="width:180px; height:100px"></img>
  <p id="heads" style="text-align: center; margin-top: -100px;padding: 5px; font-size: 50px; font-family: 'Chakra Petch', sans-serif;">School Bus Tracking System</p>
  <button class="back" style="color:white;width: 4%;float:right;border: 2px solid black;font-size:20px;border-radius: 15%;background-color: royalblue;margin-top:-50px;"><a style="color:white;" href="Parent_login.php">Back</a></button></h1></div>
  
 </div>
<fieldset>
  <div class="card" id="cont" style="background-color:#f4f4f6; padding:10px; margin: 5% 25% 0% 25%; border: 1px solid black; width:50%">
    <article class="card-body mx-auto" style="max-width: 1000px;">
       <h2 class="card-title mt-3 text-center">CHOOSE LANGUAGE</h2>
       <div class="container">
       <form action="" method="GET">
            <label>Student Name :</label>
            <div class="form-group input-group" id="input">
              <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
              <input type="text" name="stname" value="<?php echo "$stdname" ?>" class="form-control" placeholder="Enter your student name" autocomplete="off" required>
            </div>

            <label>Choose Language </label>
            <div class="form-group input-group" id="input">
              <div class="input-group-prepend">
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="English" checked>English&nbsp&nbsp&nbsp
                <label class="form-check-label" for="radio1"></label>
               </div>
               <div class="form-check">
                 <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Hindi">Hindi&nbsp&nbsp&nbsp
                 <label class="form-check-label" for="radio2"></label>
               </div>
               <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio3" name="optradio" value="Marathi">Marathi
                  <label class="form-check-label" for="radio2"></label>
               </div>
            </div>
           </div>
            </div>
             <br>
            <div class="form-group">
              <button type="submit" name="submit" value="SELECT LANGUAGE" class="btn btn-primary btn-block">SUBMIT</button>
            </div>
        </form>
        </div>
    </article>
   </div>
</fieldset>
</body>
</html>
<?php
if($_GET['submit'])
{
    $stdname=$_GET['stname'];
    $lang=$_GET['optradio'];
$query="UPDATE ADD_PARENT SET Language='$lang' WHERE Student_Name='$stdname' ";
$datas=mysqli_query($conn,$query);
if($datas){
    //echo "Language changed";
    ?><script> alert("Language changed") </script><?php
}
else{
   // echo "Failed to record";
    ?><script> alert("Failed to record") </script><?php
}
}
?>
</table>
</body>
</html>

