
<div id="soirees">
     <form method="POST" action="index.php?controleur=GestionAdmin&action=modificationSoiree">
        <fieldset align="center">
            <h1 >Choisir une soirée pour la modifier :</h1></br>
            <?php
                $tabSoirees = Soiree::afficherSoiree();
                echo '<select name="txtnom" size="'.sizeof($tabSoirees).'">';
                foreach ($tabSoirees as $tabSoiree) {
                    echo '<option name="'.$tabSoiree[1].'>'.$tabSoiree[1].'</option>';
                }
                echo '</select><br/><br/>';
                echo '<input type="submit" name="valider"/>';
            ?> 
      
     <div align="center">
         <h2> Affichage de toutes les soirées : </h2>
         <table id="customers" align="center">
             <tr><th>Nom de la soirée</th><th>Adresse de la soirée :</th><th>Date :</th><th>Nombre de places :</th></tr>
            <?php
            $soirees = Soiree::afficherSoiree();

            foreach($soirees as $soiree) {
                echo "<tr><td>$soiree[1]</td><td>$soiree[2]</td><td>$soiree[3]</td><td>$soiree[4]</td></tr>";
            }

            ?>
         
       
             
         </table>
           </fieldset>
    </div>
</form>
</div>
