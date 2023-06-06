<?php
    session_start();
    include('C:\xampp\htdocs\PHP\loginAD.php');
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
        
    <h4 class="ok">Administrateur</h4>
    <div id="container">
            
         <h5> Connexion </h5>   
        <<form action="geni1.php" method="post">
            <label><b>Email</b></label>
            <input type="text" placeholder="Entrez votre adresse mail" name="username" required>
            <label><b>ID</b></label>
            <input type="password" placeholder="Entrez votre mot de pass"  name="password" required>

            <input type="submit" id="submit" value="LOGIN" name="connexion" required>
            
           
        </form>
    </div>
</body>
</html>