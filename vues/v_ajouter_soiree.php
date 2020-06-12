<form method="POST" action="index.php?controleur=GestionAdmin&action=ajoutSoiree">
<div id="soirees">
        <fieldset>
            <h1 style="text-align: center">Ajouter une soirée</h1></br>
            <table style="text-align: center; margin-left: 32%;">
                
                <tr><td>Nom de la soirée :</td><td>Adresse de la soirée :</td><td>Date prévue :</td><td>Nombre de places :</td></tr>
                <tr>
                    <td><input type="text" id="txtnom" name="txtnom"/></td>
                    <td><input type="text" id="txtadresse" name="txtadresse"/></td>
                    <td><input type="date" id="txtdate" name="txtdate"/></td>
                    <td><input type="text" id="txtplaces" name="txtplaces"/></td>
                    <td><input type="submit" name="valider"/></td>
                </tr>
            </table>
        <h3> Affichage de toutes les soirées :<h3>                
         </fieldset>    
    </div>
</form> 
