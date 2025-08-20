<?php
// Initialize result variable
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Perform the selected operation
    if ($operation == "Add") {
        $result = $num1 + $num2;
    } elseif ($operation == "Subtract") {
        $result = $num1 - $num2;
    } elseif ($operation == "Multiply") {
        $result = $num1 * $num2;
    } elseif ($operation == "Divide") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Cannot divide by zero!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h2>Calculator</h2>
        <form method="POST">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation" required>
                <option value="Add">Add (+)</option>
                <option value="Subtract">Subtract (-)</option>
                <option value="Multiply">Multiply (×)</option>
                <option value="Divide">Divide (÷)</option>
            </select><br><br>
            <button type="submit" class="btn">Calculate</button><br>
            <p>Result: <?php echo $result; ?></p>
        </form>
    </div>
</body>
</html>
