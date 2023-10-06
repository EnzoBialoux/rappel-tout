<?php
	
	 class Document
	{
		private  $idUilisateur;
		private  $login;
		private  $mdp;
		
	
	
		public function __construct($idu, $login,$mdp)
		{
		$this->idUilisateur=$idu;
		$this->login=$login;
		$this->mdp=$mdp;
		
	
		}
		
		/* Fonction Get */
		public function getidUilisateur()
		{
			return $this->idUilisateur;
		}
		public function getlogin()
		{
			return $this->login;
		}
			
		public function datemdp()
		{
				return $this->mdp;
		}
		
		/* Fonction Set */
		public function setidUilisateur( $idu )
		{
			$this->idUilisateur=$idu;
		}

		public function setlogin( $login )
		{
			$this->login=$login;
		}

		public function setmdp( $mdp )
		{
			$this->mdp=$mdp;
		}
		
        
    }

?>