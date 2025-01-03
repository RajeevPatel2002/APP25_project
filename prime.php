<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Prime Number Checker</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        function Prime($num) {
            if ($num <= 1) {
                return false; 
            }
            for ($i=2; $i<=$num/2;$i++) {
                if ($num%$i==0) {
                    return false; 
                }
            }
            return true;
        }
        if (Prime($number)) {
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
    }
    ?>
</body>
</html>
