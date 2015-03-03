<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="js/student.js"></script>
        <link rel="stylesheet" type="text/css" href=Css/style.css>
    </head>
    <body>
       <div id="container">
            <div class="logo">
                <img src="Images/logo3.jpg">
            </div>
            <div class="headertext">
                <h1>Create Student</h1>
            <div class="toolbar">
                <?php require 'toolbar.php' ?>
            </div>
        <form action="createStudent.php" 
              method="POST"
              id ="createStudentForm">
            <table border="0">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" value="" />
                            <span id="nameError" class="error">
                            <?php
                            if (isset($errorMessage)&& isset ($errorMessage['name'])){
                                echo $errorMessage['name'];
                            }
                            ?></span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email" value="" />
                            <span id="emailError" class="error">
                            <?php
                            if (isset($errorMessage)&& isset ($errorMessage['email'])){
                                echo $errorMessage['email'];
                            }
                            ?></span>
                        </td>
                    </tr>
                  
                    <tr>
                        <td>Mobile</td>
                        <td>
                            <input type="text" name="mobile" value="" />
                            <span id="mobileError" class="error">
                            <?php
                            if (isset($errorMessage)&& isset ($errorMessage['mobile'])){
                                echo $errorMessage['mobile'];
                            }
                            ?></span>

                        </td>
                    </tr>
                    
                    <tr>
                        <td>Student Number</td>
                        <td>
                            <input type="text" name="studentNumber" value="" />
                            <span id="studentNumberError" class="error">
                            <?php
                            if (isset($errorMessage)&& isset ($errorMessage['studentNumber'])){
                                echo $errorMessage['studentNumber'];
                            }
                            ?></span>

                        </td>
                    </tr>
                    
                    <tr>
                        <td>Address</td>
                        <td>
                            <input type="text" name="address" value="" />
                            <span id="addressError" class="error">
                            <?php
                            if (isset($errorMessage)&& isset ($errorMessage['address'])){
                                echo $errorMessage['address'];
                            }
                            ?></span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Age</td>
                        <td>
                            <input type="text" name="age" value="" />
                            <span id="ageError" class="error">
                            <?php
                            if (isset($errorMessage)&& isset ($errorMessage['age'])){
                                echo $errorMessage['age'];
                            }
                            ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Course ID</td>
                        <td>
                            <input type="text" name="course_id" value="" />
                            <span id="ageError" class="error">
                            <?php
                            if (isset($errorMessage)&& isset ($errorMessage['course_id'])){
                                echo $errorMessage['course_id'];
                            }
                            ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Create Student" name="createStudent" />
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
                <button><a href="home.php?id=">
                    Cancel</a></button>
        </div>     
    </body>
    
</html>
