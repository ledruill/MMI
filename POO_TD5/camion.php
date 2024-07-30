<?php
class Camion extends VehiculeAMoteur
{
	protected $tonnage;
	protected $nbessieux;
	
	public function __construct($tmot, $nbp, $t, $n )
	{
		parent::__construct($tmot, $nbp);
		$this->tonnage = $t;
		$this->nbessieux = $n;
		
	}

	public function lirecaracteristiques()
	{
		return " Camion - Type de moteur : ".$this->typemoteur." - Nombre de passagers :".$this->nombrepassagers
		." - Tonnage : ".$this->tonnage." - Nombre essieux :".$this->nbessieux.".";
	}
	
}
?>