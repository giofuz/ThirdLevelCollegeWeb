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
    	<header class="row">
            <div class="container">
                 <div class="logo col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <img src="images/college.png"> 
                </div>
                <div class="loginButtons col-lg-2 col-lg-push-9 col-md-3 col-md-push-8 col-sm-3 col-sm-push-8 col-xs-12">
                        <ul>
                        	<li><a href="#login" data-toggle="modal" class="btn btn-sm btn-login">Login</a></li>
                        	<li><a href="#signup" data-toggle="modal" class="btn btn-sm btn-pink">SignUp</a></li>
                        </ul>
                     </div>
                    <!--<div class="contact col-lg-4 col-lg-offset-5 col-md-5 col-md-offset-3 col-sm-6 col-xs-12 ">-->
                    	<nav class="navbar navbar-default col-lg-5 col-lg-pull-2 col-lg-offset-4 col-md-6 col-md-offset-1 col-md-pull-2 col-sm-7 
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
    		<div class="jumbotron col-lg-12" class="img-responsive">
    			<div class="container">
	    			<div class="col-lg-12">
		 			 	<h1>Welcome to iadt</h1>
		  				<p>JOIN THE THOUSANDS OF PEOPLE THAT ARE LEARNING FROM 
		  					THE BEST ONLINE COLLEGE IN THE WORLD. WHAT ARE YOU WAITING FOR?</p>
		  					<p><a class="btn btn-pink btn-lg" href="#" role="button">Learn more</a></p>
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
			              <p>With over 50 courses to choose from there will be the right course for you, Come join over 2,500 students and be a part of something special</p>
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
				            <img src="images/beaker.png" alt="" class="img-responsive">
				            <h4>Science</h4>
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
							</ul>
							<ul>
				            	<li><img src="images/instagram.png"></li>
								<li><img src="images/linkedin.png"></li>
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
				            		<li><img src="images/location.png">40 Amien Street</li>
				            		<li><img src="images/iphone2.png"> 00 (353) 1 123456</li>
				            		<li><img src="images/email.png"> info@ilearn.ie</li>
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
	                        <h3 class="modal-title">Log in with username and password</h3>
	                    </div>
		                    <div class="modal-body">
			                    <form class="form-horizontal" role="form" method="post" action="index.php">
		                        	<div class="form-group col-sm-12">
                                                    <label for="name" class="col-sm-2 control-label">Username</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="username" value="<?php echo $username; ?>">
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
                                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="password" name="password" placeholder="password" value="">
                                                        <span id="passwordError" class="error">
                                                            <?php
                                                                if (isset($errorMessage) && isset($errorMessage['password'])) {
                                                                    echo $errorMessage['password'];
                                                                }
                                                            ?>
                                                        </span>
                                                    </div>
                                                  </div>
			                    	<div class="modal-footer">
                                                    <div class="col-sm-6">
                                                         <input type="submit" value="Login" name="login" />
                                                            <input type="button"
                                                                   value="Register"
                                                                   name="register"
                                                                   onclick="document.location.href = 'register.php'"
                                                                   />
                                                            <input type="button" value="Forgot Passward" name="forgot" />   
                                                    </div>
			                    	</div>
                                            </form>
			                </div>
				      </div>
			        </div>
                            </div>

	    		<div id="signup" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                                        <h3 class="modal-title">Create a username and password</h3>
                                    </div>
                                        <div class="modal-body">
                                                <form class="form-horizontal" role="form" method="post" action="home.php">
                                                    <fieldset>
                                                        <div class="form-group col-sm-12">
                                                                            <label for="name" class="col-sm-2 control-label">Username</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="name" name="name" placeholder="username" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12">
                                                                            <label for="email" class="col-sm-2 control-label">Password</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="email" class="form-control" id="password" name="password" placeholder="password" value="">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group col-sm-12">
                                                                            <label for="email" class="col-sm-2 control-label">Confirm Password</label>
                                                                            <div class="col-sm-8">
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
