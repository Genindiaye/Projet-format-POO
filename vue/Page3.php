<?php
    session_start();
    include('C:\xampp\htdocs\PHP\inscription.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>
    <link  rel="stylesheet" href="../asset/style/Formulaire.css">
    <link  rel="icon" href="home.png">
</head>
<body>
    <div class="container">
        <img src="../asset/image/logo.jpg" class="logo" alt="" srcset="">
    </div>
    <h4 class="ok">Inscription</h4>
    <div id="container">  
        <<form action="../vue/Page4.php" method="post">
            <label><b>Prénom et Nom</b></label>
            <input type="text" placeholder="Entrer votre prénom et votre nom" name="username" required>
            <label><b>Adresse E-mail</b></label>
            <input type="text" placeholder="Entrer votre Adresse E-mail" name="name" required>
            <label><b>Mot de passe (8 caractéres minimum)</b></label>
            <input type="password" placeholder="Entrer votre mot de passe"  name="password" minlength="8" required>

            <label><b>Confirmer votre Mot de passe</b></label>

            <input type="password" placeholder="Confirmer votre mot de passe" name="rpassword" required>
            <br>
            <input type="submit" id="submit" value="SOUMETTRE" name= "INSCRIPTION" required >
           
        </form>
    </div>
</body>
</html>