<?php
require("vehicule.php");
require("voiture.php");
// Instanciation
echo "Utilisation de la classe Vehicule"."</br>";
$vehicule1 = new Vehicule("RENAULT", 90, 15000);
$vehicule2 = new Vehicule("PEUGEOT", 110, 20000);
echo $vehicule1->afficherVehicule()."</br>";	
echo $vehicule2->afficherVehicule()."</br>";
$vehicule1->setPuissance(110);
echo $vehicule1->afficherVehicule()."</br>";
$vehicule1->rouler(3500);
$vehicule2->rouler(1500);
echo $vehicule1->afficherVehicule()."</br>";	
echo $vehicule2->afficherVehicule()."</br>";
echo "Utilisation de la classe Voiture"."</br>";
$voiture1 = new Voiture("Clio", 90, 15000, "berline");
$voiture2 = new Voiture("Q5", 110, 20000, "suv");
$voiture3 = new Voiture("308", 110, 20000, "citadine");
echo $voiture1->afficherVehicule()."</br>";
echo $voiture1->lire_type()."</br>";
echo $voiture2->afficherVehicule()."</br>";
echo $voiture2->lire_type()."</br>";
echo $voiture3->afficherVehicule()."</br>";
echo $voiture3->lire_type()."</br>";

?>