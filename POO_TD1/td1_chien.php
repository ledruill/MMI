<?php
require("chien.php");
// Instanciation
$chien1 = new Chien("Chien1", "Labrador", 5, 20);
$chien2 = new Chien("Chien2", "Teckel", 4, 9);
echo $chien1->afficherChien()."</br>";
echo $chien2->afficherChien()."</br>";
$chien1->anniversaire();
echo $chien1->afficherChien()."</br>";
$chien2->grossir(1.5);
echo $chien2->afficherChien()."</br>";
$chien1->maigrir(2);
echo $chien1->afficherChien()."</br>";
?>