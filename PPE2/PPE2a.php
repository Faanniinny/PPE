<?php

include 'PPE2connexion.php';
$requete = "select * from joueur";
//Exécution de  la requête qui renvoie le résultat dans  $resultats, 
$resultats = $connexion->query($requete);
echo "<h2>Listes de la table joueur</h2>";
//On récupère toutes les lignes de la table dans la variable $lignes qui est un tableau associatif
$lignes = $resultats->fetchALL(PDO::FETCH_ASSOC);
foreach ($lignes as $ligne) {
//on affiche la ligne qu'on vient de lire
    echo $ligne['Pseudo'], " ", $ligne['Mail'], " ", $ligne['Twitter'], " ", $ligne['Discord']," <br/>\n";
}


?>
<a href="index.php">Retour au menu</a>