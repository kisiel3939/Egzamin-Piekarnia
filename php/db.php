<?php

$dsn = "mysql:host=localhost;dbname=piekarnia";
$user = 'root';
$password = '';

try {

    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo 'błąd połączenia: ' . $e->getMessage();
}
