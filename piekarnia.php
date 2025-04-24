<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PIEKARNIA</title>
</head>
<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.png">KWERENDA1</a>
        <a href="kw2.png">KWERENDA2</a>
        <a href="kw3.png">KWERENDA3</a>
        <a href="kw4.png">KWERENDA4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków</h4>
        <form method="post">
            <!--<select name="rodzaj" id="rodzaje">-->
                <?php
                $serwer = 'localhost';
                $user = 'root';
                $password = '';
                $db = 'piekarnia';

                $query = 'SELECT DISTINCT Rodzaj FROM `wyroby` ORDER BY Rodzaj DESC;';

                $connect = mysqli_connect($serwer, $user, $password, $db);
                $result = mysqli_query($connect, $query);
                for($i = 0; $i < mysqli_num_rows($result); $i++){
                    $row = mysqli_fetch_row($result);
                    echo "<select id=$row[0]";
                }
                mysqli_close($connect);
                ?>
        </form>
    </main>
    <footer>
        <p>AUTOR 00000000000</p>
        <p>Data: 28.03.2025</p>
    </footer>
</body>
</html>