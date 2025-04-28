<?php
include "db.php";


$stmt = $conn->prepare("SELECT DISTINCT Rodzaj FROM `wyroby` ORDER BY Rodzaj DESC");
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $row) {
    echo "<option value='{$row['Rodzaj']}'>{$row['Rodzaj']}</option>";
}

$_SESSION['rodzaj'] = $_POST['rodzajSelect'];
