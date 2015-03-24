<?php
require_once 'Student.php';
require_once 'Connection.php';
require_once 'StudentTableGateway.php';
require_once 'CourseTableGateway.php';

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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
        <script src="js/respond.js"></script>
        <script type="text/javascript" src="js/student.js"></script>
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
                        <li><a href="indexDesign.php">Home</a></li>
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
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Student Number</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>Course Name</th>
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
                                echo '<td>' . $row['CourseName'] . '</td>';
                                echo '<td>'
                                . '<a href="viewStudent.php?id=' . $row['id'] . '"><button class="btn btn-green">View</a></button> '
                                . '<a href="editStudentForm.php?id=' . $row['id'] . '"><button class="btn btn-green">Edit</a></button> '
                                . '<a class = "deleteStudent" a href="deleteStudent.php?id=' . $row['id'] . '"><button class="btn btn-green">Delete</a></button>'
                                . '</td>';
                                echo '</tr>';

                                $row = $statement->fetch(PDO::FETCH_ASSOC);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="row col-lg-12">
                    <p>
                        <button class="btn btn-green">
                            <a href="createStudentForm.php">Create Student</a>
                        </button>
                    </p>
                    <p>
                        <a href="#menu-toggle" class="btn btn-green" id="menu-toggle">Toggle Menu</a> 
                    </p>
                </div>
            </div>     
        </div> <!-- /#page-content-wrapper -->
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
