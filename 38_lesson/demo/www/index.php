<?php

// ?page=

// check file exist

// default home

if (!isset($_GET['page']) || $_GET['page'] == 'home') {

   include_once 'pages/home.php';

} else {

    $page = $_GET['page'];

    if (!file_exists('pages/' . $page . '.php')) {
        include_once 'pages/error.php';
        exit();
    }

    include_once 'pages/' . $page . '.php';

}
