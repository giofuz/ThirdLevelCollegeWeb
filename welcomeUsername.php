<?php
$sessionId = session_id();

if ($sessionId == "") {
    session_start();
}

    $username = $_SESSION['username'];
    echo '<p>Welcome ' . $username . '</p>';

    //the code I came up with here was from a little help of Joshua Hayles and looking at the toolbar.php file
    //from both I could fiqure out how to access the database and prin out the users username
?>

