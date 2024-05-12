<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=w, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method ="post">
        <input type="radio" name="creditCard" value="Visa">
        Visa <br>
        <input type="radio" name="creditCard" value="Rupay">
        Rupay <br>
        <input type="radio" name="creditCard" value="MasterCard">    
        MasterCard <br>
        <input type="submit" value="Confirm">
    </form>
    
</body>
</html>

<?php
if(isset($_POST["Confirm"])){
    $credit = $_POST["creditCard"];
    echo $credit;
}