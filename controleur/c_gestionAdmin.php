<?php


$action = $_REQUEST['action'];

switch ($action) {
    case 'gestionSoiree': {
        include("vues/v_admin.php");
        break;
    }
    case 'ajouterSoiree': {     
        include("vues/v_ajouter_soiree.php");
        break;
    }
    case 'modifierSoiree': {
        include("vues/v_modifier_soiree.php");
        break;
    }
    case 'afficherParticipants': {
        include("vues/v_afficherParticipants.php");
        break;
    }
    case 'ajoutSoiree': {
        $soiree = new Soiree(NULL, $_REQUEST['txtnom'], $_REQUEST['txtadresse'], $_REQUEST['txtdate'], $_REQUEST['txtplaces']);
        $soiree->ajouterSoiree();
        echo "ajout réussi";
        break;
    }
    case 'modificationSoiree': {
        include("vues/v_modification_soiree.php");
        $soiree = new Soiree(NULL, $_REQUEST['txtnom'], NULL, NULL, NULL);

        break;
}
}
?>