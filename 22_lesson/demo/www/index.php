<?php

// time() - время прошедшее с 1970 года в секундах
// 3600 секунд = 60 минут
// 24 = 24 часа (сутки)
// 7 = 1 неделя
$expired = time()+3600*24*7;

setcookie('name', 'alex', $expired);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}