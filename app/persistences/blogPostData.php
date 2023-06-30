<?php

function lastBlogPosts($pdo) {
    $request = file_get_contents('database/lastBlogPosts.sql');
    foreach($pdo->query($request) as $row) 
    {   
        print_r($row);
    }
    $pdo = null;

    return $lastblogposts;
};
