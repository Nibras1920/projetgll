<?php
	
		class Reponse
	{
	
	    protected $id_reponse;
		protected $libelle_reponse;
		
		
		
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
		function __construct($id_reponse,$libelle_reponse)
	 	{
		    $this->id_reponse = $id_reponse;
			$this->libelle_reponse = $libelle_reponse;

		}
		
		/*function Rouler()
		{
			echo "Rouler";
		}
		
		function Vitesse()
		{
			return 50;		
		}*/
		
		//Function gets :
		function getId_reponse()
		{
			return $this->id_reponse;
		}
		function getLibelle_reponse()

		{
			return $this->libelle_reponse;
		}
		
		
		//Function sets
		function setId_reponse($Id2)
		{
			$this->id_reponse= $Id2;
		}
		
		function setLibelle_reponse($NO)
		{
			$this->libelle_reponse = $NO;
		}
		
		
		
		}