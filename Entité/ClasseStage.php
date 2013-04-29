<?php
	class stage
	{
	
	    protected $IdStage;
		protected $Titre;
		protected $Sujet;
		protected $DureeStage;
		protected $Salaire;
		protected $NatureOffre;
		protected $NiveauEtude;
		protected $TypeContrat;
		protected $DescriptionProfil;
		
		//Constructeur par default :
		/*function __construct()
		{
			$this->Couleur = "bleu";
			$this->Puissance = 550;
			$this->Marque = "Nissan GTR";
			$this->Prix = 85.900;
		}*/
		
		//Constructeur par paramètre : 
		//(on peu utiliser qu'un seul constructeur)
		function __construct($IdStage,$Titre,$Sujet,$DureeStage,$Salaire,$NatureOffre,$NiveauEtude,$TypeContrat,$DescriptionProfil)
	 	{
		    $this->IdStage = $IdStage;
			$this->Titre = $Titre;
			$this->Sujet = $Sujet;
			$this->DureeStage = $DureeStage;
			$this->Salaire = $Salaire;
			$this->NatureOffre = $NatureOffre;
			$this->NiveauEtude = $NiveauEtude;
			$this->type_contrat = $type_contrat;
			$this->DescriptionProfil = $DescriptionProfil;

		}
		
		
		//Function gets :
		function getIdStage()
		{
			return $this->IdStage;
		}
		function getTitre()
		{
			return $this->Titre;
		}
		
		function getSujet()
		{
			return $this->Sujet;
		}
		
		function getDuree()
		{
			return $this->DureeStage;
		}
		
		function getSal()
		{
			return $this->Salaire;
		}
		
		function getNatureOffre()
		{
			return $this->NatureOffre;
		}
		
		function getNiveauEtude()
		{
			return $this->NiveauEtude;
		}
		
		function getTypeContrat()
		{
			return $this->TypeContrat;
		}
		
		function getDescriptionProfil()
		{
			return $this->DescriptionProfil;
		}
		
		
		//Function sets
		function setIdStage($Id)
		{
			$this->IdStage = $Id;
		}
		
		function setTitre($T)
		{
			$this->Titre = $T;
		}
		
		function setSujet($S1)
		{
			$this->Sujet = $S1;
		}
		
		function setDureeStage($D)
		{
			$this->DureeStage = $D;
		}
		
		function setSalaire($S2)
		{
			$this->Salaire = $S2;
		}
		
		function setNatureOffre($NO)
		{
			$this->NatureOffre = $NO;
		}
		
		function setNiveauEtude($NE)
		{
			$this->NiveauEtude = $NE;
		}
		
		function setTypeContrat($TC)
		{
			$this->TypeContrat = $TC;
		}
		
		function setDescriptionProfil($DP)
		{
			$this->DescriptionProfil = $DP;
		}
		
	
		
	
	}
	

	
	
?>