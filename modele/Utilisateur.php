<?php

class Utilisateur
{ 
    private $email;
    private $nom;
    private $prenom;
    private $password;
    private $role;
    
    public function Utilisateur($lEmail,$leNom,$LePrenom,$LePassword,$LeRole) {
        
        $this->email=$lEmail;
        $this->nom=$leNom;
        $this->prenom=$LePrenom;
        $this->password=$LePassword;
        $this->role=$LeRole;
        
    }
    
    
    function getEmail() {
        return $this->email;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }
    
    function setEmail($email) {
        $this->email = $email;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }
    
    public static function rechercherUtilisateur($email)
    {
        $lePDO = new PDO('mysql:host=localhost;dbname=bdpic', 'root', 'root'); 
        
        $sql="Select * from utilisateur where email='".$email."'";
        
            $req=$lePDO->query($sql);
            $user= $req->fetch();
            
            
           
            
            $newUser= new Utilisateur($user['Email'], $user['Nom'], $user['Prenom'], $user['Password'], $user['IdRole']);
            
            return $newUser;
    }
    
    public function insererUser() {
        
        $lePDO = new PDO('mysql:host=localhost;dbname=bdpic', 'root', 'root'); 
        

        $sql="insert into utilisateur values ('".$this->email."','".$this->nom."','".$this->prenom."','".$this->password."','".$this->role."')";
        
            $lePDO->exec($sql);

            
    }

    public function reserverSoiree(){
    
        $lePDO = new PDO('mysql:host=localhost;dbname=bdpic', 'root', 'root'); 
        $email=$_POST['txtmail'];
        $IdSoiree=$_POST['idsoiree'];
        $sql="insert into reservation values $email,$IdSoiree";
        $lePDO->exec($sql);       
    }

}

?>