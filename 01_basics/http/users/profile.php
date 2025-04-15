<?php
    session_start()
?>

<h1>Welcome, <?php
    echo $_SESSION['name']
    ?></h1>
<a href="logout.php">Log out</a>
