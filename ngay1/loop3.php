<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .square {
            width: 50px;
            height: 50px;
            background-color: greenyellow;
            margin: 10px;
            display: inline-block;
        }
        .square1 {
            width: 50px;
            height: 50px;
            background-color: red;
            margin: 10px;
            display: inline-block;
        }
    </style>
<body>
    <?php
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < 5; $j++){
            if($j % 2 == 0){
                echo '<div class="square1"></div>';
            }
            echo '<div class="square"></div>';
        }
        echo "<br>";
    }   
    ?>
</body>
</html>