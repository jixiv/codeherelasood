
<!doctype html>
<html lang="en">
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
	<link rel="shortcut icon" type="icon/cnic_logo.png" href="assets/icon/cnic_logo.png">

	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<script>
	
	$(document).ready(function(){
		$("#txtStudentID").change(function(){
			GetstdInfo();
		});
	});


	function GetstdInfo(){
		$.ajax({ 
				url: "return_data.php" ,
				type: "POST",
				data: 'Sstd_id=' +$("#txtStudentID").val()
			})

			.success(function(result) { 
				//console.log(result);
				var obj = jQuery.parseJSON(result);						
					if(obj == '')
					{

						$('input[type=text]').val('');
					}
					else
					{	
						$.each(obj, function(key, inval, attr) {
							//console.log(key, inval, attr);									
							$("#txtStudentID").val(inval["std_number"]);
							$("#txtFullname").val(inval["std_fullname"]);
							$("#txtFaculty").val(inval["std_faculty"]);
							$("#txtDepartment").val(inval["std_department"]);
							$("#txtSTD_ID").val(inval["std_id"]);
							$("#txtPicture").attr("src", "assets/pic_student/"+inval["std_picture"]);
							
						});
			
					}
				updatestd();
			});
	}

</script>

</head>

<body>

<br>

	
<form name="Form1" id="add_name" action="insert_data.php">
	<div class="form-group">
    	<div class="container">
            <div class="font_1">
				<div class="row">

		<div class="col-md-1 col-lg-1">
			
		</div>

		<div class="col-md-4 col-lg-4">
			<div class="card text-center border border-dark border-1 bg-dark text-light" >
				<div class="card-header"><h5>QR-Code Scanner</h5></div>
                <video id="preview" class="card-img-top "></video>
				<div class="card-body">
					<h6><p class="card-text bg-dark text-light">Insert Data...</p></h6>
  				</div>
			</div> 
		</div>
	 
        <div class="col-md-6 col-lg-6">
			<div class="table-responsive border border-dark border-1 bg-dark">               
				<table class="table table-borderless table-condensed" >
					<thead class="bg-success" width="100%" >
						<tr class="text-center">
							<th width="50%" style="vertical-align:middle;" class="text-dark"><h5>Profile</h5></th>

						</tr>
					</thead>

							
					<tbody class="bg-dark">	
						
						<tr>	
							<td class="text-center" style="vertical-align:middle;"><img id="txtPicture" src" "  width="170px;" height="170px;" ></td>
						</tr>
						
						<tr>
							<td style="vertical-align:middle;">
							
								<input type="text" class="form-control text-center" id="txtStudentID" name="StudentID" placeholder="รหัสประจำตัว"><br>
								<input type="text" class="form-control text-center" id="txtFullname" name="Fullname"  placeholder="ชื่อ-นามสกุล"  readonly="readonly"> <br>
								<input type="text" class="form-control text-center" id="txtFaculty" name="Faculty"  placeholder="คณะ"  readonly="readonly"> <br>
								<input type="text" class="form-control text-center" id="txtDepartment" name="Department"   placeholder="สาขาวิชา"  readonly="readonly">
				
							</td>


						</tr>

					</tbody>
				
				</table>
			</div>
		</div>

		
		
		<div class="col-md-1 col-lg-1">
			
		</div>

	    		</div>
	  		</div>
 		</div>
	</div>
</form>	


  		<!--
		<div class="col-lg-12 col-md-12 ">
            <div class="form-group text-center font_1">
		 		<input type="button" name="submit1" id="submit" class="btn btn-success" value="Submit" > 
		 		<input type="button" name="reset"  value="Clear" class="btn btn-danger" onClick="javascript:location.reload();"/> 
		  	</div>
        </div>
		-->

		<audio id="audio" > 
			<source src= "assets/sound/beep_01.mp3" 
				type="audio/mpeg"> 
		</audio> 
</body>
</html>

	<script>
		function play() {
			var audio = document.getElementById("audio");
			audio.play();
		}
	</script>


	<script>  
			
			function updatestd(){
				
				var x = $("#txtStudentID").val();

			 	if(x.length < 1){
					
					$("p").html("Please Insert Data");
					setTimeout(function() {
	
						//alert('โปรดกรอกรหัสประจำตัวนักศึกษา'); 
						//location.reload();			
					}, 500);	

					return false;
				}

				$.ajax({   
					url : "insert_data.php",  
					method : "POST",  
					data : $('#add_name').serializeArray(),  
					//$.post({ url: 'insert_data.php', data: all.serialize(),
						success:function(data) {
					
						//console.log(data);
							play();
							
						$("p").html(data);

							setTimeout(function() {
								
								ClearInput();
								//alert(data);  
								// location.reload();
							}, 2000);	

						}	
					
				}); 
			}
			
			function ClearInput(){
				$("#txtStudentID").val('');
				$("#txtFullname").val('');
				$("#txtFaculty").val('');
				$("#txtDepartment").val('');
				$("#txtSTD_ID").val('');
				$("#txtPicture").attr("src", "");

				$("p").html("Insert Data...");
				//$('p').empty();
			}

	</script>


	<script>
		let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
			scanner.addListener('scan', function (content) {

				var id = content.toString();
				
				var sp = id.split(" ");  

				//console.log(this.scan);
				//console.log(sp);
				$("#txtStudentID").val(sp);
				GetstdInfo();

			});
			Instascan.Camera.getCameras().then(function (cameras) {
				if (cameras.length > 0) {
				scanner.start(cameras[0]);
				
			} else {
				console.error('No cameras found.');
				}
			}).catch(function (e) {
				console.error(e);
			});
			
	
	
    </script>	
<!--	
	
	<script>
		function setFocusToTextBox(){
			document.getElementById("#txtStudentID").focus();
		}
	</script>		


	<script>  
						
		$(document).ready(function(){
				
			$("#submit").click(function(){
				
				var x = $("#txtStudentID").val();
				
				if(x.length < 1){
									
					$("p").html("Please Insert Data");
						setTimeout(function() {
					
						alert('โปรดกรอกรหัสประจำตัวนักศึกษา'); 
						location.reload();			
						}, 500);	
				
						return false;
				}
				
				//var all = this.form;
				
				$.ajax({   
					url : "insert_data.php",  
					method : "POST",  
					data : $("#add_name").serialize(),  
						//$.post({ url: 'insert_data.php', data: all.serialize(),
					success:function(data) {
											
						//console.log(data);
				
						$("p").html(data);
						setTimeout(function() {
							//alert(data);  
							location.reload();
						}, 1000);	
				
					}	
											
				});  
								
			});
							
		});
				
					
				
	</script>

-->