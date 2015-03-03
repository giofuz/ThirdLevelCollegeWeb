<?php
require_once 'Connection.php';
require_once 'CourseTableGateway.php';

require 'ensureUserLoggedIn.php';

$connection = Connection::getInstance();
$courseGateway = new CourseTableGateway($connection);

$courses = $CourseGateway->getCourses();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/programmer.js"></script>
        <title></title>
    </head>
    <body>
        <?php require 'toolbar.php' ?>
        <?php require 'header.php' ?>
        <?php require 'mainMenu.php' ?>
        <h2>View Courses</h2>
        <?php
        if (isset($message)) {
            echo '<p>'.$message.'</p>';
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Course Code</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $row = $courses->fetch(PDO::FETCH_ASSOC);
                while ($row) {


                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['department'] . '</td>';
                    echo '<td>' . $row['course_id'] . '</td>';
                    echo '<td>'
                   // . '<a href="viewLecturer.php?id='.$row['id'].'">View</a> '
                   // . '<a href="editManagerForm.php?id='.$row['id'].'">Edit</a> '
                   // . '<a class="deleteManager" href="deleteManager.php?id='.$row['id'].'">Delete</a> '
                    . '</td>';
                    echo '</tr>';

                    $row = $courses->fetch(PDO::FETCH_ASSOC);
                }
                ?>
            </tbody>
        </table>
        <!--<p><a href="createManagerForm.php">Create Manager</a></p>-->
        <?php require 'footer.php'; ?>
    </body>
</html>
