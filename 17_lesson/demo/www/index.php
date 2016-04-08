<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Оператор Switch в PHP</title>
</head>
<body>
<?php

    /*
    $a = 26;

    if ($a == 16) {
        echo "Вам 16 лет.";
    } elseif($a == 18) {
        echo "Вам 18 лет.";
    } else {
        echo "Вам $a лет.";
    }
    */

    $a = 26;

    switch ($a) {
        case 16:
            echo "Вам 16 лет";
            break;
        case 18:
            echo "Вам 18 лет";
            break;
        case 21:
            echo "Вам 21 год.";
            break;
        default:
            echo "Вам $a лет";
    }

?>
</body>
</html>