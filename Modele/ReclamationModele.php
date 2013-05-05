<?php

   
	include "../Control/Configuration.php";
	
	class reclamation 
{
	private $idReclamation;
	private $sujet;
	private $text;
	private $etatM;
	private $etatC;
	private $traitement;
	private $date_envoi;
	private $IdCollaborateur;
	private $IdClient;
	
	function __construct($idReclamation , $sujet , $text , $etatM , $etatc , $traitement , $date_envoi,$IdCollaborateur,$IdClient)
	
	{
		$this->idReclamation = $idReclamation;
		
		$this->sujet = $sujet;
		
		$this->text = $text;
		
		$this->etatM = $etatM;
		
		$this->etatc = $etatc;
		
		$this->traitement = $traitement;
		
		$this->date_envoi = $date_envoi;
		
		$this->IdCollaborateur = $IdCollaborateur;
		
		$this->IdClient = $IdClient;
	}
	
	function __construct( $sujet , $text , $etatM , $etatc , $traitement , $date_envoi,$IdCollaborateur,$IdClient)
	
	{
		$this->sujet = $sujet;
		$this->text = $text;
		$this->etatM = $etatM;
		$this->etatc = $etatc;
		$this->traitement = $traitement;
		$this->date_envoi = $date_envoi;
		$this->IdCollaborateur = $IdCollaborateur;
		$this->IdClient = $IdClient;
	}
	
	/**
	 * @return the $idReclamation
	 */
	public function getIdReclamation() {
		return $this->idReclamation;
	}

/**
	 * @return the $sujet
	 */
	public function getSujet() {
		return $this->sujet;
	}

/**
	 * @return the $text
	 */
	public function getText() {
		return $this->text;
	}

/**
	 * @return the $etatM
	 */
	public function getEtatM() {
		return $this->etatM;
	}

/**
	 * @return the $etatC
	 */
	public function getEtatC() {
		return $this->etatC;
	}

/**
	 * @return the $traitement
	 */
	public function getTraitement() {
		return $this->traitement;
	}

/**
	 * @return the $date_envoi
	 */
	public function getDate_envoi() {
		return $this->date_envoi;
	}

/**
	 * @return the $IdCollaborateur
	 */
	public function getIdCollaborateur() {
		return $this->IdCollaborateur;
	}

/**
	 * @return the $IdClient
	 */
	public function getIdClient() {
		return $this->IdClient;
	}

/**
	 * @param field_type $idReclamation
	 */
	public function setIdReclamation($idReclamation) {
		$this->idReclamation = $idReclamation;
	}

/**
	 * @param field_type $sujet
	 */
	public function setSujet($sujet) {
		$this->sujet = $sujet;
	}

/**
	 * @param field_type $text
	 */
	public function setText($text) {
		$this->text = $text;
	}

/**
	 * @param field_type $etatM
	 */
	public function setEtatM($etatM) {
		$this->etatM = $etatM;
	}

/**
	 * @param field_type $etatC
	 */
	public function setEtatC($etatC) {
		$this->etatC = $etatC;
	}

/**
	 * @param field_type $traitement
	 */
	public function setTraitement($traitement) {
		$this->traitement = $traitement;
	}

/**
	 * @param field_type $date_envoi
	 */
	public function setDate_envoi($date_envoi) {
		$this->date_envoi = $date_envoi;
	}

/**
	 * @param field_type $IdCollaborateur
	 */
	public function setIdCollaborateur($IdCollaborateur) {
		$this->IdCollaborateur = $IdCollaborateur;
	}

/**
	 * @param field_type $IdClient
	 */
	public function setIdClient($IdClient) {
		$this->IdClient = $IdClient;
	}

	
		
		function AjouterReclamation ($R)
		{			
			$Requete = "insert into reclamation
						(
						idReclamation,
					    Sujet ,
					    text,
						etatM,
						etatC,
						traitement ,
						date_envoi,
						IdCollaborateur,
						IdClient
						 
						
					    
													
						)
						values
						(
							'" .$R->getIdReclamation()."',
							'" .$R->getSujet()."',
							'" .$R->getText()."',
							'" .$R->getEtatM()."',
							'" .$R->getEtatC()."'
							'" .$R->getTraitement()."'
							'" .$R->getDate_envoi()."'
							'" .$R->getIdCollaborateur()."'
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
		
		
		$Requete="update  `reclamation` set  `Sujet` =  '".$E->getSujet()."',`text` =  '".$E->getText()."',`etatM` =  '".$E->getEtatM()."',`etatC` =  '".$E->getEtatC(). "',`traitement` =  '".$E->getTraitement()."',`date_envoi` =  '".$E->getDate_envoi()."',`IdCollaborateur` =  '".$E->getIdCollaborateur()."',`IdClient` =  '".$E->getIdClient(). ;
			
		
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
					
					
					
							 $R = new reclamation (0,"","","","","","","","");
							 $R->setIdReclamation($ligne["IdReclamation"]);		
							 $R->setSujet($ligne["Sujet"]);
							 $R->setText($ligne["text"]);
							 $R->setEtatM($ligne["etatM"]);
							 $R->setEtatC($ligne["etatC"]);
							 $R->setTraitement($ligne["traitement"]);
							 $R->setDate_envoi($ligne["date_envoi"]);
							 $R->setIdCollaborateur($ligne["IdCollaborateur"]);
							 $R->setIdClient($ligne["IdClient"]);
							 
							
					         $tab[$i] = $R;
					
					
					
				
					
					
					$i++;
					
				}
		
			return $tab ;
			
	}
	
	}

	?>
