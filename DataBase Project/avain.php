<?php
session_start();

include("connection.php");

// $sql="ALTER TABLE students 
// ADD CONSTRAINT FK_d_id
// FOREIGN KEY (dep_id) REFERENCES department(dep_id)
// ON DELETE CASCADE";


// $sql ="ALTER TABLE courses
// DROP CONSTRAINT courses_ibfk_1";
// $sql = "ALTER TABLE courses 
// ADD CONSTRAINT FK_teacher_id
// FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id)
// ON DELETE CASCADE";



// $sql= "ALTER TABLE courses
// ADD CONSTRAINT t_id
// FOREIGN KEY(teacher_id) REFERENCES teacher(teacher_id) ON DELETE CASCADE";
// $sql="ALTER TABLE teacher 
// DROP CONSTRAINT teacher_ibfk_1";
// $sql="ALTER TABLE teacher
// ADD CONSTRAINT FK_depid
// FOREIGN KEY(dep_id) REFERENCES department(dep_id)
// ON DELETE CASCADE";

// $sql="CREATE TABLE Course_allocation(
//     enroll_id INT(6) NOT NULL PRIMARY KEY,
//     student_id int(6) NOT NULL,
//     teacher_id int(6) NOT NULL,
//     course_id int(6) NOT NULL,
//     FOREIGN KEY(student_id) REFERENCES students(student_id),
//     FOREIGN KEY(teacher_id) REFERENCES teacher(teacher_id),
//     FOREIGN KEY(course_id) REFERENCES courses(course_id),
// )";
 

// $sql = "ALTER TABLE course_alloc ADD FOREIGN KEY(student_id) REFERENCES students(student_id)";

// $sql="CREATE TABLE course_alloc(
//     alloc_id INT(6) NOT NULL PRIMARY KEY,
//     student_id INT(6),
//     CONSTRAINT fk_s_id FOREIGN KEY(student_id) REFERENCES students(student_id) ON DELETE CASCADE,
//     teacher_id INT(6),
//    	CONSTRAINT fk_t_id FOREIGN KEY(teacher_id) REFERENCES teacher(teacher_id) ON DELETE CASCADE,
//     course_id INT(6),
//    	CONSTRAINT fk_c_id FOREIGN KEY(course_id) REFERENCES courses(course_id) ON DELETE CASCADE
// )";
if(mysqli_query($conn,$sql1)){
    echo "Done ";

}
else{
    echo "dobara kr";
}





?>