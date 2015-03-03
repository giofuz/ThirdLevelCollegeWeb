
<?php
$sessionId = session_id();
if ($sessionId == "") {
    session_start();
}

if(isset($_SESSION['username'])){
    echo '<p><a href="logout.php">Logout</a></p>';  
}
else {
    echo '<p><a href="index.php">Login</a></p>';
}

?>
        