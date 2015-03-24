<?php
require_once 'Student.php';
require_once 'Connection.php';
require_once 'StudentTableGateway.php';
require_once 'CourseTableGateway.php';

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

$courseGateway = new CourseTableGateway($connection);

$courses = $courseGateway->getCourses();

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
        <script src="js/respond.js"></script>
        <script type="text/javascript" src="js/student.js"></script>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        if (isset($errorMessage)) {
            echo '<p>Error: ' . $errorMessage . '</p>';
        }
        ?>
        <nav class="navbar navbar-default">
            <div class="header container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="images/icon.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="indexDesign.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Courses<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Computing</a></li>
                                <li><a href="#">Film</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Art</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="user nav navbar-nav navbar-right">
                        <ul>
                            <li><img src="images/userSmall.png"> 
                                <?php
                                $username = $_SESSION['username'];
                                echo ' Welcome ' . $username . ''
                                ?> </li>
                            <li><a href="indexDesign.php" class="btn btn-sm btn-pink">Logout</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Dashboard
                        </a>

                    </li>
                    <li>
                        <a href="#"><img src="images/user2.png"> Users</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/done.png"> Tasks</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/calendar.png"> Calendar</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/tools.png"> Tools</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/settings.png"> Settings</a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row2 col-lg-12">
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <a href="viewStudent.php"><img src="images/college.png" alt="" class="img-responsive"></p>
                                <h4>Students</h4></a>

                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <a href="#"><img src="images/lect.png" alt="" class="img-responsive">
                                <h4>Lecturers</h4></a>

                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <a href="#"><img src="images/emailLarge.png" alt="" class="img-responsive"></p>
                                <h4>Email</h4></a>

                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <a href="viewCourses.php"><img src="images/books.png" alt="" class="img-responsive">
                                <h4>Courses</h4></a>
                        </div>
                    </div>
                </div>

                <form class="form-horizontal" id="editStudentForm" name="editStudentForm" action="editStudent.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <table class="table-striped">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="name" value="<?php
                                    if (isset($_POST) && isset($_POST['name'])) {
                                        echo $_POST['name'];
                                    } else
                                        echo $row['name'];
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
                                    } else
                                        echo $row['email'];
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
                                    } else
                                        echo $row['mobile'];
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
                                    } else
                                        echo $row['studentNumber'];
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
                                    } else
                                        echo $row['address'];
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
                                    } else
                                        echo $row['age'];
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
                                <td>Course</td>
                                <td>
                                    <select name="course_id">
                                        <option value="-1">No Course</option>
                                        <?PHP
                                        $s = $courses->fetch(PDO::FETCH_ASSOC);
                                        while ($s) {
                                            $selected ="";
                                            if($s['id']==$student['course_id']){
                                                    $selected ='selected';
                                            }
                                            echo '<option value="' . $s['id'] . '" '.$selected.'>' . $s['name'] . '</option>';
                                            $s = $courses->fetch(PDO::FETCH_ASSOC);
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input id="submit" name="createStudent" type="submit" value="Update Student" class="btn btn-green">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </form>
                <button type="button" class= "btn btn-green"><a href="home.php?id=">
                        Cancel</a></button>
                <a href="#menu-toggle" class="btn btn-green" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
</html>
