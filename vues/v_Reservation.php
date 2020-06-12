<html>
    <head>
        <title>Reservation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include('./v_layout_entete.php'); ?>
    <center> <h1> Réservation</h1></center>
    <br/><br/><br/>
    <center><h3>Vous souhaitez réserver une soirée ? Vous êtes au bonne endroit ! <br/> Merci de bien vouloir remplir les champs çi-dessous</h3></center>
    <form action="index.php?controleur=c_gestionReservation&action=CreationReservation" method="POST">
        Email:<input type="text" name="txtmail" value="" /><br/>
        Date de la réservation: <input type="date" name="dateR" value=""/><br/>
       valider maintenant ? 
       Non<input type="radio" id="non" name="valider" value="0"/>
       Oui <input type="radio" id="oui" name="valider" value="1"/><br/>
        
        <input type="submit" name="valider" value="Valider"/>
        <input type="reset" name="Annuler" value="Annuler la Réservation"/>
    </form>

    <?php include('./v_layout_pied.php'); ?>
</body>
</html>
