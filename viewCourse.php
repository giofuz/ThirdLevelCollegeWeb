<?php
require_once 'Connection.php';
require_once 'CourseTableGateway.php';

$sessionId = session_id();
if ($sessionId == "") {
    session_start();
}

require 'ensureUserLoggedIn.php';

if (!isset($_GET) || !isset($_GET['id'])) {
    die('Invalid request');
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new CourseTableGateway($connection);

$courses = $coursesGateway->getCourseById($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
        <script src="js/respond.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <!-- Found this code on gitHub, its a template for a sidebar in a page  
https://github.com/IronSummitMedia/startbootstrap-simple-sidebar -->

        <!-- row 1 -->
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
                            <li><a href="indexDesign.php" data-toggle="modal" class="btn btn-sm btn-pink">Logout</a></li>
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
                        <a href="#">Courses</a>
                    </li>
                    <li>
                        <a href="#">Courses</a>
                    </li>
                    <li>
                        <a href="#">Lecturers</a>
                    </li>
                    <li>
                        <a href="#">Mail</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <div class="container-fluid">  
                    <div class="row2 col-lg-12">
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <a href="#"><img src="images/college.png" alt="" class="img-responsive"></p>
                                <h4>Courses</h4></a>

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
                            <a href="#"><img src="images/books.png" alt="" class="img-responsive">
                                <h4>Courses</h4></a>
                        </div>
                    </div>
                </div>   
                <table class="table-striped">
                    <table class="table table-striped">
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
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['department'] . '</td>';
                            echo '<td>' . $row['course_code'] . '</td>';
                            echo '<td>'
                            . '<a href="viewCourse.php?id=' . $row['id'] . '"><button class="btn btn-green">View</a></button> '
                            . '<a href="editCourseForm.php?id=' . $row['id'] . '"><button class="btn btn-green">Edit</a></button> '
                            . '<a class = "deleteCourse" a href="deleteCourse.php?id=' . $row['id'] . '"><button class="btn btn-green">Delete</a></button>'
                            . '</td>';
                            echo '</tr>';

                            $row = $courses->fetch(PDO::FETCH_ASSOC);
                            ?>
                        </tbody>
                    </table>
                    <div class="row col-lg-12">    
                        <p>
                            <button class="btn btn-green"><a href="home.php?id=">
                                    Cancel</a></button>
                        </p>
                        <p>
                            <a href="#menu-toggle" class="btn btn-green" id="menu-toggle">Toggle Menu</a> 
                        </p>
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