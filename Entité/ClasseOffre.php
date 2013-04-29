<?php
	class offre
	{
	
	    protected $IdOffre;
		protected $NomOffre;
		protected $DomaineOffre;
		protected $DescriptionOffre;
		

		function __construct($IdOffre,$NomOffre,$DomaineOffre,$DescriptionOffre)
	 	{
		    $this->IdOffre = $IdOffre;
			$this->NomOffre = $NomOffre;
			$this->DomaineOffre = $DomaineOffre;
			$this->DescriptionOffre = $DescriptionOffre;

		}
		
		
		function getIdOffre()
		{
			return $this->IdOffre;
		}
		function getNomOffre()
		{
			return $this->NomOffre;
		}
		
		function getDomaineOffre()
		{
			return $this->DomaineOffre;
		}
		
		function getDescriptionOffre()
		{
			return $this->DescriptionOffre;
		}
		
		
		
		//Function sets
		function setIdOffre($Id2)
		{
			$this->IdOffre = $Id2;
		}
		
		function setNomOffre($NO)
		{
			$this->NomOffre = $NO;
		}
		
		function setDomaineOffre($DO)
		{
			$this->DomaineOffre = $DO;
		}
		
		function setDescriptionOffre($DO)
		{
			$this->DescriptionOffre = $DO;
		}
		
		
	
		
	
	}
?>