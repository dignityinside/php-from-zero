<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Константы в PHP</title>
</head>
<body>
    <?php

        // обьявляем новую константу
        // "PI" - это имя (названия) константы
        // "3.1415926" - это значение константы
        define("PI",3.1415926);

        // выводим значение константы на экран
        echo PI;

        // проверяем определена ли константа
        // если нет, выводит 0 (false) или 1 (true)
        // defined("PI");

        // данная константа выводит версию PHP
        // echo PHP_VERSION;

    ?>
</body>
</html>