<!DOCTYPE html>
<html>
<head>
    <title>Type Casting Example</title>
</head>
<body>
    <h1>Type Casting Example</h1>
    <form method="post" action="">
        <label for="inputValue">Enter a Value:</label>
        <input type="text" name="inputValue" id="inputValue" required>
        <select name="targetType">
            <option value="int">Integer</option>
            <option value="float">Float</option>
            <option value="string">String</option>
            <option value="bool">Boolean</option>
        </select>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputValue = $_POST["inputValue"];
        $targetType = $_POST["targetType"];

        $convertedValue = null;

        switch ($targetType) {
            case "int":
                $convertedValue = (int) $inputValue;
                break;
            case "float":
                $convertedValue = (float) $inputValue;
                break;
            case "string":
                $convertedValue = (string) $inputValue;
                break;
            case "bool":
                $convertedValue = (bool) $inputValue;
                break;
        }

        echo "<p>Converted value: " . var_export($convertedValue, true) . "</p>";
    }
    ?>
</body>
</html>
