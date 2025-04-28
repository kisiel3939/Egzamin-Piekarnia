<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rodzajPrp = 'Rodzaj';
    $stmt = $conn->prepare("SELECT DISTINCT Rodzaj FROM `wyroby` ORDER BY :rodzaje DESC;");

    $stmt->bindParam(':rodzaje', $rodzajPrp);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //header("Location: ../index.php");
} else {
    //header("Location: ../index.php");
}
