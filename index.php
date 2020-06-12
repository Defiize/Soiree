<meta charset="utf-8">
<?php
session_start();
require_once("modele/pdoReservationPicMidi.php");

require_once("modele/Utilisateur.php");

include("vues/v_layout_entete.php") ;
include("modele/Soiree.php");

if(!isset($_REQUEST['controleur']))
     $controleur = 'accueil';
else
	$controleur = $_REQUEST['controleur'];


$laConnexion = PdoReservationPicMidi::getPdoPicMidi();
switch($controleur)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
        case 'GestionInternaute':
                {include("controleur/c_gestionInternaute.php");break;}
        case 'GestionAdmin': 
                {include("controleur/c_gestionAdmin.php");break;}
	
}
include("vues/v_layout_pied.php") ;

?>

