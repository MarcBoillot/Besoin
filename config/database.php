<?php
$user = 'boillot';
$pass = '1234';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);
    foreach($dbh->query('SELECT pseudo from Authors') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>