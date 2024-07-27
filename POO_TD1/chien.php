<?php
class Chien{
	public $nom;
	public $race;
	public $age;
	public $poids;
	
	public function __construct($n, $r, $a, $p)
	{
		$this->nom = $n;
		$this->race = $r;
		$this->age = $a;
		$this->poids = $p;
	}
	
	public function rouler($km)
	{
		$this->kilometrage = $this->kilometrage + $km;
	}
	
	public function afficherVehicule()
	{
		return " Vehicule de marque : ".$this->marque." d'une puissance de ".$this->puissance." CV avec ".$this->kilometrage." kms.";
	}
	
}
?>