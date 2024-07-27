<?php
require("vehicule.php");
// Instanciation
$voiture1 = new Vehicule("RENAULT", 90, 15000);
$voiture2 = new Vehicule("PEUGEOT", 110, 20000);
echo $voiture1->afficherVehicule()."</br>";	
echo $voiture2->afficherVehicule()."</br>";
$voiture1->puissance = 110;
echo $voiture1->afficherVehicule()."</br>";
$voiture1->rouler(3500);
$voiture2->rouler(1500);
echo $voiture1->afficherVehicule()."</br>";	
echo $voiture2->afficherVehicule()."</br>";
?>