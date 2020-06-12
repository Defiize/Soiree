<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'connexion':
	{
  		echo"cc";
		include("vues/v_connexion.php");
                
  		break;
            
	}
        
        case 'connexionOK':
	{

		
                
                $user=Utilisateur::rechercherUtilisateur($_REQUEST['idInternaute']);
               
                
               if($user->getPassword() == $_REQUEST['password'])
                {
                    echo'Connexion Réussi';
                }else{
                    echo "Erreur de la connexion";  
                }
                
                
              
		
  		break;
	}
        
        case 'creationCompte' : 
        {
                echo"Bienvenue à la création de votre compte";
                include ("vues/v_creation.php");
                break;
        }
	
        case 'insererCompte': {
            var_dump($_REQUEST);
            $utilisateur=new Utilisateur($_REQUEST['email'],$_REQUEST['Nom'],$_REQUEST['Prenom'],$_REQUEST['Mdp'],2);
            var_dump($utilisateur);
            $utilisateur->insererUser();
            break;
        }
}
?>

