<?php 
session_start();
include("h.php");
require_once("connect.php"); 
?>

<!doctype html>
<html lang="en">
<head>

</head>
	<body class="bg-dark">
		<link rel="stylesheet" href="assets/css/style_register.css">
			<br>
				<section>
					<div class="container" id="container">
						<div class="form-container sign-in-container">
							<form action="check_login.php" method="post" name="form_login" id="loging">
								<h5>ระบบเช็ครายชื่อนักศึกษา</h5> 
								<h6>(Checking Names In Classroom)</h6> 
								<a>Ubon Ratchathani Rajabhat University</a>
								<input type="text" name="username" placeholder="Username" />
								<input type="password" name="password" placeholder="Password" />
								<button type="submit" name="login" >Login</button>
							</form>
						</div>

						<div class="form-container sign-up-container">
							<form action="std_register_cmp.php" method="POST" name="form1;">
								<h1>REGISTER</h1>
								<input type="text" name="std_number" placeholder="รหัสประจำตัวนักศึกษา" required>
								<input type="text" name="std_fullname" placeholder="ชื่อ-นามสกุล" required>
								<input type="text" name="username" placeholder="ชื่อผู้ใช้งาน" required>
								<input type="password" name="password" placeholder="รหัสผ่าน" required>
								<input type="password" name="cfpassword" placeholder="ยืนยันรหัสผ่าน" required>
								<input type="hidden"  name="member_id" value="2">
								<button type="submit" name="register" >Register</button>
							</form>
						</div>

						<div class="overlay-container">
							<div class="overlay">
								<div class="overlay-panel overlay-left">
									<button class="ghost" id="signIn">Sign In</button>
								</div>
								<div class="overlay-panel overlay-right">
									<p><a href="#" class="text-success" onClick="toggleForm();"><button class="ghost" id="signUp">Sign Up</button></a></p>
								</div>
							</div>
						</div>
					</div>
				</section>

	</body>
</html>
<?php include('script.php');?>