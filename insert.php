<?php
require 'config.php' ;
$conducteur = "Jean" ;
$depart = "Paris" ;
$arrivee = "Lyon" ;
$date_trajet = "2025-07-23";
$places = 3;

$sql = "INSERT INTO trajets
(conducteur, depart, arrivee, date_trajet, places)
 VALUES
 (:conducteur, :depart, :arrivee, :date_trajet, :places)";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([
      ':conducteur' => $conducteur,
      ':depart' => $depart,
      ':arrivee' => $arrivee,
      ':date_trajet' => $date_trajet,
      ':places' => $places
]) ;
 echo " trajet inséré avec succès !" ;
 ?>