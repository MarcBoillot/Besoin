<?php
$user = 'monique_silva';
$pass = '01031985';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=needIT', $user, $pass);
    } 
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>