<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $stmt = $pdo->query('SELECT DISTINCT Rodzaj FROM `wyroby` ORDER BY Rodzaj DESC');


    $rodzaj = $_POST['rodzajSelect'];

    //header("Location: /index.php");
} else {
    //header("Location: /index.php");
}
