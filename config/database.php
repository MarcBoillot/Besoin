<?php
$user = 'db';
$pass = 'db';

try {
    $pdo = new PDO('mysql:host=db;dbname=db', $user, $pass);
    } 
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>