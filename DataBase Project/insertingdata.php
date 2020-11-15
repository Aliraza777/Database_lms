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

// $sql="INSERT into department
// (dep_name) VALUES('CS');
// insert into department
// (dep_name) VALUES('EE');
// insert into department
// (dep_name) VALUES('BBA');
// insert into department
// (dep_name) VALUES('MATHS');
// insert into department
// (dep_name) VALUES('PHYSICS');
// insert into department
// (dep_name) VALUES('Business Management');";
// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//  }



// $sql="INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Ali Raza Wahlah', 1802031, 51, 591221, 'ali.wahlah', 'ali123', 'aliraza2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Zia Ur Rehman', 1802023, 51, 5912265, 'zia.rehman', 'zia123', 'zia2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Saif Ullah Khan', 1802012, 52, 5918765, 'saif.ullah', 'saif123', 'saif2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Imran Khan', 1802034, 53, 5918719, 'imran.khan', 'imran123', 'imran2018@namal.edu.pk');


// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Asif Usman', 1802201, 54, 9888765, 'asif.usman', 'asif123', 'asif2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Wisha Khurshid', 1802007, 56, 88865, 'wisha.khurshid', 'wisha123', 'wisha2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Mahnoor awan', 1802019, 53, 7678765, 'mahnoor.awan', 'mahnoor123', 'mahnoor2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Sidra Ayesha', 1802092, 54, 878765, 'sidra.ayesha', 'ayesha123', 'ayesha2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('sajjad Khan', 1803012, 55, 8228765, 'sajjad.khan', 'sajjad123', 'sajjad2018@namal.edu.pk');

// INSERT INTO students
// (student_name, roll_no, dep_id, phone, username, pass, email) VALUES ('Zain Sherwani', 1803031, 56, 8228765, 'zain.sherwani', 'zain123', 'zain2018@namal.edu.pk');";


// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//  }







// $sql="INSERT INTO teacher
// (teacher_name,phone, dep_id, username, pass, email) VALUES ('Malik Jahan',81118719,51, 'malik.jahan', 'malik123', 'malik2018@namal.edu.pk');

// INSERT INTO  teacher
// (teacher_name,phone, dep_id, username, pass, email) VALUES ('Israr khan', 81118719,54, 'israr khan', 'israr123', 'israr2018@namal.edu.pk');


// INSERT INTO   teacher
// (teacher_name,phone, dep_id, username, pass, email) VALUES ('Arifa awan', 11118719,52, 'arifa.awan', 'arifa123', 'arifa2018@namal.edu.pk');


// INSERT INTO   teacher
// (teacher_name,phone, dep_id, username, pass, email) VALUES ('Junaid Akhtar', 81118719,53, 'junaid.akhtar', 'junaid123', 'junaid2018@namal.edu.pk');


// INSERT INTO   teacher
// (teacher_name,phone, dep_id, username, pass, email) VALUES ('Saad Malik', 811181111,55, 'saad.malik', 'saad123', 'saad2018@namal.edu.pk');


// INSERT INTO   teacher
// (teacher_name,phone, dep_id, username, pass, email) VALUES ('Adil Jahangeer', 81118739,56, 'adil.jahanger', 'adil123', 'Adil2018@namal.edu.pk');";


// if (mysqli_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//  }


// $sql = "INSERT INTO courses 
// (course_name , teacher_id) VALUES ('Data Structures' , 15 );
// INSERT INTO courses 
// (course_name , teacher_id) VALUES ('Calculas' , 16 );
// INSERT INTO courses 
// (course_name , teacher_id) VALUES ('Database System' , 17 );
// INSERT INTO courses 
// (course_name , teacher_id) VALUES ('Analysis Of Algorithm' , 18 );
// INSERT INTO courses 
// (course_name , teacher_id) VALUES ('OOP' , 19 );
// $sql="INSERT INTO courses 
// (course_name , teacher_id) VALUES ('Multivariant Calculas' , 21 );
// INSERT INTO courses 
// (course_name , teacher_id) VALUES ('DSA' , 16 );
// INSERT INTO courses 
// (course_name , teacher_id) VALUES ('Intro To Business' , 18 );";

// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//  }


mysqli_close($conn);

?>