<?php
    // include("connection.php");
session_start();
include ("connection.php");
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
//echo "This is admin portal";



// if(isset($_POST['id'])){
//     $id = $POST['id'];
    
// }


if(isset($_POST['btn-search'])){
    $course = $_POST['coursename'];
    $sql="SELECT * FROM courses WHERE course_name = '$course'";  
    $result = mysqli_query($conn, $sql);
//     $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
    ?>

    
    <table class="text-white"> 
    <tr>
    <th>ID</th>
    <th>Name</th>
    
    <th>Reg Date & Time</th>
    </tr>

    <?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    
    <td>".$row["course_id"]."</td>
    <td>".$row["course_name"]."</td>
  
    <td>".$row["reg_date"]."</td>
    
    </tr>";
    
    }
    // while ($row = mysqli_fetch_row($result)) {
    //     printf ("%s (%s)\n", $row[0], $row[1]);}
 echo "</table>";
} 

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//       echo "id: " . $row["course_id"]. " - Name: " . $row["course_name"]. " " . $row["teacher_id"]. "<br>";
//     }
//   }
else {
echo "0 results";
}
//header("location:courses.php");
}
    

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
    right:2%;
}
table, th, td {
  border: 1px solid black;
  border-collapse:collapse;
}
th,td{
    padding : 5px;
    text-align: center;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

     <!---Bootsrap CSS-->
     <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--font awesome-->
    <script src="./js/all.js"></script>
    <link rel="stylesheet" href="./main.css">
</head>
<body class="bg-dark" >
    
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
            
                    <!-- search bar -->
                    <span class="mx-4">
                    <form type="submit" method="post">
                    <div>
                                <input type="text" class="capitalize"  name="coursename"  placeholder="Search">
                                <span><button type="submit" class="btn btn-sm btn-danger" name="btn-search" id="btn-search">Search</button></span>
                        </div>
                        </form>
</span>
                        <!-- End of Search bar -->


            <span>
            <!-- <a href="logout.php" class="btn navbar-btn btn-danger navbar-right"> -->
            <a href="#" data-toggle="modal" data-target="#modal" class="navbar-right" >
                <i class="fas fa-home fa-2x text-dark"></i>   
             </a>
            </span>
    </nav>
    <!-- end of navbar -->

<div class="container">
      <!--title-->
      <div class="row">
                <div class="col text-center">
                            <h1 class="display-4 text-uppercase text-info mb-0">
                                <strong>Courses</strong>
                            </h1>
                            <div class="title-underline bg-secondary"  style="margin:0 auto;"></div>
                                <div class="my-5"> </div>

                        </div>

                        
                    </div>
                    <!--end of title-->

    <div class="row ">
        <div class="col">
            <form class="text-align:center text-white" method="POST">
            <table style="margin:0 auto">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <!-- <th>Teacher ID</th> -->
                    <th>Reg Date & Time</th>
                    <th>Action</th>
                </tr>
    <?php
       
       
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn , $sql);

if (mysqli_num_rows ($result) > 0) {
//   echo "<table>
//   <tr>
//   <th>ID</th>
//   <th>Name</th>
//   <th>Teacher ID</th>
//   <th>Reg Date</th>
//   <th>Action</th>
//   </tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row["course_id"]."</td>
    <td>".$row["course_name"]."</td>

    <td>".$row["reg_date"]. "</td>"
    ?>
    <td>
    <!-- <button class="btn btn-sm btn-outline-warning">  -->
    <a class="btn btn-sm btn-outline-warning" href="editcourse.php?id=<?php echo $row['course_id']; ?>" name="edit">Edit</a> 
    <!-- </button> -->
    <!-- <button class="btn btn-sm btn-outline-danger">  -->
    <a class="btn btn-sm btn-outline-danger" href="deletecourse.php?id=<?php echo $row['course_id']; ?>" name="delete">Delete</a> 
     </td>
</tr>
    <?php
    // <td><a href=\"editcourse.php?id=".$row['course_id']."&status=app\">Edit</a><a href=\"deletecourse.php?id=".$row['course_id']."&status=app\">/Delete</a></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}


mysqli_close($conn);
?>
</form>
        </div>
    </div>
</div>
<!-- adding add button  -->
<div class="container">
    <div class="row">
        <div class="col">
        <a href="addcourse.php" class="btn btn-outline-info btn m-2 text-capitalize bottom">+ Add New Course</a>

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
                    <a class="btn btn-info" href="logout.php">Logout</a>
            
            </div>
        </div>
    </div>
</div>
<!---end of footer section-->

    <!--Jquery-->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!---Bootsrap JS-->
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>