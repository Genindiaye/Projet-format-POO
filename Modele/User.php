<?php
class User  {
    protected $ID;
    protected $nom;
    protected $prenom;
    protected $MDP;
    protected $Email;
    protected $Telephone;
    protected $profil;

    public function __construct($row=null){
       if($row!=null){
        $this->hydrate($row);
       }
    }
    public function hydrate($row){
        $this->ID = $row["id"];
        $this->prenom = $row["prenom"];
        $this->nom = $row["nom"];
        
    }

    public function Restauration(){

    }

    public function Affichage(){
        echo "User".$this->ID." ".$this->prenom." ".$this->nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getMDP(){
        return $this->MDP;
    }

    
    public function getID(){
     return $this->ID;
    }
    public function getEmail(){
        return $this->Email;
    }

    public function getTelephone(){
        return $this->Telephone;
    }
    public function getprofile(){
        return $this->profil;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->nom = $prenom;
    }
    public function setMDP($nom){
        $this->nom = $nom;
    }
    public function setID($Id){
        $this->nom = $Id;
    }
    public function setEmail($Email){
        $this->nom = $Email;
    } 
    public function setTelephone($Telephone){
        $this->nom = $Telephone;

        public function setProfil($profil){
            $this->profil = $profil;
    } 

    
    public function getNomComplet(){
        return $this->prenom." ".$this->nom;
    }
}
}