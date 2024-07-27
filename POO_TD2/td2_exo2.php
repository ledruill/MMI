<?php
    //----------------------------------------------------
    // fichier : td2_exo2.php
    // ---------------------------------------------------
    // Notion d'encapsulation : protection des propriétés
    // de l'objet.    
    //----------------------------------------------------

    require ('personne2.php');

    // Nouvelle instance de class.Personne
    $etudiant=new Personne2('Martin','Paul',19); // le nom est en minuscules

    echo $etudiant->sePresente().'<br>'; //Je m'appelle Paul MARTIN et j'ai 19 ans (nom en majuscules)

    // Modification de l'attribut Nom
    $etudiant->setNom('Durand'); // nom en minuscules 
    echo $etudiant->sePresente().'<br>'; // Je m'appelle Paul DURAND et j'ai 19 ans (nom en majuscules)
?>


