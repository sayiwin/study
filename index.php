<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Study';?></title>
</head>
<body>
    <?php
        // Вивід інфо

        echo 'Hello World!';
    ?>
    <br>
    <br>
    <?php
        // Математичні операції у виводі

        echo 5+3+2;
        echo 2+2+2;
    ?>
    <br>
    <br>
    <?php
        // Додавання частин коду інших файлів include require

        echo 'Main <br>';
        // Include - попередження
        include 'second.php';
        // Require - не буде працювати 
        require 'second.php';
        echo 'Main'; 
    ?>
    <br>
    <br>
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
    <br>
    <br>
    <?php
        // Цілі числа

        $num1 = 1234;
        // Мінусове значення
        $num2 = -1234;
        // 8-тична система рахування
        $num3 = 01234;
        $num31 = 023;
        // 16-тична система рахування
        $num4 = 0x1234A;

        // Результат завжди буде в 10-тичній системі
        echo $num3 + $num31;
    ?>
    <br>
    <br>
    <?php
        // Десяткові числа

        // Десяткове число через "."
        $numd1 = 1.23;
        // Числа через е (*10/-10)
        $numd2 = 1.42e-4;
        echo $numd2
    ?>
    <br>
    <br>
    <?php
        // Логічні данні

        // Не важливо чи великі чи малі букви в значенях
        $bool1 = true;
        $bool2 = false;
        echo $bool1;
        echo $bool2;
    ?>
    <br>
    <br>
    <?php
        // Строкові дані
        // Лапки є 3 видів "" '' ``
        // Обовязково в лапках

        $str1 = "Hello more '1324' true $num1"; // Вивод змінної в строковому типу
        $str2 = "Hello more '1324' true \$num1"; // Екранізувати знак завдяки "\"
        $str3 = "Hello more '1324' true \"$num1\""; // Вивід змінної + екранізація лапків завдяки "\"
        $str4 = "Hello more '1324' true {$num1}5"; // Вивід зміної прямо в тексі без пробілів
        $str5 = `dir`; // Вивід команд ОС звдяки ``
        echo $str4;
    ?>
    <?php
        // Базові функції

        // isset() - Перевірка чи існує змінна і чи вона має значення результат: True or False
        // empty() - Перевірка чи є якийсь текст в строці, якщо текст пустий - повертає True, якщо текст існує - False
        // gettype() - Перевірка який тип данних має аргумент, повертає назву типа данних: integer, double, string, boolean
        // is_ - Перевірка чи аргумент має певний, конкретний тип данних повертає: True or False
        // is_int(1) - Повертає True(1)
    ?>
    <br>
    <br>
    <?php
        // Операції з різними типами данних

        // Віднміати від тексат число не можна, від числа число можна: "абс"-3(не працює) "12"-3(працює)
        $strr = "10.4";
        $numm = $strr - 5;
        echo $numm;

        $numt = 123; // Будем мати True
        $numf = 0; // Будем мати False
        $strt = "123"; // Будем мати True 
        $strf = "0"; // Будем мати False

        // True = 1
        // False = 0
    ?>
    <br>
    <br>
    <?php 
        // Перевод з одного типу данних в інший

        $old = 3.9;
        $new_int = (int)$old;
        $new_float = (float)$old;
        $new_str = (string)$old;
        $new_bool = (bool)$old;
        echo $new_bool;
    ?>
    <br>
    <br>
    <?php 
        // Заокурглення числа завдяки функції round() ceil()

        // round() 1 аргмуент: число/змінна. 2 аргумент: до якого числа заокруглювати. 3 аргумент: константа функції
        $roundnum = 2.543434;
        echo round($roundnum, 2);

        // ceil() 1 аргумент: число/змінна. Завжди заокруглює до більшого 3.1 = 4
        $ceilnum = 2.4242;
        echo ceil($ceilnum);

        // floor() 1 аргумент: число/змінна. Завжди заокруглює до меншого 3.9 = 3
        $floornum = 2.4242;
        echo floor($floornum);
    ?>
    <?php
        // Перевод з одніє системи рахування в іншу

        // decbin() - з 10 в 2
        // decoct() - з 10 в 8
        // dechex() - з 10 в 16
        // bindec() - з 2 в 10
    ?>
    <br>
    <br>
</body>
</html>