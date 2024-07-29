<?php
class Chien extends Animal{
	private $nom_familier;
	
	public function __construct($n, $a, $amax, $nfamilier)
	{
		parent:: __construct($n, $a, $amax);
		$this->nom_familier = $nfamilier;
	}
	
	public function seNomme()
	{
		return $this->nom_familier;
	}
	
	public function lire_informations()
	{
		return parent::lire_informations().', Nom familier : '.$this->nom_familier;
	}
}
?>