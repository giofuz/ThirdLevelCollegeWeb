<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $id = session_id();
        if ($id == "") {
            session_start();
        }   
        
        $_SESSION['username'] = NULL;
        unset($_SESSION['username']);
        
        header("Location: index.php")
        
        ?>
    </body>
</html>
