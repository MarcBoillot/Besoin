<?php
//recuperation de la function et de la vue du comments et articles (blogPost)
include 'app/persistences/blogPostData.php';
$statement = lastPosts($pdo);


include 'ressources/views/blogPost.tpl.php';
