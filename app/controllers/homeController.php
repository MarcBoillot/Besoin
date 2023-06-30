<?php
//echo " hello world";
//ceci est la page d'accueil de mon blog
include 'app/persistences/blogPostData.php';
$value = lastBlogPosts($pdo);
var_dump($value);
