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
    if(mt_rand(0,1)){
        ?>
        <div style="color: red">Red</div>
        <?php
    } else {
        ?>
        <div style="color: blue">Blue</div>
        <?php
    }
    ?>
</body>
</html>