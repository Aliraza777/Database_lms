<?php
session_start();
include("connection.php");
// include("student.php");
// include("teacher.php");
// include("courses.php");
// include("departments.php");
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

// $get_id = $_SESSION['id'];
//if(!isset($_GET['id'])){
    
//}
// $get_id = $_GET['id'];
// echo "$get_id";

if(isset($_GET['id'])){
$sql = "SELECT * FROM department WHERE dep_id =".$_GET['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
}

// echo "name :".$row[1]." <br>";

if(isset($_POST['btn-update'])){
$name = $_POST['departmentname'];
$update = "UPDATE department SET dep_name='$name' WHERE dep_id=". $_GET['id'];
$up = mysqli_query($conn, $update);
if(!isset($sql)){
die ("Error $sql" .mysqli_connect_error());
}

header("location:departments.php");
}

// echo"$name";
// echo"$rollno";


mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Department</title>
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

    <form type="submit" method="POST">
    <span class="login100-form-title p-b-33">
						Update Department
					</span>
    <div class="wrap-input100 validate-input" data-validate="Valid User name required">
						<input class="input100" type="text" name="departmentname" placeholder="Department Name" value="<?php echo htmlspecialchars($row['dep_name']) ?>">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
    
		                             <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" type="submit" name="btn-update" id="btn-update" onClick="update()">
							Update
						</button>
					</div>
<!-- 
                    <button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
<a href="disp.php"><button type="button" value="button">Cancel</button></a> -->
    </form>

</div>
</div>
</div>
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";

}
}
</script>


</body>



	
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

</html>