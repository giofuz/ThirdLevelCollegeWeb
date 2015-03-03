<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href=Css/style.css> <!--this is the link to my stylesheet-->
        <meta charset="UTF-8">
        <title></title>
      
    </head>
    <body>
        <div id="container"><img src="Images/logo1.jpg"><h1>Create username & Password</h1>
        <form id="registerForm" 
              action="checkRegister.php" 
              method="POST" 
              onsubmit="return validateRegistration(this);">
            
            <table border="0">
                <tbody>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="username" value="<?php     //the php inside the value attribute lets the user keep the text they have written if the other fields are incorrect
                                if (isset ($_POST) && isset ($_POST['username'])){
                                    echo $_POST['username'];
                                } 
                            ?>" />
                            
                            <span id="usernameError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['username'])) {
                                    echo $errorMessage['username'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" value="<?php 
                                if (isset ($_POST) && isset ($_POST['password'])){
                                    echo $_POST['password'];
                                } 
                            ?>" />
                            <span id="passwordError" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['password'])) {
                                    echo $errorMessage['password'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>
                            <input type="password" name="password2" value="<?php 
                                if (isset ($_POST) && isset ($_POST['password2'])){
                                    echo $_POST['password2'];
                                } 
                            ?>" />
                            <span id="password2Error" class="error">
                                <?php
                                if (isset($errorMessage) && isset($errorMessage['password2'])) {
                                    echo $errorMessage['password2'];
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Register" name="register" />
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
        <script type="text/javascript" src="js/register.js"></script>
        </div>
    </body>
</html>
