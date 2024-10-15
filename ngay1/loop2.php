<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 0;
    $chan = 0;
    $le = 0;
    while($i < 10){
        if($i % 2 == 0){
            $chan += $i;
        }else{
            $le += $i;
        }
        $i++;
    }
    echo "Chẵn là: ". $chan . "<br>";
    echo "Lẻ Là: ". $le;
    ?>
</body>
</html>