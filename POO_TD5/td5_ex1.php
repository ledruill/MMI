<?php
require 'classA.php';
require 'classB.php';
echo "</br>";
$objet1 = new B('V1', 'V2', 'V3'); 
echo $objet1->lire_proprietes(); 
echo "</br>";
$objet2 = new B('V4', 'V5', 'V6'); 
echo $objet2->lire_proprietes(); 
echo "</br>";
$objet3 = new B('V7', 'V8', 'V9'); 
echo $objet3->lire_proprietes(); 
echo "</br>";
echo "Nombre d\'instances crees : ".A::$nbinstances;
?>