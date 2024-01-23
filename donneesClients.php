<?php
require('connexion.php');

$nom = $_POST["nom"];
$email = $_POST["email"];
$objet = $_POST["objet"];
$message = $_POST["message"];

try {
    // Utilisez la connexion PDO stockée dans la variable $conn
    $stmt = $conn->prepare("INSERT INTO `client` (nom, email, objet, message) VALUES (:nom, :email, :objet, :message)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':objet', $objet);
    $stmt->bindParam(':message', $message);
  
    $stmt->execute();
    echo "Données insérées avec succès!";
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
?>
