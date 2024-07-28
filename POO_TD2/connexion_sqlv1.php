<?php
    //----------------------------------------------------
    // fichier : connexion_sql.php
    // ---------------------------------------------------
    // Notion d'encapsulation : protection des propriétés
    // de l'objet.   
    //----------------------------------------------------

    class Connexion_SQL {
        // Définition des attributs de la classe
        private $adresseip;
		private $nombase;
        private $utilisateur;
        private $mdp;
		private $connect;
		private $Etatconnect;
		
        // Définition de la fonction constructeur 
        public function __construct($ip, $bdd, $user, $pwd) { 
            $this->adresseip=$ip;
            $this->nombase=$bdd;
			$this->utilisateur=$user;
            $this->mdp=$pwd;
			$this->db_connect();
						
        }  

		public function db_connect()
		{
        $dsn = "mysql:host=$this->adresseip;dbname=$this->nombase";
		try {
			$bdd = new PDO($dsn, $this->utilisateur, $this->mdp);
			$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			// echo "Connect to mySQL.";
			$this->connect = $bdd;
			$this->Etatconnect="True";
			} 
		catch (PDOException $e) 
			{
			$this->Etatconnect="False";
            echo "Error! ####: " . $e->getMessage() . "<br/>";
			die();
			}
		}

        // initialisation du nom
        public function lire_connexion() {  
            echo "Etat connection : ".$this->Etatconnect. " - IP : ".$this->adresseip."<br/>";
			echo " User : ".$this->utilisateur." - BDD : ".$this->nombase."<br/>";
        }
		
    }
?>
