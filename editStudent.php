<?php
require_once 'Student.php';
require_once 'Connection.php';
require_once 'StudentTableGateway.php';

$id = session_id();
if ($id == "") {
    session_start();
}

require 'ensureUserLoggedIn.php';

$connection = Connection::getInstance();
$gateway = new StudentTableGateway($connection);

$id = $_POST['id'];
$name = $_POST['name'];

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);

//$email = $_POST['email'];
$mobile = $_POST['mobile'];
$studentNumber = $_POST['studentNumber'];
$address= $_POST['address'];
$age = $_POST['age'];
$course_id = $_POST['course_id'];

$gateway->updateStudent($id, $name, $email, $mobile, $studentNumber, $address, $age, $course_id);

header('Location: home.php');



