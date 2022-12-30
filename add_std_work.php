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

<!DOCTYPE html>
<html lang-"en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Scaner</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style1.css">   
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> 

	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

 
</head>
<body>
    <?php
    if(isset($_GET['work_id'])){
      require_once 'connect.php';
      $stmt = $conn->prepare("SELECT * FROM work_tb WHERE work_id=?");
      $stmt->execute([$_GET['work_id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($stmt->rowCount() < 1){
          header('Location: view_work.php');
          exit();
      }
    }
    ?>
  <center>
    <nav class="navbar navbar-expand-1g navbar-dark top-bar font_1">
      <div class="container-fluid">
        <a class="navbar-brand" href="lecturer_form.php">CNIC-UBRU</a>

                <li class="nav-item">
                     <a href="JavaScript:if(confirm('Confirm ยืนยันการปิดระบบเช็คชื่อนักศึกษา..!!') == true){window.location='view_work.php';}" class="btn btn-danger">ปิดระบบช่วยงานนักศึกษา</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>
  <center>
    <br>
    <div class="container">
      <div class="font_1">
        <div class="row">
          <div class="col-1g-12 col-md-12 col-mx-12">
            <div class="text-center">
              <h6>
                <table class="table table-bordered ">
                  <tbody>
                    <tr>
                      <td style="vertical -align : middle , ">หัวข้อ : <?= $row['work_name'];?></td>
                      <td style="vertical-align :middle ,">จำนวนชั่วโมง : <?= $row['work_hour'];?> ชั่วโมง</td>
                    </tr>
                    <tr>
                      <td style="vertical-align :middle; ">สถานที่ : <?= $row['work_location'];?></td>
                      <td style="vertical-align :middle; ">ภาคเรียน: <?= $row['work_term'];?></td>
                    </tr>
                  </tbody>
                </table>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>

  <form name="Form1" id="add_name" action="insert_work.php"  method="POST">
    <div class="form-group">
      <div class="container">
        <div class="font 1">
          <div class="row">
          <div class="col-md-12 col-1g-12">
            <div class="table-responsive border border-dark border-1 bg-dark">
              <table class="table table-borderless table-condensed">
                <thead class="bg-success" width="100%">
                  <tr class="text-center">
                    <th width="50%" style="vertical-align:middle," class="text-light">
                      <h5>เพิ่มข้อมูลการช่วยงานนักศึกษา</h5>
                    </th>
                  </tr>
                </thead>
              
              <tbody class="bg-dark">
                  <tr>
                  <td style="vertical-align:middle;">
                  <br>
                    <input type="text" class="form-control text-center" id="txtStudentID" name="StudentID" placeholder="รหัสประจำตัว">
                    <br>

                    <input type="hidden" name="lec_ID" value="001">
                    <input type="hidden" name="work" value="<?= $row['work_id'];?>">
                </tr>

                  </tbody>
                </table>
              </div>
            </div>
          <div class="col-md-1 col-1g-1"> </div>
        </div>
      </div>
    </div>
  </div>
</form>

</center>
</center>
</body>
</html>