<?php

// Views 
$router->get("/schoolmanagementsystem/", "controllers/dashboard.php");
$router->get("/schoolmanagementsystem/index.php/students", "controllers/studentsTable.php");
$router->get("/schoolmanagementsystem/index.php/teachers", "controllers/teachersList.php");
$router->get("/schoolmanagementsystem/index.php/students/add", "controllers/addStudent.php");
