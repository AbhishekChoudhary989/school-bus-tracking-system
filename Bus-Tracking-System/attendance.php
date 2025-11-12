<?php 
include('connect.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Attendance of Driver</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="#" class="logo"><img src="logoimg1.png" style="border-radius: 50%;" width="55" height="54" alt=""> <span>Bus Tracking </span></a>
			</div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li><a href="home.html.html"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
						<li><a href="serc.html"><i class="fa fa-user-md"></i> <span>Service</span></a></li>
                        <li><a href="about us.html"><i class="fa fa-wheelchair"></i> <span>About us </span></a></li>
                        <li><a href="contact.php"><img src="assets/img/contact.png" style="width:30px; height:22px;"></img> <span>Contact Us</span></a></li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Admin</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="View_driver1.php">List of Driver</a></li>
								<li><a href="viewfeedback.php">View Feedback</a></li>
								<li><a href="admintrack.php">Location</a></li>
								<li><a class="active" href="attendance.html">Attendance</a></li>
							</ul>
						</li>
                        <li class="menu-title">Extras</li>
                    </ul>
                </div>
            </div>
        </div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Attendance Sheet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
				<div class="table-responsive">
                <table class="table table-striped custom-table mb-0">                             
                <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label for="input1" class="col-sm-3 control-label">Your Name</label>
                     <div class="col-sm-7">
                        <input type="text" name="sr_id"  class="form-control floating" id="input1" placeholder="Enter your name" autocomplete="of" />
                     </div>
                </div>
                <div class="form-group">
                   <label for="input1" class="col-sm-3 control-label">Enter Month</label>
                      <div class="col-sm-7">
                         <input type="text" name="mont"  class="form-control" id="input1" placeholder="Enter Month" autocomplete="off" />
                      </div>
                </div>
                <div class="form-group">
                   <label for="input1" class="col-sm-3 control-label">Enter Year</label>
                      <div class="col-sm-7">
                         <input type="text" name="year"  class="form-control" id="input1" placeholder="Enter Year" autocomplete="of" />
                      </div>
                </div>
                         <input type="submit" class="btn btn-danger col-md-3 col-md-offset-7" style="border-radius:0%" value="Find" name="sr_btn" />
              </form>

    <div class="content"><br></div>

    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">
                               
<?php
    //checking the form for ID
    if(isset($_POST['sr_btn'])){
    //initializing ID 
     $name = $_POST['sr_id'];
     $month = $_POST['mont'];
     $yr = $_POST['year'];
   
     $i=0;
     $count_pre = 0;
     //query for searching respective ID
    //  $all_query = mysql_query("select * from reports where reports.st_id='$sr_id' and reports.course = '$course'");
    //  $count_tot = mysql_num_rows($all_query);
     $qury="select Name,count(DISTINCT(Date)) as countP from driver_att where driver_att.Name='$name' and driver_att.Attendance='Present' and YEAR(Date) = '$yr' AND MONTH(Date) = '$month' ";
     $all_query = mysqli_query($conn,$qury);
     $count_tot;
    
     $count_tot=cal_days_in_month(CAL_GREGORIAN, $month, $yr);
     while ($data = mysqli_fetch_array($all_query)) {
       $i++;
       if($i <= 1){
     ?>
     <tbody>
      <tr><td>Name: </td><td><?php echo $data['Name']; ?></td></tr>
      <tr><td>Present (Days): </td><td><?php echo $data[1]; ?> </td></tr>
      <tr><td>Absent (Days): </td><td><?php echo $count_tot -  $data[1]; ?> </td></tr>
    </tbody>
   <?php
     }  
    }}
     ?>
    </table>
                </div>
        </div>
                </div>
            </div>
         
                           
                               
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>