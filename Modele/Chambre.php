<?php 

class Chambre{
    protected $id;
    protected $nom;
    protected $couleur;
    protected $description;
    protected $position;


    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->id = $row["id"];
        $this->nom = $row["nom"];
        $this->couleur = $row["couleur"];
        $this->description = $row["description"];
        $this->position = $row["position"]
    }

    public function Affichage(){
        echo "Chambre ".$this->id." ".$this->nom. " ".$this->couleur."".$this->description."".$this->position;
    }

    public function getId($id){
        $this->id = $id;
    }
    public function getNom($nom){
        $this->nom = $nom;
    }
    public function getCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function getDescription($description){
        $this->description = $description;
    }
    public function GetPosition($position){
        $this->position = $position;
    }







    public function setId($id){
        $this->id = $id;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setPosition($position){
        $this->position = $position;
    }
}