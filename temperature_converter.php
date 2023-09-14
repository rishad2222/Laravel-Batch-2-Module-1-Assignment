<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
</head>

<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" name="temperature" id="temperature" required>

        <label for="conversion">Select Conversion:</label>
        <select name="conversion" id="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>

        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $temperature = $_POST['temperature'];
        $conversion_type = $_POST['conversion'];
        $result = '';

        if ($conversion_type === 'celsius_to_fahrenheit') {
            $result = ($temperature * 9 / 5) + 32;
        } elseif ($conversion_type === 'fahrenheit_to_celsius') {
            $result = ($temperature - 32) * 5 / 9;
        }

        echo "<p>Result: $result</p>";
    }
    ?>
</body>

</html>