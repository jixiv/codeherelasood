<?php 

	include ("connect.php");

	error_reporting(E_ALL && ~E_NOTICE);
	print_r($_POST) ;

	
	$std_number = $_POST["StudentID"];
	$std_fullname = $_POST["Fullname"];
	$std_faculty = $_POST["Faculty"];
	$std_department = $_POST["Department"];


	if ($std_number == $std_number && $sub_id == $sub_id ) {

		$std_number = $_POST["StudentID"];


		$sqll="SELECT * FROM report_tb where std_number = '$std_number'"; 
	
			
			//print_r($std_time);
			$db_query = mysqli_query($conn,$sqll) or die (mysqli_error()); 

			$num_rows  = mysqli_num_rows($db_query);  

			if($num_rows > 0)  
			{ 
				echo '<span style="color:#FF4500;">Error : Student Data Repeatedly</span>';
				//echo json_encode("Error : Student Data Repeatedly");
			} 
			else 
			{  

			$sql = "INSERT INTO report_tb (std_number, std_fullname, std_faculty, std_department) 
					VALUES ('$std_number', 
							'$std_fullname', 
							'$std_faculty', 
							'$std_department', 
)";

			$query = mysqli_query($conn,$sql);

				if($query){
				//print_r($_POST);	
			
				echo '<span style="color:#32CD32;">Success : Data Insert Successfully</span>';	
				//echo json_encode("Success : Data Insert Successfully");

				}
				else 
				{
					//print_r($_POST);
					echo json_encode('problem');
				}
		}
	
	} else {
		//print_r($_POST);
		echo json_encode("Data Insert Problem");
	}

	mysqli_close($conn);
             
      //if(isset($_REQUEST['std_number']) || isset($_REQUEST['fullname']) )
      //{
      //print '<pre>';
      //print_r($_REQUEST['std_number']);
      //print '</pre>';
      //print '<pre>';
      //print_r($_REQUEST['fullname']);
      //print '</pre>';
      //}


 ?>