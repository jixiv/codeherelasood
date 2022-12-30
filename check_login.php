<?php 
session_start();

  if(isset($_POST['login'])){
    include("connects.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="SELECT * FROM login_tb
    WHERE  username='".$username."' 
    AND  password='".$password."' ";
    $result = mysqli_query($conn,$sql);
           
      if(mysqli_num_rows($result)==1){
      $row = mysqli_fetch_array($result);
                          
      $_SESSION["usernamer"] = $row["username"];
      $_SESSION["number"] = $row["number"];
      $_SESSION["password"] = $row["password"];
      $_SESSION["fullname"] = $row["fullname"];
      $_SESSION["faculty"] = $row["faculty"];
      $_SESSION["department"] = $row["department"];
      $_SESSION["member_id"] = $row["member_id"];
                        
      if ($_SESSION["member_id"]=="1"){ 
          $_SESSION['success'] = "lecturer... Successfully Login...";
          Header("Location:lecturer_form.php");
      }
      if ($_SESSION["member_id"]=="2"){ 
          $_SESSION['success'] = "student... Successfully Login...";
          Header("Location:student_form.php");
      }
                        
          }else{
            echo "<script>";
              echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
              echo "window.history.back()";
            echo "</script>";
          }
          }else{
             Header("Location: index.php");
          }        
  ?>