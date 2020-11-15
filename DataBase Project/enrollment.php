<?php
   //  include("connection.php");

    session_start();
    include("connection.php");
if(isset($_POST['id'])){
    $id = $POST['id'];
    
}
//header("location:courses.php");



?>

<!DOCTYPE html>
<html lang="en">

<style>
.right{
    position:fixed;
    top:5%;

    right:2%;
}
.bottom{
    position:fixed;
    bottom: 5%;
    right:4%;
}
    
table, th, td {
  border: 1px solid black;
  border-collapse:collapse;

}
th,td{
    padding : 15px;
    text-align: center;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>

     <!---Bootsrap CSS-->
     <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--font awesome-->
    <script src="./js/all.js"></script>
    <link rel="stylesheet" href="./main.css">
</head>
<body class="bg-dark">
    
    <!--navbar-->
    <nav class="navbar py-3 navbar-light navbar-expand-lg bg-info">
        <a href="#" class="navbar-brand text-uppercase font-italic">
        <i class="fas fa-user fa-1x text-dark mx-1"></i>Admin Portal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarlinks">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarlinks">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item active"><a href="#" data-toggle="modal" data-target="#modal" class="nav-link">Home</a></li> -->
                    <li class="nav-item"><a href="student.php" class="nav-link">Students</a></li>
                    <li class="nav-item"><a href="teacher.php" class="nav-link">Teachers</a></li>
                    <li class="nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
                    <li class="nav-item"><a href="departments.php" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="enrollment.php" class="nav-link">Enrollments</a></li>



                </ul>
            </div>

            <span>
            <!-- <a href="logout.php" class="btn navbar-btn btn-danger navbar-right"> -->
            <a href="#" data-toggle="modal" data-target="#modal" class="navbar-right" >
                <i class="fas fa-home fa-2x text-dark"></i>   
             </a>
            </span>
    </nav>
    <!-- end of navbar -->

<div class="container " id= "departments">
      <!--title-->
      <div class="row">
                <div class="col text-center">
                            <h1 class="display-4 text-uppercase bg-gradient-primary text-info mb-0">
                                <strong>Enrollments</strong>
                            </h1>
                            <div class="title-underline bg-secondary"  style="margin:0 auto;"></div>
                                <div class="my-5"> </div>

                        </div>
                    </div>
                    <!--end of title-->

                  
    <div class="row">
        <div class="col text-align:center text-white">
    <form action="enrollment.php" method="POST" >
    <table style="margin:0 auto">
        <tr>
             <th> ID </th>
             <th> Student Name </th>
             <th> Teacher Name </th>
             <th> Course Name </th>
             <th> Reg Date & Time </th>
             <th> Actions </th>

    <?php
$sql = "SELECT * FROM course_alloc";
$result = mysqli_query($conn , $sql);

if (mysqli_num_rows ($result) > 0) {
    
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
//student data--------------------------
    $studentid =$row['student_id'];
 $forstudent = "SELECT * from students where student_id = ".$studentid;
$res = mysqli_query($conn , $forstudent);
    while($row1 = mysqli_fetch_assoc($res)){
    $studentname = $row1['student_name'];

    //teacher data----------------------
    $teacherid =$row['teacher_id'];
 $forteacher = "SELECT * from teacher where teacher_id = ".$teacherid;
$res1 = mysqli_query($conn , $forteacher);
    while($row2 = mysqli_fetch_assoc($res1)){
    $teachername = $row2['teacher_name'];
// course data-------------------------------
$courseid =$row['course_id'];
$forcourse = "SELECT * from courses where course_id = ".$courseid;
$res2 = mysqli_query($conn , $forcourse);

while($row3 = mysqli_fetch_assoc($res2)){
$coursename = $row3['course_name'];


    echo "<tr>
    <td>".$row["alloc_id"]."</td>
    <td>".$studentname."</td>
    <td>".$teachername."</td>
    <td>".$coursename."</td>
    <td>".$row["reg_date"]."</td>"
    
    ?>
    <td>
    <!-- <button class="btn btn-sm btn-outline-warning">  -->
     
    <!-- </button> -->
    <!-- <button class="btn btn-sm btn-outline-danger">  -->
    <a class="btn btn-sm btn-outline-danger" href="deleteenrollment.php?id=<?php echo $row['alloc_id']; ?>" name="delete">Delete</a> 
     </td>
</tr>

    <?php
    // echo"<button type="submit" form="form1" value="button">Edit</button>";
    //echo "<td><a href=\"edit.php?id=".$row['dep_id']."&status=app\">Approve</a></td>";
}
    }
  }
}
  echo "</table>";
} else {
  echo "0 results";
}



?>

</form>
        </div>
    </div>
</div>

<!-- Adding new Enrollment button -->
<div class="container">
    <div class="row">
        <div class="col">
        <a href="addenrollment.php" class="btn btn-outline-primary btn m-2 text-capitalize bottom">+ Add New Enrollment</a>

        </div>
    </div>
</div>


                    <!--Logout moddle-->
                    <div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Do you Want to logout ?</h3>
                <button type="button" class="close" data-dismiss="modal">&times;

                </button>
            </div>
            <div class="modal-body">
                <p>Logout means you will have to login again ...</p>
            </div>
            <div class="modal-footer">
                <!-- <button  type="button"  class="btn btn-danger" data-dismiss="modal"> -->
                    <a class="btn btn-primary" href="logout.php">Logout</a>
            
            </div>
        </div>
    </div>
</div>
<!---end of footer section-->

<?php
mysqli_close($conn);
?>
  
    <!--Jquery-->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!---Bootsrap JS-->
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>


</html>