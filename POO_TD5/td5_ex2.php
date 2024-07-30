﻿<?php
require("vehiculeamoteur.php");
require("voiture.php");
require("voituredesport.php");
require("voituretourisme.php");
require("camion.php");
// Instanciation

//	$vehicule1=new VehiculeAMoteur('E',5); // Impossible
    echo 'Véhicule 1'.'<br>';
    echo 'Instanciation impossible'.'<br>';
    echo '<br>';

    $vehicule2=new Voiture('E',5,'Renault',90);
    echo 'Véhicule2 est un objet de '.get_class($vehicule2).'<br>';
    echo $vehicule2->lirecaracteristiques();
    echo '<br>';
    echo '<br>';

	$vehicule3=new Voiture('E',7,'Tesla',450);
    echo 'Véhicule3 est un objet de '.get_class($vehicule3).'<br>';
    echo $vehicule3->lirecaracteristiques();
    echo '<br>';
    echo '<br>';

	$vehicule4=new VoitureDeSport('T',2,'Porsche',300,5);
    echo 'Véhicule4 est un objet de '.get_class($vehicule4).'<br>';
    echo $vehicule4->lirecaracteristiques();
    echo '<br>';
    echo '<br>';
	
	$vehicule5=new VoitureTourisme('T',4,'Fiat',70,5.5);
    echo 'Véhicule5 est un objet de '.get_class($vehicule5).'<br>';
    $vehicule5->utiliser(6000);
    echo $vehicule5->lirecaracteristiques();
    echo '<br>';
    echo '<br>';

	$vehicule6=new Camion('T',1,16,2);
    echo 'Véhicule6 est un objet de '.get_class($vehicule6).'<br>';
    echo $vehicule6->lirecaracteristiques();
    echo '<br>';
    echo '<br>';

	$vehicule7=new Camion('T',1,24,3);
    echo 'Véhicule7 est un objet de '.get_class($vehicule7).'<br>';
    echo $vehicule7->lirecaracteristiques();
    echo '<br>';
    echo '<br>';

    echo 'Nombre d\'objets (instances) : '.VehiculeAMoteur::$nbvehicules;

?>