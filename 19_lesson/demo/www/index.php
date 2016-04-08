<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Функции в PHP</title>
</head>
<body>
<?php

    // создаём новую функцию
    function sum($a = 0, $b = 0) {

        $sum = $a + $b;

        return $sum;

    }

    // используем функцию
    echo sum(5,2);

?>
</body>
</html>