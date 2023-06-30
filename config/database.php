<?php
$user = 'boillot';
$pass = '1234';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);
    } 
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>