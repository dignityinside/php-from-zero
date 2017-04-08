<?php

// открываем новую сессию
session_start();

// сохраняем значение alex в сессию под ключем name
$_SESSION['name'] = 'alex';

 // проверяем существует ли такой ключ, выводим значение
if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}

// выводим id сессии
echo session_id();
