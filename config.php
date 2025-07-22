<?php
// Parametres de connexion
$host = "localhost";
$user = "root";   // utilisateur par défaut dans XAMPP
$pass = "";    // mot de pass par défaut
$dbname = "ecoride";  // Nom de ma base que j'ai créée

try {
    //connexion avec PDO
    $pdo = new
PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)  {
    die("Erreur de connexion : " .
    $e->getMessage());
}
?>