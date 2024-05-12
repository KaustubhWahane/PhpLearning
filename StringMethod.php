<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Methods Example</title>
</head>
<body>
    <?php
    $str = "Hello, World!";

    echo "<p>Original String: $str</p>";

    echo "<p>Length of String: " . strlen($str) . "</p>";

    echo "<p>Lowercase: " . strtolower($str) . "</p>";

    echo "<p>Uppercase: " . strtoupper($str) . "</p>";

    echo "<p>First Character Uppercase: " . ucfirst($str) . "</p>";

    echo "<p>First Character of Each Word Uppercase: " . ucwords($str) . "</p>";

    echo "<p>Reversed String: " . strrev($str) . "</p>";

    echo "<p>Substring: " . substr($str, 7, 5) . "</p>";

    echo "<p>Position of 'World': " . strpos($str, "World") . "</p>";

    echo "<p>String After Replacement: " . str_replace("World", "PHP", $str) . "</p>";
    ?>
</body>
</html>
