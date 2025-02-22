<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Study';?></title>
</head>
<body>
    <?php
        echo 'Hello World!';
    ?>
    <br>
    <?php
        echo 5+3+2;
        echo 2+2+2;
    ?>
    <br>
    <?php
        echo 'Main <br>';
        // Include - попередження
        include 'second.php';
        // Require - не буде працювати 
        require 'second.php';
        echo 'Main <br>'; 
    ?>

    <?php 
        // Змінні
        // Не може починатися на число і може мати "_"
        // Задаємо змінну знаком "$"
        // Чутливі до регістру А != а
        $a_a = 5;
        $b_b = 3;
        $a = $b = $c = 4;

        $A = 1;
        $B = 1.1;
        $C = true;
        $D = 'abcd 434 4.2 true';
        $E;

        echo $a_a + $b_b;
        echo $a + $b * $c;
    ?>
</body>
</html>