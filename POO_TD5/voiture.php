<?php
class Voiture extends VehiculeAMoteur
{
	protected $marque;
	protected $puissance;
	
	public function __construct($tmot, $nbp, $m, $p )
	{
		parent::__construct($tmot, $nbp);
		$this->marque = $m;
		$this->puissance = $p;
		
	}

	public function lirecaracteristiques()
	{
		return " Vehicule de marque : ". $this->marque." avec une puissance de : ".$this->puissance." CV - Type de moteur : "
		.$this->typemoteur." - Nombre de passagers :".$this->nombrepassagers.".";
	}
	
}
?>