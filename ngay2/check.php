<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function checkEvenOdd() {
        $number = $_POST['number'];
        if ($number % 2 == 0) {
            return "Số $number là số chẵn.";
        } else {
            return "Số $number là số lẻ.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>" . checkEvenOdd() . "</h3>";
    } else {
        echo "<h3>Vui lòng nhập một số!</h3>";
    }
?>
</body>
</html>