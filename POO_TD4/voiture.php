<?php
class Voiture extends Vehicule
{
	protected $type;
	
	public function __construct($m, $p, $k, $t)
	{
		parent::__construct($m, $p, $k);
		$this->valid_type($t);
		// $this->type = $t;
	}
	
	public function lire_type()
	{
		return " Type de voiture : ".$this->type.".";
	}
	
	public function valid_type($ty)
	{
		// $this->type = $ty;
		
		$Types = array("berline", "suv", "4x4", "break");
		if(in_array($ty, $Types))
		{
			$this->type =$ty;
		}
		else
		{
			$this->type ="Type non valide";
			echo "Type de voiture non valide </br>";
		}  
		
	}
	
	public function afficherVehicule()
	{
		return " Vehicule de marque : ". parent::afficherVehicule()." Type de voiture : ".$this->type.".";
	}
	
}
?>