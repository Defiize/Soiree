<?php

class Reservation{
    private $idReservation;
    private $DateReserv;
    private $Validation;
    private $email;
    
    public function Reserver($LidReservation,$laDateReserv,$laValidation,$lEmail){
        $idReservation=$LidReservation;
        $DateReserv=$laDateReserv;
        $Validation=$laValidation;
        $email=$lEmail;
    }
    function getIdReservation() {
        return $this->idReservation;
    }

    function getDateReserv() {
        return $this->DateReserv;
    }

    function getValidation() {
        return $this->Validation;
    }

    function getEmail() {
        return $this->email;
    }

    public function reserverSoiree(){
    
        $lePDO = new PDO('mysql:host=localhost;dbname=bdpic', 'root', 'root'); 
        $email=$_POST['txtmail'];
        $IdSoiree=$_POST['idsoiree'];
        $Validation=$_POST['valider'];
        $sql="insert into reservation values $email,$IdSoiree,$Validation";
        $lePDO->exec($sql);
    }

}
