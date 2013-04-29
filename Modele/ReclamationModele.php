<?php

   
	include "../Control/Configuration.php";
	
	class reclamation
{
	private $IdReclamation;
	private $Sujet ;
	private $Description;
	private $DateE ;
	private $IdClient ;
	
	
	
		
		
		function __construct($IdReclamation , $Sujet , $Description , $DateE , $IdClient )
		{
			$this->IdReclamation = $IdReclamation;
			$this->Sujet = $Sujet;
			$this->Description = $Description;
			$this->DateE = $DateE;
			$this->IdClient = $IdClient;
			
		}
		
		
		function getId_reclamation()
		{
			return $this->IdReclametion;
		}
		function setId_reclamation($I)
		{
			$this->IdReclamation = $I;
		}
		
		function getSujet()
		{
			return $this->Sujet;
		}
		function setSujet($N)
		{
			$this->Sujet=$N;
		}
		function getDescription()
		{
			return $this->Description;
		}
		function setDescription($P)
		{
			$this->Description=$P;
		}
		function getDateE() {
			$this->DateE;
		}
		function setDateE($N){
			$this->DateE=$N;
		}
		
		function getIdClient()
		{
			return $this->IdClient;
		}
		function setIdClient($l)
		{
			$this->IdClient=$l;
		}
		
}
	
	class ReclamationModele
	{
		function __construct ()
		{
			$Conf = new Configuration ();
			$Conf->Connexion ();
		}
		
		
		function AjouterReclamation ($R)
		{			
			$Requete = "insert into reclamation
						(
						IdReclamation,
					    Sujet ,
					    Description,
						DateE,
						IdClient 
						
					    
													
						)
						values
						(
							'" .$R->getId_reclamation()."',
							'" .$R->getSujet()."',
							'" .$R->getDescription()."',
							'" .$R->getDateE()."',
							'" .$R->getIdClient()."'
							
																	
						)";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function SupprimerReclamation ($id)
		{		
	        //$id= $E->getId();	
			$Requete = "delete from reclamation where IdReclamation = '$id'";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
	
		function ModifierReclamation ($E)
		{		
		
		
		$Requete="update  `reclamation` set  `Sujet` =  '".$E->getSujet()."',`Description` =  '".$E->getDescription()."',`DateE` =  '".$E->getDateE()."',`IdClient` =  '".$E->getEIdClient().;
			
		
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function listeReclamation ()
		{			
			
			$Requete = "select * from reclamation";
			$cur = mysql_query ($Requete) or die ("Erreur".mysql_error());
			
			$tab = array();
			$i = 0;
			
			
			while($ligne = mysql_fetch_array($cur))
				{
					//echo $i;
					
					
					
							 $R = new reclamation (0,"","","","");
							 $R->setId_reclamation($ligne["IdReclamation"]);		
							 $R->setSujet($ligne["Sujet"]);
							 $R->setDescription($ligne["Description"]);
							 $R->setDateE($ligne["DateE"]);
							 $R->setIdClient($ligne["IdClient"]);
							 
							
					         $tab[$i] = $R;
					
					
					
				
					
					
					$i++;
					
				}
		
			return $tab ;
			
	}
	
	}
//	$RM = new CollaborateurModele();
	//$R=new collaborateur();
	//$RM->AjouterCollaborateur($R);
	//$RM->SupprimerCollaborateur(7);
	//$RM->ModifierCollaborateur($R);
	//$Liste= $RM->listeCollaborateur();
	?>
