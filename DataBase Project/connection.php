<?php
$servername = "localhost";
$username = "Ali";
$password = "aliraza123";
$db       = "trying";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 //echo "Connected successfully";

// mysqli_close($conn);
?>