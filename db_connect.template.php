<?php
function db_connect(){
    $username = 'username';
    $password = 'password';
    $db_name = 'db_name';
    $host = 'localhost';

    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$host, $username, $password);
    return $pdo;
}
?>