<?php

function lastBlogPosts($pdo) {
    $request = file_get_contents('database/lastBlogPosts.sql');
    $statement = $pdo->query($request);
    $recup = $statement->fetchAll();
    return $recup;
};
