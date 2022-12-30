<?php

    if(isset($_POST['work_term']) && isset($_POST['work_name']) && isset($_POST['work_location']) && isset($_POST['lec_fullname']) && isset($_POST['work_hour']) && isset($_POST['work_detail']))
    {

    require_once 'connect.php';
   
    $work_term = $_POST['work_term'];
    $work_name = $_POST['work_name'];
    $work_location = $_POST['work_location'];
    $lec_fullname = $_POST['lec_fullname'];
    $work_hour = $_POST['work_hour'];
    $work_detail = $_POST['work_detail'];
    $work_date = date("Y-m-d");

    $stmt = $conn->prepare("INSERT INTO work_tb(work_name,lec_fullname,work_term,work_location,work_date,work_hour,work_detail)
    VALUES (:work_name,:lec_fullname,:work_term ,:work_location ,:work_date,:work_hour,:work_detail)");
    $stmt->bindParam(':work_term', $work_term , PDO::PARAM_STR);
    $stmt->bindParam(':work_name', $work_name, PDO::PARAM_STR);
    $stmt->bindParam(':work_location', $work_location, PDO::PARAM_STR);
    $stmt->bindParam(':lec_fullname', $lec_fullname, PDO::PARAM_STR);
    $stmt->bindParam(':work_date', $work_date , PDO::PARAM_STR);
    $stmt->bindParam(':work_hour', $work_hour, PDO::PARAM_STR);
    $stmt->bindParam(':work_detail', $work_detail, PDO::PARAM_STR);
    $result = $stmt->execute();

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if($result){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "view_work.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "view_work.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
    $conn = null;
    }
?>