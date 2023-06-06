<?php
include ('C:\xampp\htdocs\TP2 Semestre\Vue\connexion');

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Traitement de la suppression de chambre
if (isset($_GET["id"])) {
    $chambreId = $_GET["id"];

    // Requête SQL pour supprimer la chambre
    $sql = "DELETE FROM chambre WHERE id='$chambreId'";

    if ($conn->query($sql) === true) {
        echo "Chambre supprimée avec succès.";
    } else {
        echo "Erreur lors de la suppression de la chambre : " . $conn->error;
    }
}

$conn->close();
?>
