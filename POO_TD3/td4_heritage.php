<?php
    require ('animal.php');
	//créer l’instance $bestiole de la classe animal : 
	//Nom : ‘Une drôle de bête’, Age : 1, Age théorique maximum : 10, état : ‘vivant’

	$bestiole = new Animal('Une bete', 1, 10);

	// Appeler la méthode : mange(‘fruits’)
	$bestiole->mange('fruits');
	// Appeler la méthode : mange(‘legumes’)
	$bestiole->mange('legumes');
	// Appeler la méthode : mange(‘pain’)
	$bestiole->mange('pain');
	// Appeler la méthode : lire_regime()
	echo $bestiole->lire_regime();
	echo '<br>';
	// Appeler la méthode : lire_informations()
	echo $bestiole->lire_informations();
	echo '<br>';
	// Appeler la méthode : vieillir(4)
	$bestiole->vieillir(4);
	// Appeler la méthode : lire_informations()
	echo $bestiole->lire_informations();
	echo '<br>';
	// Appeler la méthode : vieillir(6)
	$bestiole->vieillir(6);
	// Appeler la méthode : lire_informations()
	echo $bestiole->lire_informations();

?>