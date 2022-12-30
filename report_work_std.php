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
<body>
    <?php
    if(isset($_GET['std_number'])){
      require_once 'connect.php';
      $stmt = $conn->prepare("SELECT * FROM student_tb WHERE std_number=?");
      $stmt->execute([$_GET['std_number']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($stmt->rowCount() < 1){
          header('Location: report_work.php');
          exit();
      }
    }
    ?>
    <center>
      <nav class="navbar navbar-flex navbar-expand-lg navbar-dark top-bar font_1">

    <a class="navbar-brand" href="lecturer_form.php">CED</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                <a class="nav-link disabled text-light"><?php echo $fullname; ?></a>
                </li>

          </ul>
        </div>

</nav>

      <center>
   

<div class="col py-3"> 
  <div class="card font_1">
  <h5 class="card-header">ข้อมูลการช่วยงาน :  <?= $row['std_fullname'];?></h5>
  <div class="card-body">
      
      <div class="form-group">
        <div class="container">
           <div class="col-auto">
             <div class="font_1">
                <div class="row">
                <div class="table-responsive">
                 
   
        <table class="table table-borderless table-condensed" >
        
        <thead class="bg-success" width="100%" >
      <tr class="text-center"><h6>
          <th width="2%" style="vertical-align:middle;" class="text-dark">ลำดับ</th>
          <th width="10%" style="vertical-align:middle;" class="text-dark">Date</th>
          <th width="5%" style="vertical-align:middle;" class="text-dark">ภาคเรียน</th>
          <th width="20%" style="vertical-align:middle;" class="text-dark">หัวข้อ</th> 
          <th width="20%" style="vertical-align:middle;" class="text-dark">อาจารย์</th>
          <th width="15%" style="vertical-align:middle;" class="text-dark">หมายเหตุ</th>
          <th width="5%" style="vertical-align:middle;" class="text-dark">ชั่วโมง</th>

      </tr></h6>
    </thead>

    <?php
      $i = 1;
      require_once 'connect.php';
      $stmt = $conn->prepare("SELECT * FROM report_work_tb 
      INNER JOIN work_tb ON report_work_tb.work_id = work_tb.work_id
      INNER JOIN lecturer_tb ON report_work_tb.lec_number = lecturer_tb.lec_number
      WHERE std_number=?");
      $stmt->execute([$_GET['std_number']]);
      $result = $stmt->fetchAll();
      foreach($result as $row) { 
    ?>
     
        <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;"><?= $i;?></td>
              <td class="text-center" style="vertical-align:middle;"><?= date('d-m-Y',strtotime($row['work_date']));?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $row['work_term'];?></td>     
              <td class="text-center" style="vertical-align:middle;"><?= $row['work_name'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $row['lec_fullname'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $row['work_detail'];?></td> 
              <td class="text-center" style="vertical-align:middle;"><?= $row['work_hour'];?></td>     

            </tr>
        </tbody>
        
    <?php 
      $i++;  
      }
    ?>

        </table>
    
                            </div>
                    </div>
                </div>
                </div> 
            </div>
        </div>  

    <div class="container">
      <div class="p-3 bg-dark text-white font_1">
        <h5 class="text-right" >จำนวนชั่วโมง : x ชั่วโมง</h5>   
      </div>    
    </div>      
        
    <div class="col-lg-12 col-md-12 ">
        <div class="form-group text-center font_1"><br>
          <a href="report_work.php" class="btn btn-danger" >Close</a>   
        </div>
    </div>
                    
    </center>

</div>
</div>
</div>    
    
    
</body>
</html>

