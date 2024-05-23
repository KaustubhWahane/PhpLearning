<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

echo "<h2>Welcome, {$_SESSION['username']}!</h2>";

echo "<a href='logout.php'>Logout</a>";
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();
