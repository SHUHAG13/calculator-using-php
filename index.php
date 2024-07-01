<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin-top: 50px;
        }
        .calculator {
            width: 300px;
            margin: 0 auto;
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            font-size: 18px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="num1" placeholder="Enter first number" required><br>
            <input type="text" name="num2" placeholder="Enter second number" required><br>
            <input type="submit" name="add" value="Add">
            <input type="submit" name="subtract" value="Subtract">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            if (isset($_POST['add'])) {
                $result = $num1 + $num2;
                echo "<h3>Result: $result</h3>";
            }
            
            if (isset($_POST['subtract'])) {
                $result = $num1 - $num2;
                echo "<h3>Result: $result</h3>";
            }
            
            if (isset($_POST['multiply'])) {
                $result = $num1 * $num2;
                echo "<h3>Result: $result</h3>";
            }
            
            if (isset($_POST['divide'])) {
                if ($num2 == 0) {
                    echo "<h3>Error: Division by zero</h3>";
                } else {
                    $result = $num1 / $num2;
                    echo "<h3>Result: $result</h3>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
