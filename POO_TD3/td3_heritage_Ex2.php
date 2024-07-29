<?php
    require ('animal.php');
	require ('chien.php');
	//créer l’instance $bestiole de la classe animal : 
	//Nom : ‘Une drôle de bête’, Age : 1, Age théorique maximum : 10, état : ‘vivant’
	echo "Utilisation de la classe Animal : </br>";
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
	echo '<br>';
	// Utilisation de la classe Chien
	echo "Utilisation de la classe Chien : </br>";
	$chien1 = new Chien('Chien', 2, 20, "Medor");
	echo $chien1->seNomme();
	echo '<br>';
	$chien1->mange("viande");
	$chien1->mange("croquettes");
	echo $chien1->lire_regime();
	echo '<br>';
	echo $chien1->lire_informations();
?>