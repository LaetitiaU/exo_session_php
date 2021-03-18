<?php
$host = 'localhost';
$user = 'root';
$pass = '';

try {

    $dbh = new PDO("mysql:host=$host;dbname=test", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $th) {
    echo 'Erreur' . $th->getMessage();
}

