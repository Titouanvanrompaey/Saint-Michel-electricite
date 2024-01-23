<?php
$server = "localhost";
$dbname = "infosclients";
$user = "root";
$password = "";

try {
    // Créer une connexion PDO
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté à la base de données";
    $conn->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die("Impossible de se connecter à la base de données. Erreur : " . $e->getMessage());
}
?>
