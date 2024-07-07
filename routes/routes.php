<?php

// Views 
$router->get("/schoolmanagementsystem/", "controllers/dashboard.php");
$router->get("/schoolmanagementsystem/index.php/students", "controllers/student/studentsTable.php");
$router->get("/schoolmanagementsystem/index.php/teachers", "controllers/teacher/teachersList.php");
$router->get("/schoolmanagementsystem/index.php/students/add", "controllers/student/addStudent.php");

// Student
$router->post("/schoolmanagementsystem/index.php/students/add", "controllers/student/create.php");
