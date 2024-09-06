<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//ceci est mon front controller
session_start();
include 'config/database.php';
$action = filter_input(INPUT_GET,'action');
$action = !empty($action) ? $action : 'home'; //si empty action alors action = home
$id = filter_input(INPUT_GET,'id');
$route =[
    'delete' => 'app/controllers/blogPostDeleteController.php',
    'update' => 'app/controllers/blogPostModifyController.php',
    'create' => 'app/controllers/blogPostCreateController.php',
    'blogpost' => 'app/controllers/blogPostController.php',
    'home' => 'app/controllers/homeController.php',
    'contact' => 'contact.php',
    'about' => 'about.php',
    'comment' => "app/controllers/commentsFormController.php",
    ];

    if (!array_key_exists ($action, $route)){
        header ("HTTP/1.0 404 Not Found");
        include ('404.php');
    }else{
        $page = $route [$action];
        include  $page;
    }

   
?>