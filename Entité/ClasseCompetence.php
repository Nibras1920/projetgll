<?php
	class competence
	{
	
	    protected $IdCompetence;
		protected $TitreLanguage;

		function __construct($IdCompetence,$TitreLanguage)
	 	{
		    $this->IdCompetence= $IdCompetence;
			$this->TitreLanguage = $TitreLanguage;
		}
		
	
		
		//Function gets :
		function getId_competence()
		{
			return $this->idCompetence;
		}
		function gettitre_language()
		{
			return $this->TitreLanguage;
		}
		
		
		//Function sets
		function setId_competence($Id)
		{
			$this->IdCompetence = $Id;
		}
		
		function settitre_language($L)
		{
			$this->TitreLanguage= $L;
		}
		
	
	
	
		
	
	}
	
	
?>