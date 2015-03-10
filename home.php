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
    	<header class="row">
            <div class="container">
                 <div class="logo col-lg-1 col-md-1 col-sm-1 col-xs-12">
                    <img src="images/college.png"> 
                </div>
                <div class="loginButtons col-lg-3 col-lg-push-9 col-md-3 col-md-push-8 col-sm-3 col-sm-push-8 col-xs-12">
                        <ul>
                            <li><img src="images/userSmall.png"> 
                                <?php
                                    $username = $_SESSION['username'];
                                    echo ' Welcome '. $username. ''
                                ?> </li>
                            <li><a href="#signup" data-toggle="modal" class="btn btn-sm btn-pink">Logout</a></li>
                        </ul>
                     </div>
                    <!--<div class="contact col-lg-4 col-lg-offset-5 col-md-5 col-md-offset-3 col-sm-6 col-xs-12 ">-->
                        <nav class="navbar navbar-default col-lg-5 col-lg-pull-2 col-lg-offset-3 col-md-6 col-md-offset-1 col-md-pull-2 col-sm-7 
                                    col-sm-pull-2 col-xs-12 " role="navigation" >
                            <div class ="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            <div class="collapse navbar-collapse" id="collapse">    
                                <ul class= "nav navbar-nav">
                                    <li><a href="#" >HOME</a></li>
                                    <LI><a href="#" >ABOUT</a></LI>
                                    <li><a href="#" >COURSES</a></li>
                                    <li><a href="#" >CONTACT</a></li>
                                </ul>
                            </div>
                        </nav>
                       
                    </div>
            </header>

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
                    <a href="#">Students</a>
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row2 col-lg-12">
                    <div class="col-lg-2 col-lg-offset-1 col-md-6 col-xs-12">
                        <a href="#"><img src="images/college.png" alt="" class="img-responsive"></p>
                        <h4>Students</h4></a>
                          
                    </div>
                    <div class="col-lg-2 col-md-6 col-xs-12">
                        <a href="#"><img src="images/lect.png" alt="" class="img-responsive">
                        <h4>Lecturers</h4></a>
                        
                    </div>
                    <div class="col-lg-2 col-md-6 col-xs-12">
                        <a href="#"><img src="images/emailLarge.png" alt="" class="img-responsive"></p>
                        <h4>Email</h4></a>
                       
                    </div>
                    <div class="col-lg-2 col-md-6 col-xs-12">
                        <a href="#"><img src="images/books.png" alt="" class="img-responsive">
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
                            . '<a href="viewStudent.php?id='.$row['id'].'"><button class="btn btn-green">View</a></button> '
                            . '<a href="editStudentForm.php?id='.$row['id'].'"><button class="btn btn-green">Edit</a></button> '
                            . '<a class = "deleteStudent" a href="deleteStudent.php?id='.$row['id'].'"><button class="btn btn-green">Delete</a></button>'
                            . '</td>';
                            echo '</tr>';

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                    </tbody>
                </table>
              </div>
                 <button class="btn btn-green">
                     <a href="createStudentForm.php">Create Student</a>
                 </button>
                    <a href="#menu-toggle" class="btn btn-green" id="menu-toggle">Toggle Menu</a> 
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
