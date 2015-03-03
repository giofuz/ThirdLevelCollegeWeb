<?php
require_once 'Student.php';
require_once 'Connection.php';
require_once 'StudentTableGateway.php';

$id = session_id();
if ($id == "") {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$connection = Connection::getInstance();
$gateway = new StudentTableGateway($connection);

$statement = $gateway->getStudents();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href=Css/style.css>
        <script type="text/javascript" src="js/student.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="container">
            <div class="logo">
                <img src="Images/logo3.jpg">
            </div>
            <?php
                require 'welcomeUsername.php'
                ?>
            <a href="viewCourses.php">Courses</a>
            <div class="toolbar">
                <?php require 'toolbar.php' ?>
            </div>
            <div class="headertext">
                <h1>Students Registered</h1>
        <?php 
        if (isset($message)) {
            echo '<p>'.$message.'</p>';
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Student Number</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Course ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $row = $statement->fetch(PDO::FETCH_ASSOC);
                while ($row) {

                    
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['mobile'] . '</td>';
                    echo '<td>' . $row['studentNumber'] . '</td>';
                    echo '<td>' . $row['address'] . '</td>';
                    echo '<td>' . $row['age'] . '</td>';
                    echo '<td>' . $row['course_id'] . '</td>';
                    echo '<td>'
                    . '<a href="viewStudent.php?id='.$row['id'].'">View</a> '
                    . '<a href="editStudentForm.php?id='.$row['id'].'">Edit</a> '
                    . '<a class = "deleteStudent" a href="deleteStudent.php?id='.$row['id'].'">Delete</a> '
                    . '</td>';
                    echo '</tr>';
                    
                    $row = $statement->fetch(PDO::FETCH_ASSOC);
                }
                ?>
            </tbody>
        </table>
        <button><a href="createStudentForm.php">Create Student</a></button>
        </div> 
    </body>
</html>
