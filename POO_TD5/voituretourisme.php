<?php
final class VoitureTourisme extends Voiture
{
	protected $consommation;
	protected $kilometrage;
	
	public function __construct($tmot, $nbp, $m, $p, $conso )
	{
		parent::__construct($tmot, $nbp, $m, $p);
		$this->consommation = $conso;
		$kilometrage = 0;
		
	}

	public function lirecaracteristiques()
	{
		return parent::lirecaracteristiques()." consomme : ".$this->consommation." l pour 100 kms et affiche au compteur : ".$this->kilometrage." kms.";
	}
	
	public function utiliser($distance)
	{
		$this->kilometrage += $distance;
	}
	
}
?>