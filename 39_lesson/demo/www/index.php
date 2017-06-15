<?php

$path = 'pages/';
$ext = '.php';

// if not set get param page, then show home page
if (!isset($_GET['page']) || $_GET['page'] == 'home') {
    includeFile('home');
} else {
    $page = $_GET['page'];
    includeFile($page);
}

/**
 * Check if file exist, when not, show error
 *
 * Otherwise show page
 *
 * @param string $page Page
 */
function includeFile($page)
{

    global $path, $ext;

    if (!file_exists($path . $page . $ext)) {
        include_once $path . 'error' . $ext;
        exit();
    }

    include_once $path . $page . $ext;

}
