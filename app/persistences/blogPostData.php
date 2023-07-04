<?php
function blogPostById($pdo, $id){
//parametre le numero de larticle et elle retourn l'article avec l'auteur
    $request_articles = file_get_contents('database/blogPostById.sql');
    $statement_articles = $pdo->prepare($request_articles);
    $statement_articles ->execute(['id' => $id]);
    return  $statement_articles->fetch();
};
function commentsByBlogPost($pdo, $id){
//parametre le numero de l'article et return les comm de l'article avec l'auteur
    $request_comments= file_get_contents('database/commentsByBlogPost.sql');
    $statement_comments = $pdo->prepare($request_comments);
    $statement_comments ->execute(['id' => $id]);
    return $statement_comments->fetchAll();
};
function lastBlogPosts($pdo){
    $request = file_get_contents('database/lastBlogPosts.sql');
    $statement = $pdo->query($request);
    return $statement->fetchAll();
};
