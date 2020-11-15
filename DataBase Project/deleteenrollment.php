<?php
session_start();
include("connection.php");

$get_id = $_GET['id'];
//echo "$get_id";
       
$sql = "DELETE FROM course_alloc where alloc_id = $get_id";
$result = mysqli_query($conn, $sql);


function_alert();


function function_alert() { 
      
  // Display the alert box  
  echo "<script>alert('- Data Deleted Successfully !');
  window.location.href='enrollment.php';
  </script>"; 
} 
mysqli_close($conn);
?>
