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
            $this->test_ipadresse($ip);
            $this->nombase=$bdd;
			$this->utilisateur=$user;
            $this->mdp=$pwd;
			$this->Etatconnect = "false";
			if ($this->adresseip != "Non valide")
				$this->db_connect();
			else
				echo "Adresse ip non valide ! <br/>";
		
			
        }  

		public function db_connect()
		{
        $dsn = "mysql:host=$this->adresseip;dbname=$this->nombase";
		try {
			$bdd = new PDO($dsn, $this->utilisateur, $this->mdp);
			$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			// echo "Connect to mySQL.";
			$this->connect = $bdd;
			$this->Etatconnect = "true";
			} 
		catch (PDOException $e) 
			{
            echo "Error! ####: " . $e->getMessage() . "<br/>";
			die();
			}
		}

        // initialisation du nom
        public function lire_connexion() {  
            echo "Etat connection : ".$this->Etatconnect. " - IP : ".$this->adresseip."<br/>";
			echo " User : ".$this->utilisateur." - BDD : ".$this->nombase."<br/>";
        }
		
		// Validation ip
        public function test_ipadresse($ip) {  
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
			  // echo("$ip is a valid IP address");
			  $this->adresseip=$ip;
			} else {
			  // echo("$ip is not a valid IP address");
			  $this->adresseip="Non valide";
			}
        }
    }
?>
