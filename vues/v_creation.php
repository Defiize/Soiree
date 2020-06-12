<form method="POST" action="index.php?controleur=GestionInternaute&action=insererCompte">
   <fieldset>
       <legend>Création de compte : 
     </legend>
     <p>
			<label for="idEmail">Adresse e-mail</label>
			<input id="email" type="text" name="email" size="30" maxlength="45"/>
		</p>
		<p>
			<label for="idMdp">Mot de passe</label>
                        <input id="Mdp" type="password" name="Mdp" size="30" maxlength="45"/>
		</p>
                <p>
			<label for="idNom">Nom</label>
			<input id="Nom" type="text" name="Nom" size="30" maxlength="45"/>
		</p>
                <p>
			<label for="idPrenom">Prenom</label>
			<input id="Prenom" type="text" name="Prenom" size="30" maxlength="45"/>
		</p>

        </fieldset>
        <p>
     <input type="submit" value="Valider" name="valider"/>
     <input type="reset" value="Annuler" name="annuler"/> 
         </p>
</form>

