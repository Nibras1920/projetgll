<?php
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
		
		
		
		
	/*
$R=new collaborateur(5,"Chebil","Khairi","08756987","chebil.khairi@googlemail.com","khairi","chebil");
echo $R->getId()."<br>";
echo $R->getNom()."<br>";
echo $R->getPrenom()."<br>";
echo $R->getCIN()."<br>";
echo $R->getEmail()."<br>";
echo $R->getLogin()."<br>";
echo $R->getMdp()."<br>"
*/

?>

