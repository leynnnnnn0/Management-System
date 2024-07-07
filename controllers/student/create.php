<?php

$fullName = $_POST['fullName'];
$emailAddress = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$dateOfBirth = $_POST['dateOfBirth'];

$config = require_once('Database/config.php');

$db = new Database($config['database']);
$validate = new Validator();
$validate->user_inputs($array = [
    'email' => $emailAddress,
    'phoneNumber' => $phoneNumber,
    'dateOfBirth' => $dateOfBirth,
    'address' => $address
]);

if (!empty($validate->errors)) {
    $_SESSION['errors'] = $validate->errors;
    $heading = "Add New Student";
    return require('views/student/addStudent.view.php');
}

$result = $db->query("INSERT INTO students (fullName, emailAddress, phoneNumber, address, dateOfBirth) VALUES (:fullName, :emailAddress, :phoneNumber, :address, :dateOfBirth)", [
    ":fullName" => $fullName,
    ":emailAddress" => $emailAddress,
    ":phoneNumber" => $phoneNumber,
    ":address" => $address,
    ":dateOfBirth" => $dateOfBirth
]);

header('location: /schoolmanagementsystem/index.php/students');
