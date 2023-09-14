<!DOCTYPE html>
<html>

<head>
    <title>Even-Odd Checker</title>
</head>

<body>
    <h1>Even-Odd Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required><br>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if (isset($_POST['check'])) {
        $number = $_POST['number'];

        
        $result = ($number % 2 == 0) ? "Even" : "Odd";

        echo "<p>The number $number is $result.</p>";
    }
    ?>
</body>

</html>