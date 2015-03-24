<!doctype html>
<html> <!-- anything in between html tag goes on the webpage -->

    <head> <!-- contents in this tag includes meta info and the title -->

        <meta charset="utf-8"> <!-- this enables certain keys to be used -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- This means that the browser will (probably) render the width of the page at the width of its own screen. -->

        <title>College Website</title> <!-- this sits in the tab window -->

        <link href="Css/bootstrap.min.css" rel="stylesheet">
        <link href="Css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
        <script src="js/respond.js"></script>
        <!-- we need this in the header to make this site responsive -->

    </head>

    <body>	
        <?php
        if (!isset($username)) {
            $username = '';
        }
        ?>
        <!-- CDN content delivery network -->

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
                        <li><a href="#">Home</a></li>
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

                    <div class="nav navbar-nav navbar-right">
                        <a href="#login" data-toggle="modal" class="btn btn-sm navbar-btn btn-login">Login</a>
                        <a href="#signup" data-toggle="modal" class="btn btn-sm navbar-btn btn-pink">SignUp</a>
                        </li>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="jumbotron" class="img-responsive">
            <div class="container">
                <div class="row">
                    <h1>Welcome to iadt</h1>
                    <p>Postgraduate and undergraduate courses in computing, art, film, engineering, psychology and more. We think about your future</p>
                    <p><button type="button" class="btn btn-lg btn-pink" href="#" role="button">Learn more</button></p>
                </div>
            </div>	
        </div>
        <div class="row2 col-lg-12">
            <div class="container">
                <div class="about col-lg-12">
                    <h1>About</h1>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <img src="images/books.png" alt="" class="img-responsive">
                    <h4>COURSES</h4>
                    <p>With over 50 courses to choose from there will be the right course for you, join over 2,500 students and be a part of something special</p>
                    <p><a href="home.php" class="btn btn-sm btn-green">Read More</a></p>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <img src="images/lect.png" alt="" class="img-responsive">
                    <h4>LECTURERS</h4>
                    <p>With the best selection of highly skilled Lecturers IADT is ready to give you the best educational standards available today </p><p><a href="#" class="btn btn-sm btn-green">Read more</a></p>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <p><img src="images/history.png" alt="" class="img-responsive"></p>
                    <h4>HISTORY</h4>
                    <p>IADT was established on April 1st 1997. It has become one of the most influential and forward thinking colleges in Ireland.</p><p><a href="#" class="btn btn-sm btn-green">Read more</a></p>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <p><img src="images/college.png" alt="" class="img-responsive"></p>
                    <h4>STUDENTS</h4>
                    <p style="font-style: italic;">"I am in my second year here in IADT studying Multimeadia Programming and feels like I am getting the best education.."</p><p><a href="#" class="btn btn-sm btn-green">Read more</a></p>
                </div>
            </div>
        </div>
        <div class="row3 col-lg-12">
            <div class="container">
                <div class="courses col-lg-12">
                    <h1>Courses</h1>
                    <p> We offer over 50 courses spread over four departmants</p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="images/laptop.png" alt="" class="img-responsive">
                    <h4>Computing</h4>
                    <p><a href="#" class="btn btn-sm btn-green">Select</a></p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="images/movie.png" alt="" class="img-responsive">
                    <h4>Film</h4>
                    <p><a href="#" class="btn btn-sm btn-green">Select</a></p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="images/dollar.png" alt="" class="img-responsive">
                    <h4>Business</h4>
                    <p><a href="#" class="btn btn-sm btn-green">Select</a></p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="images/art.png" alt="" class="img-responsive">
                    <h4>Art</h4>
                    <p><a href="#" class="btn btn-sm btn-green">Select</a></p>
                </div>
            </div>
        </div>

        <div class="row6 col-lg-12">
            <div class="container">
                <h1>Campus life</h1>
                <p>Come for the state of the art facilities waiting for you</p>
            </div>
        </div>


        <div class="row4 col-lg-12">
            <div class="container">
                <div class="contact col-lg-push-3 col-lg-6 col-lg-pull-3">
                    <h1>Contact Us</h1>
                    <form class="form-horizontal" role="form"  action="checkLogin.php" method="POST">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"></textarea>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-sm btn-green">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <! Will be used to display an alert to the user>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <footer class="row5 col-lg-12">
            <div class="container">
                <div class="followUs col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><img src="images/facebook.png"></li>
                        <li><img src="images/twitter.png"></li>
                        <li><img src="images/youtube.png"></li>
                    </ul>

                </div>
                <div class="departments col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4> Our departments</h4>
                    <ul>
                        <li><img src="images/dollar.png" alt="" class="img-responsive"></li>
                        <li><img src="images/laptop.png" alt="" class="img-responsive"></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4>More details</h4>
                    <ul>
                        <li><img src="images/location.png">Kill Avenue, Dun Laoghaire</li>
                        <li><img src="images/iphone2.png"> 00 (353) 1 123456</li>
                        <li><img src="images/email.png"> info@iadt.ie</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4>Mailing list</h4>
                    <p>Please enter your email address to subscribe</p>
                    <input type="text" class="form-control" placeholder="Subscibe..">
                </div>
            </div>
        </div>
    </footer>

    <div id="login" class="modal fade" tabindex="-1">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                    <h3 class="modal-title"><img alt="Brand" src="images/icon.png"> Log in with username and password</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="post" action="checkLogin.php">
                        <div class="form-group col-sm-12">
                            <label for="username" class="col-sm-2 col-sm-offset-1 control-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" value="">
                                <span id="usernameError" class="error">
                                    <?php
                                    if (isset($errorMessage) && isset($errorMessage['username'])) {
                                        echo $errorMessage['username'];
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="password" class="col-sm-2 col-sm-offset-1 control-label">Password</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="password" name="password" placeholder="password" value="">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['password'])) {
                                    echo $errorMessage['password'];
                                }
                                ?>
                                <a href="#">I've forgotten my password?</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-sm-2 col-sm-offset-5">
                                <button type="submit" 
                                        class="btn btn-login" 
                                        value="Register" 
                                        name="register">Login</button>
                            </div>

                        </div>
                    </form>
                    <div class ="col-sm-offset-5">
                        <p> or </p>
                    </div>
                    <div class="modal_link col-sm-offset-4">
                        <a href="#"><img src="images/facebookLink.png"></a>
                    </div>
                    <div class="modal_link col-sm-offset-4">
                        <a href="#"><img src="images/twitterLink.png"><a/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="signup" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                    <h3 class="modal-title"><img alt="Brand" src="images/icon.png"> Create a username and password</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="post" action="home.php">
                        <fieldset>
                            <div class="form-group col-sm-12">
                                <label for="name" class="col-sm-2 col-sm-offset-1 control-label">Username</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="username" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="email" class="col-sm-2 col-sm-offset-1 control-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" id="password" name="password" placeholder="password" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="email" class="col-sm-2 col-sm-offset-1 control-label">Confirm Password</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" id="password" name="password" placeholder="password" value="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="col-sm-6">
                                    <button class="btn btn-pink" data-dismiss="modal">Create</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
