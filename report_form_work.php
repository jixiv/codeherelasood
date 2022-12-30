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
    if(isset($_GET['work_id'])){
      require_once 'connect.php';
      $stmt = $conn->prepare("SELECT * FROM work_tb WHERE work_id=?");
      $stmt->execute([$_GET['work_id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      //ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
      if($stmt->rowCount() < 1){
          header('Location: view_work.php');
          exit();
      }
    }
    ?>

      <nav class="navbar navbar-flex navbar-expand-lg navbar-dark top-bar font_1">

    <a class="navbar-brand" href="lecturer_form.php">CNIC-UBRU</a>
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
      <p>
      <div class="container">
        <div class="font_1">
          <div class="col-lg-12 col-md-12 col-mx-12">
            <div class="text-center">

              <h6> 
               <table class="table table-bordered ">
              <tbody>
                <tr>          
                    <td>ภาคเรียน: <?= $row['work_term'];?></td>
                    <td colspan="2">หัวข้อ : <?= $row['work_name'];?></td>

                </tr>
                <tr>
                    <td>สถานที่ : <?= $row['work_location'];?></td>
                    <td>วันที่ : <?= date('d-m-Y',strtotime($row['work_date']));?></td>            
                    <td>จำนวนชั่วโมง : <?= $row['work_hour'];?></td>
                </tr>
                <tr>				      
                    <td colspan="3">หมายเหตุ : <?= $row['work_detail'];?></td>    
                </tr>

              </tbody>
              </table>  
              </h6>

            </div>
          </div>
        </div>
      </div>


  
    <div class="form-group">
      <div class="container">
         <div class="col-auto">
           <div class="font_1">
             <div class="row">
                <div class="table-responsive">
                 
   
    <table class="table table-borderless table-condensed" >
    
    <thead class="bg-success" width="100%" >
      <h6><tr class="text-center">
          <th width="5%" style="vertical-align:middle;" class="text-dark">ลำดับ</th>
          <th width="15%" style="vertical-align:middle;" class="text-dark">รหัสประจำตัว</th>
          <th width="15%" style="vertical-align:middle;" class="text-dark">ชื่อ-นามสกุล</th>
          <th width="20%" style="vertical-align:middle;" class="text-dark">คณะ</th>
          <th width="20%" style="vertical-align:middle;" class="text-dark">สาขาวิชา</th>
          <th width="20%" style="vertical-align:middle;" class="text-dark">Date</th>


     
      </tr></h6>
    </thead>

    <?php
      $i = 1;
      require_once 'connect.php';
      $stmt = $conn->prepare("SELECT * FROM student_tb 
      INNER JOIN report_work_tb ON student_tb.std_number = report_work_tb.std_number 
      WHERE work_id=?
      ORDER BY report_work_tb.std_number ASC");
      $stmt->execute([$_GET['work_id']]);
      $result = $stmt->fetchAll();
      foreach($result as $row) { 
    ?>
    
    <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;"><?= $i;?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $row['std_number'];?></td>     
              <td class="text-center" style="vertical-align:middle;"><?= $row['std_fullname'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $row['std_faculty'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $row['std_department'];?></td>
                              <td class="text-center" style="vertical-align:middle;"><?= $row['date_save'];?></td>
  
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
    
    

    <div class="col-lg-12 col-md-12 ">
        <div class="form-group text-center font_1"><br>
          <a href="view_report_work.php" class="btn btn-danger" >Close</a>   
        </div>
    </div>
          
  </center>



</body>
</html>

