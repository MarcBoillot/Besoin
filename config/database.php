<?php
$user = 'boillot';
$pass = '1234';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);

    foreach($pdo->query(
        'SELECT title, pseudo FROM articles INNER JOIN authors ON articles.authors_id = authors.id;'
        ) 
    as $row) {
        print_r($row);
    }
    $pdo = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>