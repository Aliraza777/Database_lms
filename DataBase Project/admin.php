<?php
    session_start();
    include("connection.php");
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
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
 <!---Bootsrap CSS-->
 <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--font awesome-->
    <script src="./js/all.js"></script>
    <link rel="stylesheet" href="./main.css">
</head>
</head>

<body class="bg-dark">
<!-- lightblue -->
    <!--navbar-->
    <nav class="navbar py-3 navbar-light navbar-expand-lg bg-info">
        <a class="navbar-brand text-uppercase font-italic">
           <i class="fas fa-user fa-1x text-dark"></i> Admin Portal</a>
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

                    <!-- <li class="nav-item"><a href="#" data-toggle="modal" data-target="#modal" class="navbar-right"><i class="fas fa-home fa-1 text-dark"></i></a></li> -->
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

                    <!--title-->
                    <div class="countainer">
                    <div class="row">
                        <div class="col">
                            
                            <h1 class="display-4 text-uppercase text-danger mx-5 my-5">
                                <strong>  Welcome Admin! </strong>
                            
                             <!-- <div class="title-underline bg-info  "></div> -->
                            
                            </h1>

                        </div>
                    </div>
                    
                    </div>
                    <!--end of title-->

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
                    <a class="btn btn-danger" href="logout.php">Logout</a>
            
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