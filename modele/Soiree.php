<?php

class Soiree {
    private $id;
    private $nom;
    private $adresse;
    private $date;
    private $nbPlaces;
    
    function Soiree($id, $nom, $adresse, $date, $nbPlaces) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->date = $date;
        $this->nbPlaces = $nbPlaces;
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getDate() {
        return $this->date;
    }

    function getNbPlaces() {
        return $this->nbPlaces;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setNbPlaces($nbPlaces) {
        $this->nbPlaces = $nbPlaces;
    }
    
    public function ajouterSoiree() {
        $lePDO = new PDO('mysql:host=localhost;dbname=bdpic', 'root', 'root'); 
        
        $sql = "INSERT INTO soiree VALUES (NULL,'".$this->nom."','".$this->adresse."','".$this->date."','".$this->nbPlaces."')";
        $req = $lePDO->exec($sql);
    }
   
    public static function afficherSoiree() {
        $lePDO = new PDO('mysql:host=localhost;dbname=bdpic', 'root', 'root'); 
        
        $sql = "SELECT * FROM soiree";
        $req = $lePDO->query($sql);
        $soirees = $req->fetchAll();
        
        return $soirees;
    }
    
    


}

