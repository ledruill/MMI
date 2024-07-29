<?php
class Vehicule{
	protected $marque;
	protected $puissance;
	protected $kilometrage;
	
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
	
	public function setPuissance($p)
	{
		$this->puissance = $p;
	}
}
?>