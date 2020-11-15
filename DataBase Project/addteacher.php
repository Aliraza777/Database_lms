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



if(isset($_POST['add'])){
$add = "INSERT INTO teacher (teacher_name , phone , dep_id , username , pass , email) 
VALUES ('".$_POST['teachername']."', '" .$_POST['phone']."', '" .$_POST['dep_id']."' , '" .$_POST['username']."' , '" .$_POST['pass']."' , '" .$_POST['email']."')";
$sql = mysqli_query($conn, $add);
header("location:teacher.php");
}

// echo"$name";
// echo"$rollno";



// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Teacher</title>
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
						Add New Teacher
					</span>
                    <div class="wrap-input100 validate-input" data-validate="Valid Name required">
						<input class="input100" type="text" name="teachername" placeholder="Teacher Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Phone is required">
						<input class="input100" type="text" name="phone" placeholder="Phone No.">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>

					<!-- <div class="wrap-input100 rs1 validate-input" data-validate="Dep id is required">
						<input class="input100" type="number" name="dep_id" placeholder="Department ID">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div> -->
								<div class="wrap-input100 rs1 validate-input" data-validate="username is required">
						<input class="input100" type="text" name="username" placeholder="User Name">
						
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    
					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" id="pass" type="password" name="pass" placeholder="Password">
						<input type="checkbox"  onclick="myFunction()">Show Password <br> 
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
						
					
                    </div>
					<div class="wrap-input100 rs1 validate-input" data-validate="Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
					<div class="wrap-input100 rs1 validate-input " data-validate="Department name is required">
					<label>Choose a Department:</label><br>
					
						<select  name='dep_id' required>
              			<?php
						  
              				$sql1 = "SELECT * FROM department";
							$result = mysqli_query($conn , $sql1);
							if(mysqli_num_rows($result) > 0){
              					while($row = mysqli_fetch_assoc($result))
              					{
									$dep_id=$row['dep_id'];
									$dep_name=$row['dep_name'];

								   	echo "<option value='$dep_id'>$dep_name</option>";
								  }	  
							
							}
							
              			?>
            			</select>
						

						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
		                             <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" type="submit" name="add" id="btn-add" onClick="Add()">
							+Add
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
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>


<script>

function Add(){
 var x;
 if(confirm("+ Data Added Sucessfully") == true){
 x= "Add";

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