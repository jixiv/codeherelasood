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
        <h5 class="card-header">ข้อมูลการเก็บชั่วโมง </h5>
        <div class="card-body">
          <div class="col-auto">
            <div>
              <div class="form-group text-right">
                <a href="create_work.php" class="btn btn-success" ><i class="fa fa-plus"></i> เพิ่มข้อมูลการเก็บชั่วโมง</a>
              </div>
            </div>
          </div> 
           
        <div class="table-responsive">
          <table class="table table-borderless table-condensed" >
            
          <thead class="bg-secondary">
            <tr class="text-center"  width="100%" >
              <th width="5%" style="vertical-align:middle;">ลำดับ</th>
              <th width="10%" style="vertical-align:middle;">ภาคเรียน</th>
              <th width="15%" style="vertical-align:middle;">หัวข้อ</th>
              <th width="10%" style="vertical-align:middle;">สถานที่</th>
              <th width="15%" style="vertical-align:middle;">อาจารย์</th>
              <th width="10%" style="vertical-align:middle;">จำนวนชั่วโมง</th>
              <th width="15%" style="vertical-align:middle;">หมายเหตุ</th>
              <th width="5%" style="vertical-align:middle;">แก้ไข</th>
              <th width="5%" style="vertical-align:middle;">ลบ</th>
              <th width="5%" style="vertical-align:middle;">Select</th>

             
            </tr>
          </thead>

          <?php
            $i = 1;
            require_once 'connect.php';
            $stmt = $conn->prepare("SELECT * FROM work_tb");
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $k) {
          ?>
          
          <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;"><?= $i;?></td> 
              <td class="text-center" style="vertical-align:middle;"><?= $k['work_term'];?></td>      
              <td class="text-center" style="vertical-align:middle;"><?= $k['work_name'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $k['work_location'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $k['lec_fullname'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $k['work_hour'];?></td>
              <td class="text-center" style="vertical-align:middle;"><?= $k['work_detail'];?></td>
              <td class="text-center" style="vertical-align:middle;"><a href="edit_work.php?work_id=<?= $k['work_id'];?>" class="btn btn-warning" >แก้ไข</a></td>
              <td class="text-center" style="vertical-align:middle;"><a href="del_work.php?work_id=<?= $k['work_id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?work_id=<?= $k['work_id'];?>"><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
            </tr>
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
