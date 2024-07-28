<?php
    // Comprendre l'héritage
    // Classe Mère
    class A {
        // Propriétés
        public $prop1;
        public $prop2;
        // Constructeur
        public function __construct($arg1,$arg2){
            $this->prop1=$arg1;
            $this->prop2=$arg2;
        }
        public function lire_information(){
            return $this->prop1.' '.$this->prop2;
        }
    }
    
?>
