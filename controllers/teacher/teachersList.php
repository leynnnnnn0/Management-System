<?php
$heading = "Teachers";

$config = require_once('Database/config.php');

$db = new Database($config['database']);

$stmt = $db->query("SELECT * FROM teachers;");
$teachers = $stmt->fetchAll();

require 'views/teacher/teachersList.view.php';
