<?php
	class recruteur
{
                private $IdRecruteur;
				private $AdresseElectronique;
				private $MotDePasse ;
				private $NomEntreprise ;
				private $AdresseEntreprise ;
				private $Departement ;
				private $NomRecruteur ;
				private $PrenomRecruteur ;
				private $AgeRecruteur ;

function __construct ($IdRecruteur,$AdresseElectronique,$MotDePasse,$NomEntreprise,$AdresseEntreprise,$Departement,$NomRecruteur,$PrenomRecruteur,$AgeRecruteur)
{				
				//Constructeur par paramètre : 
				//(on peu utiliser qu'un seul constructeur)
				$this->IdRecruteur=$IdRecruteur;
				$this->AdresseElectronique =$AdresseElectronique ;
				$this->MotDePasse = $MotDePasse; 
				$this->NomEntreprise=$NomEntreprise ;
				$this->AdresseEntreprise=$AdresseEntreprise ;
			    $this->Departement=$Departement ;
				$this->NomRecruteur=$NomRecruteur ;
				$this->PrenomRecruteur=$PrenomRecruteur ;
				$this->AgeRecruteur=$AgeRecruteur ;
				
}
				//Function gets :
function getid_recruteur()
{
				return $this->IdRecruteur;
}
function getadresse_electronique()
{
				return $this->AdresseElectronique;
}


function getmot_de_passe()
{
				return $this->MotDePasse;
}

function getnom_entreprise()
{
				return $this->NomEntreprise;
}


function getdepartement()
{
				return $this->Departement;
}

function getadresse_entreprise()
{
				return $this->AdresseEntreprise;
}

function getnom_recruteur()
{
				return $this->NomRecruteur;
}

function getprenom_recruteur()
{
				return $this->PrenomRecruteur;
}

function getage_recruteur()
{
				return $this->AgeRecruteur;
}
				//Function sets :
function setadresse_electronique($A)
{
				$this->AdresseElectronique = $A;
}
function setmot_de_passe($M)
{
				$this->MotDePasse = $M;
}
function setnom_entreprise($N)
{
				$this->NomEntreprise = $N;
}
function setadresse_entreprise($AD)
{
				$this->AdresseEntreprise = $AD;
}
function setdepartement($D)
{
				$this->Departement = $D;
}
function setnom_recruteur($NO)
{
				$this->NomRecruteur = $NO;
}
function setprenom_recruteur($P)
{
				$this->PrenomRecruteur = $P;
}
function setage_recruteur($AG)
{
				$this->AgeRecruteur = $AG;
}
function setid_recruteur($I)
{
				$this->IdRecruteur = $I;
}
}

?>