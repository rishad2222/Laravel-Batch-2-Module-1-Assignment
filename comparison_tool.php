<!DOCTYPE html>
<html>

<head>
    <title>Number Comparison Tool</title>
</head>

<body>
    <h1>Number Comparison Tool</h1>
    <form method="post" action="">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" required><br>

        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" required><br>

        <input type="submit" name="compare" value="Compare">
    </form>

    <?php
    if (isset($_POST['compare'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        $larger_number = ($number1 > $number2) ? $number1 : $number2;

        echo "<p>The larger number is: $larger_number</p>";
    }
    ?>
</body>

</html>