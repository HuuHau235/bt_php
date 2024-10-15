<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sum = 0;
    $sumc = 0;
    $suml = 0;
    for($i = 0; $i < 10; $i++){
        echo $sum += $i;
        if ( $i % 2 == 0) {
            $sumc += $i;
        } else {
            $suml += $i;
        }
    }
    echo $sum;
    echo $sumc;
    echo $suml;
    ?>
</body>
</html>