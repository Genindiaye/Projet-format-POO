<?php
    session_start();
    include('C:\xampp\htdocs\PHP\login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
    <link  rel="stylesheet" href="../asset/style/Formulaire.css">
    <link  rel="icon" href="home.png">
</head>
<body>
    <div class="container">
        <img src="../asset/image/logo.jpg" class="logo" alt="" srcset="">
    </div>
        
    <h4 class="ok">CONNEXION</h4>
    <div id="container">
            
            
        <<form action="../vue/Page5.php" method="post">
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Nom d'utilisateur" name="username" required>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Mot de passe"  name="password" minlength="8" required>

            <input type="submit" id="submit" value="LOGIN" name="connexion" required >
           
        </form>
    </div>
</body>
