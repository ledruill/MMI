<?php
//Classe Parent
abstract class A {

   //Propriétés
   public $prop1;
   public $prop2;

   // Propriété static de la classe
   static $nbinstances;

   //constructeur
   public function __construct($a1, $a2)
   {
      $this->prop1 = $a1;
      $this->prop2 = $a2;

      //incrémentation du nombre d'instances
      self::$nbinstances++;
   }

   //destructeur
   public function __destruct()
   {
         //décrémente le nombre d'instances
         self::$nbinstances--;
   }

   public function lire_proprietes()
   {
      return 'Propriete 1 : '.$this->prop1.', Propriete 2 : '.$this->prop2;
   }
}
?>
