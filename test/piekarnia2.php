<?php
$dsn = "mysql:host=localhost;dbname=piekarnia";
$user = 'root';
$password = '';

try {

    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'błąd połączenia: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <?php
    $rodzajPrp = 'Rodzaj';
    $stmt = $conn->prepare("SELECT DISTINCT Rodzaje FROM `wyroby` ORDER BY :rodzaje DESC;");

    $stmt->bindParam(':rodzaje', $rodzajPrp);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $d) {
        print_r($d);
        echo "<br>";
    }
    ?>
</body>

</html>