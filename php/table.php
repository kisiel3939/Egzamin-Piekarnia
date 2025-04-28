<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $stmt = $conn->prepare('SELECT Rodzaj,Nazwa,Gramatura,Cena FROM `wyroby` WHERE Rodzaj=:rodzaj');

    $stmt->bindParam(':rodzaj', $_SESSION['rodzaj'], PDO::PARAM_STR);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $key => $item) {
        echo '<tr>';
        echo '<td>' . $item['Rodzaj'] . '</td>';
        echo '<td>' . $item['Nazwa'] . '</td>';
        echo '<td>' . $item['Gramatura'] . '</td>';
        echo '<td>' . $item['Cena'] . '</td>';
        echo '</tr>';
    }
} else {
}
