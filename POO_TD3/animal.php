<?php
class Animal{
	private $nom;
	private $age;
	private $agemax;
	private $regime=array();
	private $etat;
	
	public function __construct($n, $a, $amax)
	{
		$this->nom = $n;
		$this->age = $a;
		$this->agemax = $amax;
		$this->etat = "vivant";
	}
	
	public function vieillir($nb)
	{
		$this->age = $this->age + $nb;
	}
	
	public function mange($aliment) 
	{
		array_push($this->regime, $aliment); 
	}
	
	public function lire_informations()
	{
		return " Nom : ".$this->nom.", Age : ".$this->age.", etat : ".$this->etat.".";
	}
	
	public function lire_regime()
	{
		$tmp = " Mon regime : ";
		foreach ($this->regime as $val) {
		$tmp = $tmp .$val. ", ";
		}
		return $tmp;
	}
	
}
?>