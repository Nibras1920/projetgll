<?php
class formation
{
	private $IdFormation;
	private $Annee; 
	private $Duree ;
	private $Dipl�me ;
	
	
	
		function __construct($IdFormation,$Annee,$Duree,$Dipl�me)
		{
			$this->IdFormation = $IdFormation;
			$this->Annee = $Annee;
			$this->Duree = $Duree;
			$this->Dipl�me = $Dipl�me;
			
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
			return $this->Dipl�me;
		}
		function setDip($Di)
		{
			$this->Dipl�me=$Di;
		}
		
	}

?>


	
	
