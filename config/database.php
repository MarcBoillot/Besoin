<?php
$user = 'marc';
$pass = '1234';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=needIT', $user, $pass);
    } 
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>