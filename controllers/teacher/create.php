<?php

$fullName = $_POST['fullName'];
$emailAddress = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$dateOfBirth = $_POST['dateOfBirth'];
$subject = $_POST['subject'];

$config = require_once('Database/config.php');
$validate = new Validator();
$db = new Database($config['database']);

if (!empty($validate->errors)) {
    $_SESSION['errors'] = $validate->errors;
    $heading = "Add New Student";
    return require('views/teacher/addTeacher.view.php');
}

$result = $db->query("INSERT INTO teachers (fullName, email, phoneNumber, address, dateOfBirth, subject) VALUES (:fullName, :email, :phoneNumber, :address, :dateOfBirth, :subject)", [
    ":fullName" => $fullName,
    ":email" => $emailAddress,
    ":phoneNumber" => $phoneNumber,
    ":address" => $address,
    ":dateOfBirth" => $dateOfBirth,
    ":subject" => $subject
]);

header('location: /schoolmanagementsystem/index.php/teachers');
