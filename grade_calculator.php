<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <label for="test1">Enter Test 1 Score:</label>
        <input type="number" name="test1" id="test1" required><br>

        <label for="test2">Enter Test 2 Score:</label>
        <input type="number" name="test2" id="test2" required><br>

        <label for="test3">Enter Test 3 Score:</label>
        <input type="number" name="test3" id="test3" required><br>

        <input type="submit" name="calculate" value="Calculate Grade">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $test1 = $_POST['test1'];
        $test2 = $_POST['test2'];
        $test3 = $_POST['test3'];

       
        $average = ($test1 + $test2 + $test3) / 3;

        
        $letter_grade = '';

        if ($average >= 90) {
            $letter_grade = 'A';
        } elseif ($average >= 80) {
            $letter_grade = 'B';
        } elseif ($average >= 70) {
            $letter_grade = 'C';
        } elseif ($average >= 60) {
            $letter_grade = 'D';
        } else {
            $letter_grade = 'F';
        }

        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $letter_grade</p>";
    }
    ?>
</body>

</html>