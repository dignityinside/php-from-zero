<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Условные операторы PHP</title>
</head>
<body>
    <?php

        // конструкция if

        $a = 26;

        if ($a < 30) {
            echo "$a меньше 30";
        }

        // конструкция if-else

        $a = 26;

        if ($a < 30) {
            echo "$a меньше 30";
        } else {
            echo "$a больше 30";
        }

        // Конструкция else-if

        $a = 26;

        if ($a < 30) {
            echo "$a меньше 30";
        } elseif($a >= 25) {
            echo "$a больше 25";
        } else {
            echo "$a больше 30";
        }

    ?>
</body>
</html>