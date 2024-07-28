<?php
    // Notion d'héritage
    // Appel des classes mere et fille
    require ('mere.php');
	require ('fille.php');
    // Un objet de la classe A
    $objet1=new A('Classe A','Mere');
    // Affichage des valeurs des 
    // propriétés de la classe A
    echo $objet1->lire_information();
    echo '<br>';
    // Un objet de la classe B, 
    // spécialisation de la classe A
    $objet2=new B('Classe B','Fille','');
    echo $objet2->lire_information();
    echo '<br>';
    $objet2->change('specialisation');
    echo $objet2->lire_information();
    echo '<br>';
?>
