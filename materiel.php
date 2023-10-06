<?php
	
	 class Materiel
	{
		private  $_refMat;
		private  $_nomMat;
		
	
	
		public function __construct($rm, $nm)
		{
		$this->refMat=$rm;
		$this->nomMat=$nm;
	
		}
	
		public function getrefMat()
		{
			return $this->refMat;
		}
		public function getnomMat()
		{
			return $this->nomMat;
		}


	
		public function setrefMat( $rm )
		{
			$this->refMat=$rm;
		}
		public function setnomMat( $nm )
		{
			
			$this->nomMat=$nm;
		}
			
			
		function create ()
		{
			include'connexion.php';
			$Req= "INSERT INTO materiel (refMat,nomMat) VALUES (:refMat,:nomMat)";
			$STMT = $connex->prepare($Req);
			$STMT -> bindParam(':refMat',$this -> refMat);
			$STMT -> bindParam(':nomMat',$this -> nomMat);
			try 
			{
					$STMT -> execute();
			} 
			catch (PDOException $e)
			{
				die ('Erreur :'.$e->getmessage());
			}

			function retrieve ($idUtilisateur)
		{
			include'connexion.php';
			$Req= "SELECT * from utilisateur where idUtilisateur=idUtilisateur";
			$STMT = $connex->prepare($Req);
			$STMT->bindParam(':idUtilisateur',$this->idUtilisateur);
			$STMT -> execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			print_r($result);
			
		}
		}
	}	
				
?>
