<?php
require_once 'Student.php';
require_once 'Connection.php';
require_once 'StudentTableGateway.php';

$id = session_id();
if ($id == "") {
    session_start();
}

require 'ensureUserLoggedIn.php';

if (!isset($_GET) || !isset($_GET['id'])) {
    die('Invalid request');
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new StudentTableGateway($connection);

$statement = $gateway->getStudentById($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=Css/style.css>
        <title></title>
    </head>
    <body>
        <div id="container">
            <div class="logo">
                <img src="Images/logo3.jpg">
            </div>
            <div class="headertext">
                <h1>View Student</h1>
            <div class="toolbar">
                <?php require 'toolbar.php' ?>
            </div>
        <?php 
        if (isset($message)) {
            echo '<p>'.$message.'</p>';
        }
        ?>
        <table>
            <tbody>
                <?php
                $row = $statement->fetch(PDO::FETCH_ASSOC);
                    echo '<tr>';
                    echo '<td>Name</td>'
                    . '<td>' . $row['name'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Email</td>'
                    . '<td>' . $row['email'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Mobile</td>'
                    . '<td>' . $row['mobile'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Student Number</td>'
                    . '<td>' . $row['studentNumber'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Address</td>'
                    . '<td>' . $row['address'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Age</td>'
                    . '<td>' . $row['age'] . '</td>';
                    echo '</tr>';
                    echo '<td>Course id</td>'
                    . '<td>' . $row['course_id'] . '</td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>
        <p>
            <button><a href="editStudentForm.php?id=<?php echo $row['id']; ?>">
                    Edit Student</a></button>
            <button><a href="deleteStudent.php?id=<?php echo $row['id']; ?>">
                    Delete Student</a></button>
            <button><a href="home.php?id=">
                    Cancel</a></button>
        </p>
    </body>
</html>