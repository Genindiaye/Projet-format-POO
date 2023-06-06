<?php
    include ('C:\xampp\htdocs\TP2 Semestre\Vue\connexion');
    if ($conn->connect_error) {
      die("Erreur de connexion à la base de données : " . $conn->connect_error);
  }

    if(isset($_POST['connexion'])){
        $n=$_POST['username'];
        $pswd=$_POST['password'];
        
        if(empty ($n) or empty ($pswd)){
            echo"<script> alert('veuillez remplir tout les champs') </script>";
        }else{
          //cryptage password 
          $pa = sha1($pswd);
          
          $sql="SELECT * FROM administrateur WHERE username='$n' AND password='$pa'";
          $req=pg_query($conn, $sql);
         if(pg_num_rows($req)==0){
           echo'<script> alert("Login ou mot de passe oublié") </script>';
         }else{
          
          $_SESSION['idcl']=$i['idcl'];
          header("location: C:\xampp\htdocs\TP2 Semestre\Vue\Page4.php");
         }
          }
        }
?>
