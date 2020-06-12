<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1 style="text-align: center;">Récapitulatif administration :</h1>
        <div align="center">
         <h3> Affichage de toutes les soirées : </h3>
         <table id="customers" align="center">
             <tr><th>Nom de la soirée</th><th>Adresse de la soirée :</th><th>Date :</th><th>Nombre de places :</th></tr>
            <?php
            $soirees = Soiree::afficherSoiree();

            foreach($soirees as $soiree) {
                echo "<tr><td>$soiree[1]</td><td>$soiree[2]</td><td>$soiree[3]</td><td>$soiree[4]</td></tr>";
            }

            ?>
            
             
         </table>
    </div>
        <form method="POST" action="index.php?controleur=GestionAdmin&action=gestionSoiree">
        
      
 
            <h3>Ajouter une soirée :</h3>
            <a href="index.php?controleur=GestionAdmin&action=ajouterSoiree"><input type="button" name="btn" value="Aller sur la page"/></a><br/>

            <h3>Modifier une soirée :</h3>
            <a href="index.php?controleur=GestionAdmin&action=modifierSoiree"><input type="button" value="Aller sur la page"/></a><br/>
            
            <h3>Affichant toutes les personnes participant à une soirée : </h3>
            <a href="index.php?controleur=GestionAdmin&action=afficherParticipants"><input type="button" value="Aller sur la page"/></a><br/>
        </form>
        
        
    </body>
</html>
