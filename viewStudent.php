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
        
        <div id="page-content-wrapper">
        <table class="table-striped">
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
        </div>
    </body>
</html>