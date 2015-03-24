<?php
require_once 'Student.php';
require_once 'Connection.php';
require_once 'StudentTableGateway.php';

$id = session_id();
if ($id == "") {
    session_start();
}

$connection = Connection::getInstance();
$gateway = new StudentTableGateway($connection);

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
$studentNumber = filter_input(INPUT_POST, 'studentNumber', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
$courseID = filter_input(INPUT_POST, 'course_id', FILTER_SANITIZE_STRING);
    if ($courseId == -1){

        $courseId = NULL;
    }

$errorMessage = array();
if ($name === FALSE || $name === '') {
    $errorMessage['name'] = 'name must not be blank<br/>';
}

if ($email === FALSE || $email === '') {
    $errorMessage['email'] = 'email must not be blank<br/>';     
}

if ($mobile === FALSE || $mobile === '') {
    $errorMessage['mobile'] = 'mobile must not be blank<br/>';
}

if ($studentNumber=== FALSE || $studentNumber === '') {
    $errorMessage['studentNumber'] = 'Student number must not be blank<br/>';
}

if ($address === FALSE || $address === '') {
    $errorMessage['address'] = 'Address must not be blank<br/>';
}

if ($age === FALSE || $age === '') {
    $errorMessage['age'] = 'Age must not be blank<br/>';
}

if ($courseID === FALSE || $courseID === '') {
    $errorMessage['course_id'] = 'Course ID must not be blank<br/>';
}


    if (!isset($_SESSION['students'])) {
        $students = array();
    }
    else {
        $students = $_SESSION['students'];
    }


if (empty($errorMessage)) {
    
 
    /*$student = new Student($name, $email, $mobile, $studentNumber, $address, $age );

    $students[] = $student;

    $_SESSION['students'] = $students;
    $message = "Student added";

    header('Location: home.php');
    
    require 'home.php';*/
    
    $id = $gateway->insertStudent($name, $email, $mobile, $studentNumber, $address, $age, $courseID);

    $message = "Student created successfully";

    header('Location: home.php');

}
else {
    require 'createStudentForm.php';
}




