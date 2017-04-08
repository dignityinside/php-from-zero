<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GET и POST + Работа с формами</title>
</head>
<body>
<?php

    // GET

    // print_r($_GET);
    // $name = $_GET["name"];
    // echo "Привет, " . $name;

?>
<!-- <form action="send.php" method="get"> -->
<form action="send.php" method="post">
    <p>Ваше имя: <input type="text" name="name"/></p>
    <p><input type="submit" name="send" value="Отправить"/></p>
</form>
</body>
</html>