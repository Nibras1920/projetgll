<?php
class client
{
	private $IdClient;
	private $Nom ;
	private $Prenom;
	private $CIN ;
	private $Adresse;
	private  $Email ;
	private $Login ;
	private $Password ;
	
	
		
		
		function __construct($IdClient , $Nom , $Prenom , $CIN , $Adresse , $Email , $Login , $Password)
		{
			$this->IdClient = $IdClient;
			$this->Nom = $Nom;
			$this->Prenom = $Prenom;
			$this->Cin = $CIN;
			$this->Adresse = $Adresse;
			$this->Email = $Email;
			$this->Login = $Login;
			$this->Password = $Password;
		}
		
		
		function getId_client()
		{
			return $this->IdClient;
		}
		function setId_client($I)
		{
			$this->IdClient = $I;
		}
		
		function getNom()
		{
			return $this->Nom;
		}
		function setNom($N)
		{
			$this->Nom=$N;
		}
		function getPrenom()
		{
			return $this->Prenom;
		}
		function setPrenom($P)
		{
			$this->Prenom=$P;
		}
		function getcin() {
			$this->CIN;
		}
		function setcin($N){
			$this->CIN=$N;
		}
		
		function getAdresse()
		{
			return $this->Adresse;
		}
		function setAdresse($A)
		{
			$this->Adresse=$A;
		}
		
		function getEmail()
		{
			return $this->Email;
		}
		function setEmail($l)
		{
			$this->Email=$l;
		}
		
		function getLogin()
		{
			return $this->Login;
		}
		function setLogin($l)
		{
			$this->Login=$l;
		}
		
		function getMdp()
		{
			return $this->Password;
		}
		function setMdp($P)
		{
			$this->Password=$M;
		}
		
		
		
		
	/*
$R=new client(202,"Chebil","Khairi","08756987","Ariana","chebil.khairi@googlemail.com","khairi","khairi");
echo $R->getId()."<br>";
echo $R->getNom()."<br>";
echo $R->getPrenom()."<br>";
echo $R->getCIN()."<br>";
echo $R->getAdresse()."<br>";
echo $R->getEmail()."<br>";
echo $R->getLogin()."<br>";
echo $R->getMdp()."<br>";

*/

?>

