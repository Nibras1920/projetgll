<?php
class formation
{
	private $IdFormation;
	private $Annee; 
	private $Duree ;
	private $Diplôme ;
	
	
	
		function __construct($IdFormation,$Annee,$Duree,$Diplôme)
		{
			$this->IdFormation = $IdFormation;
			$this->Annee = $Annee;
			$this->Duree = $Duree;
			$this->Diplôme = $Diplôme;
			
		}
		function getIdform()
		{
			return $this->IdFormation;
		}
		function setIdform($IF)
		{
			$this->IdFormation = $IF;
		}
		function getAnnee()
		{
			return $this->Annee;
		}
		function setAnnee($An)
		{
			$this->Annee=$An;
		}
		function getduree()
		{
			return $this->Duree;
		}
		function setDuree($Du)
		{
			$this->Duree=$Du;
		}
		function getDip()
		{
			return $this->Diplôme;
		}
		function setDip($Di)
		{
			$this->Diplôme=$Di;
		}
		
	}

?>


	
	
