<?php
//function blogPostDelete($pdo, $title, $text, $name, $pseudo){
//    $request_create_articles = file_get_contents('database/blogPostDelete.sql');
//    $statement_create_articles = $pdo->prepare($request_create_articles);
//    $statement_create_articles->execute([
//        'title' => $title,
//        'text' => $text,
//        'pseudo' => $pseudo,
//        'name' => $name
//    ]);
//    return $statement_create_articles->fetch();
//}
//function blogPostUpdate($pdo, $title, $text, $name, $pseudo){
//    $request_update_articles = file_get_contents('database/blogPostUpdate.sql');
//    $statement_update_articles = $pdo->prepare($request_update_articles);
//    $statement_update_articles->execute([
//        'title' => $title,
//        'text' => $text,
//        'pseudo' => $pseudo,
//        'name' => $name
//    ]);
//    return $statement_update_articles->fetch();
//}
function blogPostCreate($pdo, $title, $text, $start_date, $end_date, $degres, $id){
    $request_create_articles = file_get_contents('database/blogPostCreate.sql');
    //fonction pour creer un article
    $statement_create_articles = $pdo->prepare($request_create_articles);
    $statement_create_articles->execute(['title' => $title,
        'text' => $text,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'degres' => $degres,
        'authors_id' => $id
    ]);
}
function lastBlogPosts($pdo){
    $request = file_get_contents('database/lastBlogPosts.sql');
    $statement = $pdo->query($request);
    return $statement->fetchAll();
}
function searchAuthor($pdo, $pseudo, $firstname, $name):int{
//parametre le numero de larticle et elle retourn l'article avec l'auteur
    $request_articles = file_get_contents('database/researchAuthors.sql');
    $statement_articles = $pdo->prepare($request_articles);
    $statement_articles ->execute(['pseudo' => $pseudo]);
    $value = $statement_articles->fetchAll();
    //condiotnd dans la fct pour verifier si l'auteur existe s'il existe j'joute pseudo etc sinon je retourne l'id
    if(empty($value)) {
        $request_articles = file_get_contents('database/createAuthors.sql');
        $statement_articles = $pdo->prepare($request_articles);
        $statement_articles ->execute([
            'pseudo' => $pseudo,
            'first_name' => $firstname,
            'last_name' => $name
        ]);
        return $pdo->lastInsertId();
    };
    return $value[0]['id'];
};

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
