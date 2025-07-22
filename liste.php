<?php
// On inclut le fichier de connexion
require 'config.php';

// On prépare et exécute la requête pour récupérer les trajets
$sql = "SELECT * FROM trajets";
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
    href="/ecoride/style.css">
    <title>Liste des trajets</title>
</head>
<body>
    <nav>
        <a href="proposer.php">Proposer un trajet</a><hr>
    </nav>
    <h1>Liste des trajets</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Conducteur</th>
            <th>Départ</th>
            <th>Arrivée</th>
            <th>Date du trajet</th>
            <th>Places</th>
        </tr>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['conducteur'] . "</td>";
            echo "<td>" . $row['depart'] . "</td>";
            echo "<td>" . $row['arrivee'] . "</td>";
            echo "<td>" . $row['date_trajet'] . "</td>";
            echo "<td>" . $row['places'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
