<?php

    // проверяем отправлена ли форма, если "send" есть в глобальном массиве POST
    if (isset($_POST["send"])) {

        // выводим весь глобальный массив POST
        // print_r($_POST);

        // помещаем имя из формы (глобального массива POST) в переменную $name
        $name = $_POST['name'];

        // выводим на экран
        echo "Привет, " . $name;

    }

?>