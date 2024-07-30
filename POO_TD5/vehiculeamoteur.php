<?php
abstract class VehiculeAMoteur{
	protected $typemoteur;
	protected $nombrepassagers;
	
	static $nbvehicules;
	
	public function __construct($tmot, $nbp)
	{
		$this->verificationtype($tmot);
		$this->verificationnbpassagers($nbp) ;
		//incrémentation du nombre d'instances
        self::$nbvehicules++;

	}
	
	public function verificationtype($t)
	{
		$types = array("T", "E");
		if(in_array($t, $types)){
			$this->typemoteur = $t;
		}
		else {
			$this->typemoteur = "Erreur de type de moteur !";
			echo "Erreur de type de moteur !<br>";
		}
			
	}
	
	public function verificationnbpassagers($n)
	{
		if(is_int($n)){
			$this->nombrepassagers = $n;
		}
		else {
			$this->nombrepassagers = "Erreur sur le nombre de passagers !";
			echo "Erreur sur le nombre de passagers !<br>";
		}
		
	}
}
?>