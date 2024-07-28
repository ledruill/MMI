<?php
    //----------------------------------------------------
    // fichier : td2_exo3.php
    // ---------------------------------------------------
    // Notion d'encapsulation : protection des propriétés
    // de l'objet.    
    //----------------------------------------------------
    // appel de la classe
    require ('connexion_sqlv1.php');
    // création d'une première instance
    $connexion1=new Connexion_SQL('127.0.1.1','test','root','');
    echo $connexion1->lire_connexion();

    // Création d'une deuxième instance
    $connexion2=new Connexion_SQL('serveur','test','root','');// serveur n'est pas une @ip valide
    echo $connexion2->lire_connexion();

?>
