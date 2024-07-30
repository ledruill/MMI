<?php
    // Notion d'interface
    interface iPersonne {
        public function sePresente();
        public function travaille($nbheures);
    }
	
	/*
    class Personne implements iPersonne {
        // Propriétés
        public $nom;
        public $prenom;
        public $cumulheures;
        public function __construct($n,$p){
            $this->nom=$n;
            $this->prenom=$p;
        }
    }  */
	
	class Personne implements iPersonne {
		// Propriétés
		public $nom;
		public $prenom;
		public $cumulheures;
		public function __construct($n,$p){
			$this->nom=$n;
			$this->prenom=$p;
		}
		public function sePresente(){
			return 'Nom : '.$this->nom.' '.$this->prenom. ' nombre d\'heures : '.$this->cumulheures;
		}
		public function travaille($nbheures){
			$this->cumulheures=$this->cumulheures+$nbheures;
		}
}

?>
