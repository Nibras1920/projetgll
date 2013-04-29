<?php
	class Question
	{
	
	    protected $id_question;
		protected $libelle_question;
		
		/*Constructeur par default :
		function __construct()
		{
			$this->Id_question = 550;
			$this->Libelle_question = "bleu";
		}*/
		
		//Constructeur par paramètre : 
		//(on peu utiliser qu'un seul constructeur)
		function __construct($id_question,$libelle_question)
	 	{
		    $this->id_question = $id_question;
			$this->libelle_question = $libelle_question;
		}
		
		
		function getId_question()
		{
			return $this->id_question;
		}
		function getLibelle_question()
		{
			return $this->libelle_question;
		}
		
		
		//Function sets
		function setId_question($Id)
		{
			$this->id_question = $Id;
		}
		
		function setLibelle_question($L)
		{
			$this->libelle_question = $L;
		}
		
	
	
	
		
	
	}
	
	/*class Berline extends Voiture
	{
		private $Options;
		
		function __construct($Couleur,$Puissance,$Marque,$Prix,$Options)
		{
			parent::__construct($Couleur,$Puissance,$Marque,$Prix);
			$this->Options = $Options;
		}
		
		function getOptions()
		{
			return $this->Options;
		}
		
		
		//Function gets
		function setOptions($C)
		{
			$this->Options = $C;
		}
		
	}
	
	class Utilitaire extends Voiture
	{
		private $Options;
		
		function __construct($Couleur,$Puissance,$Marque,$Prix,$Volume)
		{
			parent::__construct($Couleur,$Puissance,$Marque,$Prix);
			$this->Volume = $Volume;
		}
		
		function getVolume()
		{
			return $this->Volume;
		}
		
		
		//Function gets
		function setVolume($C)
		{
			$this->Volume = $C;
		}
		
	}*/
	
	/*$V = new Berline ("Rouge",550,"Nissan GTR R35",85.959,"Cabriolee");

	echo "Berline :<br><br>";
	echo "Marque : ";
	echo $V->getMarque()."<br>";
	echo "Couleur : ";
	echo $V->getCol()."<br>";
	echo "Puissance : ";
	echo $V->getPuis()."<br>";
	echo "Prix : ";
	echo $V->getPrix()."<br>";
	echo "Options : ";
	echo $V->getOptions()."<br>";
	echo "<br>";
	
	echo "function Rouler : ";
	$V->Rouler();
	echo "<br>";
	echo "Vitesse = ";
	echo $V->Vitesse();
	echo "<br>";
	
	$V->setCol("Bleu");
	$V->setMarque("Skyline R34");
	$V->setPrix("35.950");
	$V->setPuis("430");
	$V->setOptions("Coupee");
	
	
	//echo "<br>";
	echo "Berline apres modification : <br><br>";
	echo "Marque : ";
	echo $V->getMarque()."<br>";
	echo "Couleur : ";
	echo $V->getCol()."<br>";
	echo "Puissance : ";
	echo $V->getPuis()."<br>";
	echo "Prix : ";
	echo $V->getPrix()."<br>";
	echo "Options : ";
	echo $V->getOptions()."<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
	$U = new Utilitaire ("Rouge",550,"Nissan GTR R35",85.959,25);

	echo "Utilitaire :<br><br>";
	echo "Marque : ";
	echo $U->getMarque()."<br>";
	echo "Couleur : ";
	echo $U->getCol()."<br>";
	echo "Puissance : ";
	echo $U->getPuis()."<br>";
	echo "Prix : ";
	echo $U->getPrix()."<br>";
	echo "Volume : ";
	echo $U->getVolume()."<br>";
	echo "<br>";
	
	echo "function Rouler : ";
	$U->Rouler();
	echo "<br>";
	echo "Vitesse = ";
	echo $U->Vitesse();
	echo "<br>";
	
	$U->setCol("Bleu");
	$U->setMarque("Skyline R34");
	$U->setPrix("35.950");
	$U->setPuis("430");
	$U->setVolume(30);
	
	//echo "<br>";
	echo "Utilitaire apres modification : <br><br>";
	echo "Marque : ";
	echo $U->getMarque()."<br>";
	echo "Couleur : ";
	echo $U->getCol()."<br>";
	echo "Puissance : ";
	echo $U->getPuis()."<br>";
	echo "Prix : ";
	echo $U->getPrix()."<br>";
	echo "Volume : ";
	echo $U->getVolume()."<br>";
	echo "<br>";*/
	/*function Rouler()
		{
			echo "Rouler";
		}
		
		function Vitesse()
		{
			return 50;		
		}*/
		
		//Function gets :
?>