<?php
include "php/db.php";
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PIEKARNIA</title>
</head>

<body>
    <img src="img/wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="img/kw1.png">KWERENDA1</a>
        <a href="img/kw2.png">KWERENDA2</a>
        <a href="img/kw3.png">KWERENDA3</a>
        <a href="img/kw4.png">KWERENDA4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie
            wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren
            pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków</h4>
        <form action="php/formularz.php" method="post">
            <select name="rodzajSelect" id="rodzaje">
                <?php
                include "php/formularz.php";

                while ($row = $stmt->fetch()) {
                    echo '<option value=' .  $row[0] . '>' . $row[0] . '</option>';
                }
                ?>
            </select>
            <input type="submit" value="Wybierz">
            <table>
                <tr>
                    <th>Rodzaj</th>
                    <th>Nazwa</th>
                    <th>Gramatura</th>
                    <th>Cena</th>
                </tr>
                <?php include "php/formularz.php";
                // while ($row = mysqli_fetch_array($result)) {
                //     echo '<tr>';
                //     echo '<td>' . $row[0] . '</td>';
                //     echo '<td>' . $row[1] . '</td>';
                //     echo '<td>' . $row[2] . '</td>';
                //     echo '<td>' . $row[3] . '</td>';
                //     echo '</tr>';
                // }
                ?>
            </table>
        </form>
        <table>

        </table>
    </main>
    <footer>
        <p>AUTOR 00000000000</p>
        <p>Data: 28.03.2025</p>
    </footer>
</body>

</html>