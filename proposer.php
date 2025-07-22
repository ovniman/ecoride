<?php
require 'config.php'; // connexion à la base

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conducteur = $_POST['conducteur'];
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];
    $date_trajet = $_POST['date_trajet'];
    $places = $_POST['places'];

    // Requête d'insertion
    $sql = "INSERT INTO trajets (conducteur, depart, arrivee, date_trajet, places)
            VALUES (:conducteur, :depart, :arrivee, :date_trajet, :places)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':conducteur' => $conducteur,
        ':depart' => $depart,
        ':arrivee' => $arrivee,
        ':date_trajet' => $date_trajet,
        ':places' => $places
    ]);
    echo "<p style='color:green;'>✅ Trajet ajouté avec succès !</p>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
 <link rel="stylesheet"
    href="/ecoride/style.css">
<title>Proposer un trajet</title>
</head>
<body>
    <h1>Proposer un trajet</h1>
    <form method="post">
        <label>Conducteur : <input type="text" name="conducteur" required></label><br><br>
        <label>Départ : <input type="text" name="depart" required></label><br><br>
        <label>Arrivée : <input type="text" name="arrivee" required></label><br><br>
        <label>Date du trajet : <input type="date" name="date_trajet" required></label><br><br>
        <label>Places : <input type="number" name="places" min="1" required></label><br><br>
        <input type="submit" value="Ajouter le trajet">
    </form>
    <p><a href="liste.php">➡️ Voir la liste des trajets</a></p>
</body>
</html>
