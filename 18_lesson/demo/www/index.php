<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Цикл "While", "Do... While", "For"</title>
</head>
<body>
<?php

    // цикл while

    $i = 1;
    while ($i <= 10) {
        echo "$i <br />";
        $i++;
    }

    // цикл "Do... While"
    do {
        echo "$i <br />";
        $i++;
    } while ($i <= 10);

    // цикл "for"
    for ($i = 1; $i <= 10; $i++) {
        echo "$i <br />";
    }

?>
</body>
</html>