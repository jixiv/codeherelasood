<?php

  if(isset($_POST['std_number']) && isset($_POST['std_fullname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['member_id'])){

  require_once 'connect.php';

  $std_number = $_POST['std_number'];
  $std_fullname = $_POST['std_fullname'];
  $fullname = $_POST['std_fullname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cfpassword = $_POST['cfpassword'];
  $member_id = '2'; 
  $std_faculty = 'ครุศาสตร์'; 
  $std_department = 'คอมพิวเตอร์ศึกษา'; 

  if($password != $cfpassword) {
    echo "<script>";
    echo "alert(\" รหัสผ่านไม่ตรงกัน\");"; 
    echo "window.history.back()";
    echo "</script>";
} else {
            $stmt = $conn->prepare("INSERT INTO student_tb 
              (std_number, std_fullname, std_faculty, std_department, member_id) VALUES (:std_number, :std_fullname, :std_faculty, :std_department, :member_id)");

            $stmt->bindParam(':std_number', $std_number, PDO::PARAM_STR);
            $stmt->bindParam(':std_fullname', $std_fullname , PDO::PARAM_STR);
            $stmt->bindParam(':std_faculty', $std_faculty , PDO::PARAM_STR);
            $stmt->bindParam(':std_department', $std_department , PDO::PARAM_STR);
            $stmt->bindParam(':member_id', $member_id , PDO::PARAM_STR);
            $result = $stmt->execute();

            $stmt2 = $conn->prepare("INSERT INTO login_tb 
              (username, password, fullname, member_id)
            VALUES 
            (:username, :password, :std_fullname, :member_id)");

            $stmt2->bindParam(':username', $username , PDO::PARAM_STR);
            $stmt2->bindParam(':password', $password , PDO::PARAM_STR);
            $stmt2->bindParam(':std_fullname', $fullname , PDO::PARAM_STR);
            $stmt2->bindParam(':member_id', $member_id , PDO::PARAM_STR);
            $result2 = $stmt2->execute();

             echo '
             <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

            if($result && $result2){
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เพิ่มข้อมูลสำเร็จ",
                          type: "success"
                      }, function() {
                          window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
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
                          window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            }
           
  } 
  $conn = null;
}


  ?>
  
