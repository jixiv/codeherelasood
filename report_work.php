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

</head>
<body class="style fade-in" style="background-color:gray;">

    <nav class="navbar navbar-flex navbar-expand-lg navbar-dark top-bar font_1">

    <a class="navbar-brand" href="lecturer_form.php">CED</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
 
<div class="container-fluid">
  <div class="row font_1" >
    <div class="col py-3 table-responsive">

        <div class="card text-center">
        <h5 class="card-header">ข้อมูลการช่วยงานนักศึกษา</h5>
        <div class="card-body">
             
          <div class="table-responsive">
          <table class="table table-borderless table-condensed" >
    
          <thead class="bg-success">
            <tr class="text-center" width="100%">
              <th width="5%" style="vertical-align:middle;">ลำดับ</th>
              <th width="15%" style="vertical-align:middle;">รหัสประจำตัวนักศึกษา</th>
              <th width="20%" style="vertical-align:middle;">ชื่อ-นามสกุล</th>
              <th width="20%" style="vertical-align:middle;">คณะ</th>
              <th width="30%" style="vertical-align:middle;">สาขาวิชา</th>
              <th width="5%" style="vertical-align:middle;">View</th>
            </tr>
          </thead>

          <?php
            $i = 1;
            require_once 'connect.php';
            $stmt = $conn->prepare("SELECT * FROM student_tb");
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $k) {
          ?>

        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;"><?= $i;?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $k['std_number'];?></td>   
              <td class="text-center" style="vertical-align:middle;"><?= $k['std_fullname'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $k['std_faculty'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $k['std_department'];?></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?std_number=<?= $k['std_number'];?>"><i class='fas fa-search' style='font-size:24px;color:black'></i></a> </td>
        </tbody>

        <?php 
          $i++;
          } 
        ?>
    
          </table>
            
            <div class="col-md-12">
              <div class="form-group text-center">
                <a href="lecturer_form.php" class="btn btn-danger" >Back</a>
              </div>
            </div>

          </div>
          
        </div>
        </div>

    </div>
  </div>
</div>

</body>
</html>
