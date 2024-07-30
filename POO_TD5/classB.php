<?php
class B extends A {

   //Propriétés
   public $prop3;

   //constructeur
   public function __construct($a1, $a2, $a3)
   {
      parent:: __construct($a1, $a2);
      $this->prop3 = $a3;
   }
   
   public function lire_proprietes()
   {
      return parent::lire_proprietes().', Propriete 3 : '.$this->prop3;
   }
}

?>
