<?php
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

	
	
}
	
