<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mail</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left"><a href="#" class="logo"><img src="logoimg1.png" width="50" height="50" alt=""></a></div>
            <span class="logo" style="font-size: 25px; color: white;">School Bus tracking System</span>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div class="sidebar-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-home back-icon"></i> <span>Back to Inbox</span></a></li>
                        <li><a href="#">Inbox <span class="mail-count">(21)</span></a></li>
                        <li><a href="#">Starred</a></li>
                        <li><a href="#">Sent Mail</a></li>
                        <li><a href="#">Draft <span class="mail-count">(8)</span></a></li>
                        <li><a href="#">Trash</a></li>
                        <li class="menu-title">Label <a href="#" class="add-user-icon"><i class="fa fa-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a></li>
                        <li><a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a></li>
                        <li><a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Compose</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="form-group">
                                    <input type="email" name="to" placeholder="To" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sub" placeholder="Subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" cols="5" class="form-control summernote" name="mess" placeholder="Enter your message here"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="text-center compose-btn">
                                        <input type="submit" class="btn btn-primary" name="send" value="Send" >
                                        <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="fa fa-floppy-o m-l-5"></i></button>
                                        <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i class="fa fa-trash-o m-l-5"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>

<?php

if(isset($_POST['send']))
{
  $toeml=$_POST['to'];
  $Subj=$_POST['sub'];
  $message=$_POST['mess'];

     $to_email ="$toeml";
     $subject="$Subj";
     $body="$message ";
     $sender_email="From: sbtracking22@gmail.com";

     if(mail($to_email,$subject,$body,$sender_email)){
       echo "Email
        send to $to_email";
      }
      else{
       echo "failed..";
     }
}    
?>