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
	
	public function anniversaire()
	{
		$this->age = $this->age + 1;
	}
	
	public function grossir($kg) 
	{
		$this->poids = $this->poids + $kg;
	}
	
	public function  maigrir($kg)
	{
		$this->poids = $this->poids - $kg;
	}
	
	public function afficherChien()
	{
		return " Mon nom est ".$this->nom.", ma race est ".$this->race.", j'ai ".$this->age." ans et je pese ".$this->poids." kgs.";
	}
	
}
?>