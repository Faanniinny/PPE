<?php
    $user = 'root'; // nom d'utilisateur pour se connecter
    $pass = ''; // mot de passe de l'utilisateur pour se connecter
    //paramétre la connexion pour travailler avec un encodage en utf8
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES 'UTF8'";
    $connexion = new PDO('mysql:host=localhost;dbname=ppe2', $user, $pass, $pdo_options);
    //
    //on veut récupérer les erreurs de la base de données
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>