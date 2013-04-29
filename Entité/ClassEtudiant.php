<?php
class etudiant
{
	private $IdClient;
	private $Nom ;
	private $Prenom;
	private $CIN ;
	private $Adresse;
	priate  $Email ;
	private $Login ;
	private $MotDePasse ;
	
	
	
		function __construct($IdEtudiant,$AdresseElectronique,$MotDePasse,$Nom,$Prenom,$Age,$Depart)
		{
			$this->IdEtudiant = $IdEtudiant;
			$this->AdresseElectronique = $AdresseElectronique;
			$this->MotDePasse = $MotDePasse;
			$this->Nom = $Nom;
			$this->Prenom=$Prenom;
			$this->Age=$Age;
			$this->Depart=$Depart;
		}
		function getId_etudiant()
		{
			return $this->IdEtudiant;
		}
		function setId_etudiant($I)
		{
			$this->IdEtudiant = $I;
		}
		function getAdd()
		{
			return $this->AdresseElectronique;
		}
		function setAdd($A)
		{
			$this->AdresseElectronique=$A;
		}
		function getMdp()
		{
			return $this->MotDePasse;
		}
		function setMdp($M)
		{
			$this->MotDePasse=$M;
		}
		function getNom()
		{
			return $this->Nom;
		}
		function setNom($N)
		{
			$this->Nom=$N;
		}
		function getPre()
		{
			return $this->Prenom;
		}
		function setPre($P)
		{
			$this->Prenom=$P;
		}
		function getAge()
		{
			return $this->Age;
		}
		function setAge($Ag)
		{
			$this->Age=$Ag;
		}
		function getDep()
		{
			return $this->Depart;
		}
		function setDep($D)
		{
			$this->Depart=$D;
		}
	}
	/*
$R=new etudiant(202,"Ariana","test","hejer","bachoual",20,"Tunis");
echo $R->getId()."<br>";
echo $R->getAdd()."<br>";
echo $R->getMdp()."<br>";
echo $R->getNom()."<br>";
echo $R->getPre()."<br>";
echo $R->getAge()."<br>";
echo $R->getDep()."<br>";
*/

?>

