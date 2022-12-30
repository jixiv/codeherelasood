<?php
	
	include ("connect.php");

		$arr_result['issuccess'] = false;
		$arr_result['msg'] = "";

	if($connect) {

		$sql = "SELECT * FROM student_tb WHERE  std_number = '".$_POST["ST_id"]."' ";
		$dbquery = mysqli_query($connect,$sql);

		$arr_result = array();

		while($result = mysqli_fetch_array($dbquery))
		{
			array_push($arr_result,$result);
		}
	
		mysqli_close($connect);

	}
    else {
         $arr_result['issuccess'] = false;
         $arr_result['msg'] = "Can't Connect Database";
    }

    echo json_encode($arr_result);

?>
