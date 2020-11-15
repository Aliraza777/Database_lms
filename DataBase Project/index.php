<?php
session_start();
 include("./connection.php");

// $servername = "localhost";
// $username = "Ali";
// $password = "aliraza123";
// $db       = "trying";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $db);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $name = $_POST['username'];
// $pass = $_POST['pass'];
// $sql1 = "SELECT * FROM admin where name = '$name' and password = '$pass'";

// $num = mysqli_num_rows($result);
// $result = mysqli_query($conn , $sql1);
// echo "validation";
// if($num == 1){
	
// 	header('location: admin.php');
	
// }
// else{
// 	session_destroy();
// 	// header('location:validation.php');
// 	echo "Invalid";
// }


if(isset($_POST['username'])){
	$uname = $_POST['username'];
	$password = $_POST['pass'];


	$sql = "select * from admin where name='$uname' and password = '$password'";

	$result =mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)==1){
		//echo "You have succesfully Logged In !";
		header("Location:admin.php");
		//die();		
		exit();
	}
	else{

		//echo "Invalid username Or Password!";
		//trigger_error("Invalid username or Password !");
		echo '<script>alert("Invalid Username or Password")</script>'; 
		//header("Location:index.php");
		//session_destroy();
		
	}

}



mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Portal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				
				<form  method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Login Portal
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid User name required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					
					<!-- <input id="myInput" value="Some text.."> -->
					
<!-- 
				<script>
				var input = document.getElementById("myInput");
					input.addEventListener("keyup", function(event) {
  					if (event.keyCode === 13) {
   					//event.preventDefault();
   					document.getElementById("myBtn").click();
  						}
					});
					</script> -->

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password ?
						</a>
					</div>

					<div class="text-center">
						<!-- <span class="txt1">
							Create an account?
						</span> -->

						<a href="#" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>