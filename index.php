<?php
session_start();
$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
$action = empty($action) ? $action : 'home'; //si empty action alors action = home
$route =[
    'home' => 'home.php',
    'contact' => 'contact.php',
    'about' => 'about.php',
    ];

    if (!array_key_exists ($action, $route)){

    header ("HTTP/1.0 404 Not Found");
        include ('404.php');
    }else{
        $page = $route [$action];
        include = $page;
    }
?>