<?php
    include ('C:\xampp\htdocs\TP2 Semestre\Vue\connexion');

    if(isset($_POST['INSCRIPTION'])){
        $n=$_POST['username'];
        $p=$_POST['name'];
        $pswd=$_POST['password'];
        $r=$_POST['rpassword'];
        
        if(empty($n) or empty($p) or empty ($pswd) or empty($r)){
            echo"veuillez remplir tout les champs";
        }else{
            if($pswd != $r){
                echo"<script> alert('Erreur, les mots de passe ne sont pas identiques') </script>";
            }else{
                //cryptage password 
                $pa = sha1($pswd);
                
                $sql="INSERT INTO etudiant (PRENOM and NOM,EMAIL,password) values ('$n', '$p','$pa')";
                $req=pg_query($conn, $sql);
                
                $_SESSION['idcl']=$i['idcl'];
                header("location: C:\xampp\htdocs\TP2 Semestre\Vue\Page3.php");
            }
        }
    }
?>