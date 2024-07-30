<?php
final class VoitureDeSport extends Voiture
{
	protected $zeroacent;
	
	public function __construct($tmot, $nbp, $m, $p, $z )
	{
		parent::__construct($tmot, $nbp, $m, $p);
		$this->zeroacent = $z;
		
	}

	public function lirecaracteristiques()
	{
		return parent::lirecaracteristiques()." passe de zero a cent en : ".$this->zeroacent." secondes.<br>";;
	}
	
}
?>