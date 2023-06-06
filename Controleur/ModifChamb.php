<?php
include ('C:\xampp\htdocs\TP2 Semestre\Vue\connexion');

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Traitement du formulaire de modification de chambre
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chambreId = $_POST["ID"];
    $numeroChambre = $_POST["chambre"];
    $numeroBatiment = $_POST["batiment"];

    // Requête SQL pour mettre à jour la chambre
    $sql = "UPDATE chambres SET chambre='$numeroChambre', batiment='$numeroBatiment' WHERE id='$chambreId'";

    if ($conn->query($sql) === true) {
        echo "Chambre modifiée avec succès.";
    } else {
        echo "Erreur lors de la modification de la chambre : " . $conn->error;
    }
}

// Récupération des détails de la chambre à modifier
if (isset($_GET["id"])) {
    $chambreId = $_GET["id"];

    // Requête SQL pour récupérer les détails de la chambre
    $sql = "SELECT * FROM chambres WHERE id='$chambreId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $numeroChambre = $row["chambre"];
        $numeroBatiment = $row["batiment"];
    } else {
        echo "Chambre non trouvée.";
    }
}

$conn->close();
?>

