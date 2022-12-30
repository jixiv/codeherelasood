<?php

    if(isset($_POST['StudentID']) && isset($_POST['lec_ID']) && isset($_POST['work']))
    {

    require_once 'connect.php';

    $work_id = $_POST['work'];
    $std_number = $_POST['StudentID'];
    $lec_number = $_POST['lec_ID'];
   

    $stmt = $conn->prepare("INSERT INTO report_work_tb
    (work_id,std_number,lec_number)
    VALUES (:work_id,:std_number, :lec_number)");
    $stmt->bindParam(':work_id', $work_id, PDO::PARAM_STR);
    $stmt->bindParam(':std_number', $std_number, PDO::PARAM_STR);
    $stmt->bindParam(':lec_number', $lec_number, PDO::PARAM_STR);
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
                  history.back(); //หน้าที่ต้องการให้กระโดดไป
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