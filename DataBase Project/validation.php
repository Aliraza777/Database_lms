<?php
include("./connection.php");

session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invalid Passowrd or Username</title>
</head>
<body>
    <button class="login100-form-btn">
    <a href="index.php"> Press here to login again!</a>
						</button>
</body>
</html>

<?php
session_destroy();
?>
