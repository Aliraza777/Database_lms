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

// echo "Connected successfully";

// creating table department............
// $sql="CREATE TABLE Department(
//   dep_id int(6) not null auto_increment primary key,
//   dep_name varchar(20) not null
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table Department created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }


// creating tale student
// $sql="CREATE TABLE Students (
//   student_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   student_name VARCHAR(50) NOT NULL,
//   roll_no INT(10) not null,
//   dep_id int not null,
//   FOREIGN KEY (dep_id) REFERENCES Department(dep_id),
//   phone varchar(20) not null,
//   username VARCHAR(50) not null,
//   pass varchar(50) not null,
//   email varchar(50) not null,
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
//   if ($conn->query($sql) === TRUE) {
//     echo "Table Students created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }
  


// creating table teacehr//////////
// $sql="CREATE TABLE Teacher (
//   teacher_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   teacher_name VARCHAR(50) NOT NULL,
//   phone varchar(20) not null,
//   dep_id int,
//   FOREIGN KEY (dep_id) REFERENCES Department(dep_id),
//   username VARCHAR(50) not null,
//   pass varchar(50) not null,
//   email varchar(50) not null,
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table Teachers created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// creating table courses///////////
$sql="CREATE TABLE Courses (
  course_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  course_name VARCHAR(50) NOT NULL,
  teacher_id int(6) unsigned,
  CONSTRAINT fk_t_id,
  FOREIGN KEY (teacher_id) REFERENCES Teacher(teacher_id) ON DELETE CASCADE,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
if ($conn->query($sql) === TRUE) {
  echo "Table Courses created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


// creating table session////////

// $sql="CREATE TABLE Session (
//   session_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   session_no VARCHAR(50) NOT NULL,
//   course_id int(6) unsigned,
//   FOREIGN KEY (course_id) REFERENCES Courses(course_id),
//   content varchar(10000) not null,
//   session_date varchar(100),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";


// if ($conn->query($sql) === TRUE) {
//   echo "Table Session created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }
// creating table .............
// $sql="CREATE TABLE Quiz(
//   quiz_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   quiz_number int(5) NOT NULL,
//   quiz_total int(10) not null,
//   quiz_obtained int(10) not null,
//   course_id int(6) unsigned,
//   FOREIGN KEY (course_id) REFERENCES Courses(course_id),
//   student_id int(6) unsigned,
//   FOREIGN KEY (student_id) REFERENCES Students(student_id),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";



// if ($conn->query($sql) === TRUE) {
//   echo "Table Quiz created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

  

  
// $sql = "INSERT INTO Table1 (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO Table1 (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO Table1 (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//  }



// //Inserting multiple values in multiple tables...
  
// $sql = "INSERT INTO Table2 (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');
// INSERT INTO Table1 (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";

// $sql .= "INSERT INTO Table2 (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');
// INSERT INTO Table1 (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";

// $sql .= "INSERT INTO Table2 (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com');
// INSERT INTO Table1 (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com');";

 
// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
 
//end of inserting multiple data 


// $sql = "SELECT * from loginex";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result) > 0){
//   while($row = mysqli_fetch_assoc($result)){
//     echo "id: " .$row["id"]."Name : ".$row["user"]."<br>";
//   }
// }
// else{
//   echo "Error Encountered! <br>";
// }
//$sql = "SELECT from loginex where (user ='John')";
// $sql .= "INSERT INTO loginex (user, password)
// VALUES ('Mary', '12345');";

// if (mysqli_multi_query($conn, $sql)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

  // $sql = "ALTER TABLE loginex(
  // //-- ADD Email varchar(255) not NULL,
  // -- ADD phone_no varchar(255) not NULL,
  // -- ADD gender varchar(25) not NULL,
  // ADD reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  // )";
  
  // if (mysqli_query($conn, $sql)) {
  //   echo "Table Altered successfully";
  // } else {
  //   echo "Error Altering table: " . mysqli_error($conn);
  // }

mysqli_close($conn);

?> 