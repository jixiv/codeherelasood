<?php
session_start();
include("h.php");
require_once("connect.php");
$fullname = $_SESSION['fullname'];
$member_id = $_SESSION['member_id'];
 if($member_id!= 1){
  Header("Location: index.php");  
}    
?>

<!doctype html>
<html lang="en">
<head>
<style>
  body {
     margin-top: 0px;
     background-color: #ff4b2b;
  }
</style>
</head>
<body>
	
<body class="style fade-in">
  <nav class="navbar navbar-flex navbar-expand-lg navbar-dark top-bar font_1">
    <a class="navbar-brand" href="lecturer_form.php">CED</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                <form action="index.php"> 
                    <a class="nav-link disabled text-light"><?php echo $fullname; ?></a>
                </li>

                <li class="nav-item">
                     <a href="JavaScript:if(confirm('Confirm Logout..!!') == true){window.location='logout.php ';}" class="btn btn-danger">ออกจากระบบ</a>
                </li>

          </ul>
        </div>

</nav>
<p>
    <div class="container-fluid font_1">

                <div class="box">
                    <a href="lec_profile_show.php"> 
                        <div class="content">
                            <img src="assets/icons/C1.png">
                            <p class="text-light">ข้อมูลส่วนตัว</p> 
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="view_report_work.php">
                        <div class="content">
                            <img src="assets/icons/C2.png">
                            <p class="text-light">ข้อมูลการช่วยงานนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="report_work.php">
                        <div class="content">
                            <img src="assets/icons/C3.png">
                            <p class="text-light">ข้อมูลเวลาการช่วยงานนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="view_work.php">
                        <div class="content">
                            <img src="assets/icons/C4.png">
                            <p class="text-light">ระบบเก็บชั่วโมงช่วยงานสาขาวิชา</p>
                        </div>
                    </a>
                </div>

    </div>
    <br>

  </body>
</html>
<?php include('script.php');?>

