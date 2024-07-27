<?php
class Vehicule{
	public $marque;
	public $puissance;
	public $kilometrage;
	
	public function __construct($m, $p, $k)
	{
		$this->marque = $m;
		$this->puissance = $p;
		$this->kilometrage = $k;
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