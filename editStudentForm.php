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
if ($statement->rowCount() !== 1) {
    die("Illegal request");
}
$row = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=Css/style.css>
        <title></title>
        <script type="text/javascript" src="js/student.js"></script>
    </head>
    <body>
        <div id="container">
            <div class="logo">
                <img src="Images/logo3.jpg">
            </div>
            <div class="headertext">
                <h1>Edit Student</h1>
            <div class="toolbar">
                <?php require 'toolbar.php' ?>
            </div>
        <?php
        if (isset($errorMessage)) {
            echo '<p>Error: ' . $errorMessage . '</p>';
        }
        ?>
        <form id="editStudentForm" name="editStudentForm" action="editStudent.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <table border="0">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" value="<?php
                                if (isset($_POST) && isset($_POST['name'])) {
                                    echo $_POST['name'];
                                }
                                else echo $row['name'];
                            ?>" />
                            <span id="emailError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['name'])) {
                                    echo $errorMessage['name'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email" value="<?php
                                if (isset($_POST) && isset($_POST['email'])) {
                                    echo $_POST['email'];
                                }
                                else echo $row['email'];
                            ?>" />
                            <span id="emailError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['email'])) {
                                    echo $errorMessage['email'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td>
                            <input type="text" name="mobile" value="<?php
                                if (isset($_POST) && isset($_POST['mobile'])) {
                                    echo $_POST['mobile'];
                                }
                                else echo $row['mobile'];
                            ?>" />
                            <span id="mobileError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['mobile'])) {
                                    echo $errorMessage['mobile'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Student Number</td>
                        <td>
                            <input type="text" name="studentNumber" value="<?php
                                if (isset($_POST) && isset($_POST['studentNumber'])) {
                                    echo $_POST['studentNumber'];
                                }
                                else echo $row['studentNumber'];
                            ?>" />
                            <span id="studentNumberError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['studentNumber'])) {
                                    echo $errorMessage['studentNumber'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <input type="text" name="address" value="<?php
                                if (isset($_POST) && isset($_POST['address'])) {
                                    echo $_POST['address'];
                                }
                                else echo $row['address'];
                            ?>" />
                            <span id="addressError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['address'])) {
                                    echo $errorMessage['address'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>
                            <input type="text" name="age" value="<?php
                                if (isset($_POST) && isset($_POST['age'])) {
                                    echo $_POST['age'];
                                }
                                else echo $row['age'];
                            ?>" />
                            <span id="ageError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['age'])) {
                                    echo $errorMessage['age'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Course ID</td>
                        <td>
                            <input type="text" name="course_id" value="<?php
                                if (isset($_POST) && isset($_POST['course_id'])) {
                                    echo $_POST['course_id'];
                                }
                                else echo $row['course_id'];
                            ?>" />
                            <span id="ageError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['course_id'])) {
                                    echo $errorMessage['course_id'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Update Student" name="updateStudent" />
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
                <button><a href="home.php?id=">
                    Cancel</a></button>
    </body>
</html>
