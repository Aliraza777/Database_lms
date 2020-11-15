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
$get_id = $_GET['id'];
//echo "$get_id";
       
$sql = "DELETE FROM teacher where teacher_id = $get_id";
$result = mysqli_query($conn, $sql);


function_alert();


function function_alert() { 
      
  // Display the alert box  
  echo "<script>alert('- Data Deleted Successfully !');
  window.location.href='teacher.php';
  </script>"; 
} 
mysqli_close($conn);

?>
