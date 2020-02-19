<body>
    <?php
    $pseudo='';
    $mail='';
    $twitter='';
    $discord='';
//    $pseudo=$_POST['pseudo'];
//    $twitter=$_POST['twitter'];
//    $discord=$_POST['discord'];
//    $mail=$_POST['mail'];
    if(isset($_POST["pseudo"])&& isset($_POST['mail']) && isset($_POST['twitter']) && isset($_POST['discord'])){
        include 'PPE2connexion.php';
        $requete="insert into joueur (pseudo,mail,twitter,discord) values('$pseudo','$mail','$twitter','$discord');";
        echo $requete;
        $connexion -> exec($requete);
    }
    
            
    ?>
    <br><form  name="monForm" method="post" action="index.php?action=PPE2affichform" >
        
        <fieldset>
            <legend>S'inscrire</legend>
            <h4>Votre Pseudo :</h4>
            <input class='input' type='text' name='pseudo' size='15' />
            <h4>Votre E-mail</h4>
            <input class='input' type='text' name='mail' size='15' />
<!--            <h4>Mot de passe</h4>
            <input class='input' type='text' name='mdp' size='15' />
            <h4>Confirmation mot de passe</h4>
            <input class='input' type='text' name='mdp2' size='15' />-->
            <h4>Twitter</h4>
            <input class='input' type='text' name='twitter' size='15' />
            <h4>Discord</h4>
            <input class='input' type='text' name='discord' size='15' /><br><br>
            <input class='input' type='submit' value='Enregistrer' /><br>
            <a href="index.php">Retour au menu</a>
        </fieldset>
    </form>
</body>