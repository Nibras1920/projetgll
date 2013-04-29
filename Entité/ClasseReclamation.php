<?php
class reclamation
{
	private $IdReclamation;
	private $Sujet ;
	private $Description;
	private $IdClient ;
	private  $Email ;
	private $Login ;
	private $Password ;
	
	
		
		
		function __construct($IdCollaborateur , $Nom , $Prenom , $CIN , $Email , $Login , $Password)
		{
			$this->IdCollaborateur = $IdCollaborateur;
			$this->Nom = $Nom;
			$this->Prenom = $Prenom;
			$this->Cin = $CIN;
			$this->Email = $Email;
			$this->Login = $Login;
			$this->Password = $Password;
		}
		
		
		function getId_collaborateur()
		{
			return $this->IdCollaborateur;
		}
		function setId_collaborateur($I)
		{
			$this->IdCollaborateur = $I;
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

