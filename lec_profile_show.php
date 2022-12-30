<?php
session_start();
include("h.php");
require_once("connects.php");
$number = $_SESSION['number'];
$fullname = $_SESSION['fullname'];
$faculty = $_SESSION['faculty'];
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

<body class="style fade-in bg-secondary">

<nav class="navbar navbar-flex navbar-expand-lg navbar-dark top-bar font_1">

    <a class="navbar-brand" href="lecturer_form.php">CED</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link disabled text-light" href=""><?php echo $fullname; ?></a>
                </li>

                <li class="nav-item">
                     <a href="JavaScript:if(confirm('Confirm Logout..!!') == true){window.location='logout.php ';}" class="btn btn-danger">ออกจากระบบ</a>
                </li>

          </ul>
        </div>

</nav>

<div class="container">
<?php
    if(isset($_GET['member_id'])){
      require_once 'connect.php';
      $stmt = $conn->prepare("SELECT * FROM lecturer_tb WHERE member_id=?");
      $stmt->execute([$_GET['member_id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($stmt->rowCount() < 1){
          header('Location: lecturer_form.php');
          exit();
      }
    }
    ?>
      <div class="card text-center font_1 border border-dark border-1">
        <h5 class="card-header "><b>Name :</b> <?php echo $fullname; ?></h5>
        
        <div class="card-body"> 

          <form name="form1" method="post" action="lec_profile_edit.php">
            <div class="form-group">
              <div class="container font_1">
                <div class="col-lg-auto" >
            
                  <div class="text-center">
                      <img src="assets/pic_lecturer/p1.png" alt="user" width="200" height="200" class="border border-dark img-thumbnail rounded mx-auto d-block" > 
                  </div>


                <br>
                <center>
                <div class="row">
                  <div class="table-responsive">
                      <table class="table table-borderless table-condensed">
                        <tbody>
            
                        <tr class="text-center">
                            <td style="vertical-align:middle;" >
                              <h5><b>ID : </b><?php echo $number; ?></h5>                        
                            </td>                  
                          </tr>           

                          <tr class="text-center">
                            <td style="vertical-align:middle;" >
                              <h6><b>Faculty : </b> <?php echo $faculty; ?>  </h6>                     
                            </td>        
                          </tr>


                          <tr class="text-center">
                            <td style="vertical-align:middle;"> 
                              <h6><b> Dept. : </b><h10>คอมพิวเตอร์ศึกษา </h10></h6>
                              
                              <br>
    <div class="col-md-12">
      <div class="font_1">
          <div class="form-group text-center">
            <a href="lecturer_form.php" class="btn btn-danger" >Back</a>
        </div>
      </div>
    </div>
                                                    
                            </td>
                          </tr>
                          

                        </tbody>
                    </table>
                  </div>
                </div>
                </center>

                </div>
              </div>
            </div>
          </form>

        </div>
      </div>

</div>
      
  </body>
  </html>