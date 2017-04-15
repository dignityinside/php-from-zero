<?php

$arr = ['alex', 'ivan'];

var_dump($arr);

unset($arr[1]);

var_dump($arr);

if (isset($arr[1])) {
    echo $arr[1];
}