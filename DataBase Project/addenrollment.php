<?php
session_start();
include("connection.php");



if(isset($_POST['add'])){
$add = "INSERT INTO course_alloc (student_id , teacher_id , course_id) 
VALUES ('".$_POST['student_id']."','" .$_POST['teacher_id']."' ,'" .$_POST['course_id']."')";
$sql = mysqli_query($conn, $add);

header("location:enrollment.php");
}

// echo"$name";
// echo"$rollno";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Enrollment</title>
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
						Add New Enrollment
					</span>
                    <div class="wrap-input100 rs1 validate-input " data-validate="student name is required">
					<label>Choose Student Name:</label><br>
					
						<select  name='student_id' required>
              			<?php
              				$sql1 = "SELECT * FROM students";
							$result = mysqli_query($conn , $sql1);
							if(mysqli_num_rows($result) > 0){
              					while($row = mysqli_fetch_assoc($result))
              					{
									$student_id=$row['student_id'];
									$student_name=$row['student_name'];
								   	echo "<option value='$student_id'>$student_name</option>";
								  }	  
							}
              			?>
            			</select>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input " data-validate="Teacher name is required">
					<label>Choose Instructor:</label><br>
						<select  name='teacher_id' required>
              			<?php
              				$sql2 = "SELECT * FROM teacher";
							$result2 = mysqli_query($conn , $sql2);
							if(mysqli_num_rows($result2) > 0){
              					while($row1 = mysqli_fetch_assoc($result2))
              					{
									$teacher_id=$row1['teacher_id'];
									$teacher_name=$row1['teacher_name'];
								   	echo "<option value='$teacher_id'>$teacher_name</option>";
								  }	  
							}
              			?>
            			</select>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
					<div class="wrap-input100 rs1 validate-input " data-validate="Course name is required">
					<label>Choose a Course:</label><br>
						<select  name='course_id' required>
              			<?php
              				$sql3 = "SELECT * FROM courses";
							$result3 = mysqli_query($conn , $sql3);
							if(mysqli_num_rows($result3) > 0){
              					while($row2 = mysqli_fetch_assoc($result3))
              					{
									$course_id=$row2['course_id'];
									$course_name=$row2['course_name'];
    							   	echo "<option value='$course_id'>$course_name</option>";
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
<?php
mysqli_close();
?>


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