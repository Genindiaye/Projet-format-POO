<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Allocation de chambre</title>
    <style>
      /* Style pour le lien en haut à droite */
      .link {
        position: absolute;
        top: 10px;
        right: 0;
        padding: 15px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        background-color: #008CBA;
        color: white;
        border-radius: 30px;
      }

      /* Style pour la grille de chambres */
      .room-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin: 20px;
      }

      /* Style pour chaque carte de chambre */
      .room-card {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        border-radius: 5px;
        overflow: hidden;
      }

      /* Style pour l'image de la chambre */
      .room-image {
        height: 200px;
        object-fit: cover;
      }

      /* Style pour le statut de la chambre */
      .room-status {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 5px 10px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        border-radius: 5px;
      }

      /* Style pour le bouton de réservation */
      .reserve-button {
        display: block;
        margin: 20px auto;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
      }
      h1{
        text-align: center;
        color: #858585;
      }
    </style>
  </head>
  <body>
    <a href="#" class="link">Voir Profil</a>
    <h1>Nos chambres </h1>
    <div class="room-grid">
      <div class="room-card">
        <img src="../asset/image/CHAMB1.jpg" alt="Chambre 1" class="room-image">
        <div class="room-status">Nouveau</div>
        <a href="#" class="reserve-button">Réserver</a>
      </div>
      <div class="room-card">
        <img src="../asset/image/CHAMB2.jpg" alt="Chambre 2" class="room-image">
        <div class="room-status">A refectionner</div>
        <a href="#" class="reserve-button" disabled>Réserver</a>
      </div>
      <div class="room-card">
        <img src="../asset/image/CHAMB3.jpg" alt="Chambre 3" class="room-image">
        <div class="room-status">Nouveau</div>
        <a href="#" class="reserve-button">Réserver</a>
      </div>
      <div class="room-card">
        <img src="../asset/image/CHAMB4.jpg" alt="Chambre 1" class="room-image"><br>
        <div class="room-status">Fraichement renouveler</div>
        <a href="#" class="reserve-button">Réserver</a>
      </div>
      <div class="room-card">
        <img src="../asset/image/CHAMB5.jpg" alt="Chambre 1" class="room-image">
        <div class="room-status">Nouveau</div>
        <a href="#" class="reserve-button">Réserver</a>
      </div>
      <div class="room-card">
        <img src="../asset/image/CHAMB6.jpg" alt="Chambre 1" class="room-image">
        <div class="room-status">Nouveau</div>
        <a href="#" class="reserve-button">Réserver</a>
      </div>
      <div class="room-card">
        <img src="../asset/image/CHAMB1.jpg" alt="Chambre 1" class="room-image">
        <div class="room-status">Ancien</div>
        <a href="#" class="reserve-button">Réserver</a>
      </div>
      <div class="room-card">
        <img src="../asset/image/CHAMB3.jpg" alt="Chambre 1" class="room-image">
        <div class="room-status">A refectionner</div>
        <a href="#" class="reserve-button">Réserver</a>
      </div>
    </div>
  </body>
</html>
