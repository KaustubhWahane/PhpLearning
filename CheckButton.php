<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Example</title>
</head>
<body>
    <form action="" method="post">
        <label>
            <input type="checkbox" name="hobbies[]" value="Sailing">
            Sailing
        </label><br>
        <label>
            <input type="checkbox" name="hobbies[]" value="Fishing">
            Fishing
        </label><br>
        <label>
            <input type="checkbox" name="hobbies[]" value="Swimming">
            Swimming
        </label><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["hobbies"])) {
            $selected_hobbies = $_POST["hobbies"];
            echo "<p>Selected hobbies:</p>";
            echo "<ul>";
            foreach ($selected_hobbies as $hobby) {
                echo "<li>$hobby</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No hobbies selected.</p>";
        }
    }
    ?>
</body>
</html>
