<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Объединение строк в PHP</title>
</head>
<body>
    <?php

        $a = "Привет";
        $b = "мир!";
        $c = $a . $b;
        echo $c;

        $a = "Привет";
        $b = "мир!";
        $c = $a . " " . $b;
        echo $c;

    ?>
</body>
</html>