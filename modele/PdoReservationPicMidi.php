<?php

class PdoReservationPicMidi
{   		
   		private static $monPdo;
		private static $monPdoBdPic = null;
/**
 * Constructeur priv�, cr�e l'instance de PDO qui sera sollicit�e
 * pour toutes les m�thodes de la classe
 * Utilisation du design Patter Singleton
 */				
	private function __construct()
	{
    		self::$monPdo = new PDO('mysql:host=localhost;dbname=bdpic', 'root', 'root'); 
                
			self::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		self::$monPdo = null;
	}
/**
 * Fonction statique qui cr�e l'unique instance de la classe
 *
 * Appel : $instancePdobdvente = PdoBdvente::getPdoBdvente();
 * @return l'unique objet de la classe PdoBdvente
 */
	public  static function getPdoPicMidi()
	{
		if(self::$monPdoBdPic == null)
		{
			self::$monPdoBdPic= new PdoReservationPicMidi();
		}
		return self::$monPdoBdPic;  
	}
        
        public static function getSoirees() {
            $sql = "SELECT NomSoiree FROM soiree";
            $req = self::$monPdo->query($sql);
            $lesSoirees = $req->fetchAll();
            return $lesSoirees;
        }
        
        public static function getEmail(){
            $sql="Select Email from utilisateur";
            $req= self::$monPdo->query($sql);
            $lesEmails= $req->fetchAll();
            return $lesEmails;
        }
        
        public static function getNom(){
            $sql="Select Nom from utilisateur";
            $req= self::$monPdo->query($sql);
            $lesNoms= $req->fetchAll();
            return $lesNoms;
        }
        
        public static function getPrenom(){
            $sql="Select Prenom from utilisateur";
            $req= self::$monPdo->query($sql);
            $lesPrenoms= $req->fetchAll();
            return $lesPrenoms;
        }
        
        public static function getPassword($email){
            $sql="Select Password from utilisateur where email = '".$email."'";
            $req= self::$monPdo->query($sql);
            $lePassword= $req->fetchAll();
            var_dump($lePassword);
            return $lePassword;
        }

         public static function getIdRole(){
            $sql="Select idRole from utilisateur";
            $req= self::$monPdo->query($sql);
            $lesPIdRoles= $req->fetchAll();
            return $lesIdRoles;
        }

        public static function ReserverSoiree(){
            $email=$_POST['txtmail'];
            $IdSoiree=$_POST['idsoiree'];
            $sql="INSERT INTO participer VALUES '$email',$IdSoiree";
            $req= self::$monPdo->exec($sql);
            
            
        }
}
?>