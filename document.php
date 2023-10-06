<?php
	
	 class Document
	{
		private  $_refDoc;
		private  $_dateFindevalidite;
		private  $_dateDoc;
		private  $_refMat;
	
	
		public function __construct($rd, $dv,$dd, $rm)
		{
		$this->refDoc=$rd;
		$this->dateFindevalidite=$dv;
		$this->dateDoc=$dd;
		$this->refMat=$rm;
	
		}
		
		/* Fonction Get */
		public function getrefDoc()
		{
			return $this->refDoc;
		}
		public function getdateFindevalidite()
		{
			return $this->dateFindevalidite;
		}
			
		public function dateDoc()
		{
				return $this->dateDoc;
		}

		public function refMat()
		{
				return $this->refMat;
		}
		
		/* Fonction Set */
		public function setrefDoc( $rd )
		{
			$this->refDoc=$rd;
		}

		public function setdateFindevalidite( $dv )
		{
			$this->dateFindevalidite=$dv;
		}

		public function setdateDoc( $dd )
		{
			$this->dateDoc=$dd;
		}

		public function setrefMat( $rm )
		{
			$this->refMat=$rm;
		}
		
		/* Méthode CRUD */
		function create()
		{
			include'connexion.php';
			$REQ = "INSERT INTO Document(refDoc , dateFindevalidite, dateDoc, refMat) VALUES (:refDoc, :dateFindevalidite, :dateDoc, :refMat)";
			$STMT= $connex -> prepare($REQ);
			$STMT->bindParam(':refDoc',$this -> refDoc);
			$STMT->bindParam(':dateFindevalidite',$this -> dateFindevalidite);
			$STMT->bindParam(':dateDoc',$this -> dateDoc);
			$STMT->bindParam(':refMat',$this -> refMat);
			try {
				$STMT -> execute();
			} catch (PDOException $e) {
				die ('Erreur :'.$e->getmessage());
			}
			
		}
	}			
?>