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
<br>
<div class="container">
  <div class="card text-center font_1">
    <h4 class="card-header">เพิ่มข้อมูลการเก็บชั่วโมงสาขาวิชา</h4>
      <div class="card-body"> 
        <form action="create_work_cmp.php" method="POST">
          <div class="form-group">
            <div class="font_1 ">
              <center>
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table-borderless table-condensed table-hover" style="width: 600px;">
                      <tbody>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>ภาคเรียน :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <select class="form-control" style="width:350px;" name="work_term">
                                  <option>None</option> 
                                  <option>1/2564</option>
                                  <option>2/2564</option>
                                  <option>3/2564</option>
                                  <option>1/2565</option>
                                  <option>2/2565</option>
                                  <option>3/2565</option>
                                  <option>1/2566</option>
                                  <option>2/2566</option>
                                  <option>3/2566</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>หัวข้อ :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <input type="text" class="form-control" style="width:350px;" name="work_name" placeholder="หัวข้อ">
                          </td>
                        </tr>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>สถานที่ :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <input type="text" class="form-control" style="width:350px;" name="work_location" placeholder="สถานที่">
                          </td>
                        </tr>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>อาจารย์ :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <select class="form-control" style="width:350px;" name="lec_fullname">
                                  <option>เลือก</option>
                                  <option>อ.ภาณุพงศ์ บุญรมย์</option>
                                  <option>อ.อรรถพร วรรณทอง</option>
                                  <option>อ.พิทักษ์ สุรินทร์วัฒนกุล</option>
                                  <option>อ.อุดมเดช ทาระหอม</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>จำนวนชั่วโมง :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <select class="form-control" style="width:350px;" name="work_hour">
                                  <option>0</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                            </select>
                          </td>
                        </tr>

                        <tr class="text-right">
                          <td style="vertical-align:middle;">
                            <h7>หมายเหตุ :</h7>
                          </td>
                          <td style="vertical-align:middle;">
                            <textarea rows="3" cols="20" class="form-control" style="width:350px;" name="work_detail"></textarea>
                          </td>
                        </tr>

                       
                        <!-- <input type="hidden" name="pro_id" value="9">
                        <input type="hidden" name="pro_fullname" value="ผศ.ดร.ภานุพงศ์ บุญรมย์"> -->

                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group text-center">
                      <input type="submit" value="เพิ่มข้อมูล" class="btn btn-info">
                      <a href="view_work.php" class="btn btn-danger" >Back</a>
                  </div>
                </div>
     
              </center>    
            </div>
          </div>        
        </form> 
    </div>
  </div>
</div>

</body>
</html>
