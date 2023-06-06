<?php
    include ('C:\xampp\htdocs\TP2 Semestre\Vue\connexion');
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Traitement du formulaire d'ajout de chambre
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroChambre = $_POST["chambre"];
    $numeroBatiment = $_POST["batiment"];

    // Requête SQL pour insérer la nouvelle chambre
    $sql = "INSERT INTO chambre (chambre,batiment) VALUES ('$numeroChambre', '$numeroBatiment')";

    if ($conn->query($sql) === true) {
        echo "Chambre ajoutée avec succès.";
    } else {
        echo "Erreur lors de l'ajout de la chambre : " . $conn->error;
    }
}

$conn->close();
?>

