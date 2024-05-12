<?php
//  $name = "Kaustubh";
//  $age = 60;
//  echo"Hello $name";
//  echo "\$ $age";
//  echo $_GET["username"] ;
//  OR
//  echo "{$_GET["password"]} <br>";

// Includes all the other files

include ("CheckButton.php");

$item = "Shwarma";
$price = 70;
$quantity = (int)$_POST["quantity"]; 
$total = $quantity * $price;

echo "You have got {$quantity} x {$item}";
echo "Your total is {$total}";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <h1>Hello there lads</h1>
    <!--
        Form for Login 
        <form action="index.php" method="get">
        <label for="">Username</label>
        <input type="text" name="username"> <br>
        <label for="">Password</label>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form> 
-->
    <form action="index.php" method="post">
        <label for="">Put your quantity for Items</label>
        <input type="text" name = "quantity">
        <input type="submit" value ="Done">
    </form>
</body>
</html>