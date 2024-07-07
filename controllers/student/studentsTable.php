<?php
$heading = "Students";
$config = require_once('Database/config.php');
$db = new Database($config['database']);

$stmt = $db->query("SELECT * FROM students");
$students = $stmt->fetchAll();

require 'views/student/studentsTable.view.php';
