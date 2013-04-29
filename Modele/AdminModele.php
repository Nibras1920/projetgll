<?php

   
	include "../Control/Configuration.php";
	
	class Administrateur
{
	private $IdAdministrateur;
	private $Nom ;
	private $Prenom;
	private $Email ;
	private $Login ;
	private $Password ;
	
	
	
		
		
		function __construct($IdAdministrateur , $Nom , $Prenom , $Email , $Login , $Password )
		{
			$this->IdAdministrateur = $IdAdministrateur;
			$this->Nom = $Nom;
			$this->Prenom = $Prenom;
			$this->Email = $Email;
			$this->Login = $Login;
			$this->Password = $Password;
			
		}
		
		
		function getId_admin()
		{
			return $this->IdAdministrateur;
		}
		function setId_admin($I)
		{
			$this->IdAdministrateur = $I;
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
		function getEmail() {
			$this->Email;
		}
		function setEmail($N){
			$this->Email=$N;
		}
		
		function getLogin()
		{
			return $this->Login;
		}
		function setLogin($l)
		{
			$this->Login=$l;
		}
		
		function getPassword()
		{
			return $this->Password;
		}
		function setPassword($l)
		{
			$this->Password=$l;
		}
		
}
	
	class AdministrateurModele
	{
		function __construct ()
		{
			$Conf = new Configuration ();
			$Conf->Connexion ();
		}
		
		
		function AjouterAdministrateur ($R)
		{			
			$Requete = "insert into admin
						(
						IdAdministrateur,
					    Nom ,
					    Prenom,
						Email,
						Login ,
						Password
						
					    
													
						)
						values
						(
							'" .$R->getId_admin()."',
							'" .$R->getNom()."',
							'" .$R->getPrenom()."',
							'" .$R->getEmail()."',
							'" .$R->getLogin()."',
							'" .$R->getPassword()."'
							
																	
						)";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function SupprimerAdministrateur ($id)
		{		
	        //$id= $E->getId();	
			$Requete = "delete from admin where IdAdministrateur = '$id'";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
	
		function ModifierAdministrateur ($E)
		{		
		
		
		$Requete="update  `admin` set  `Nom` =  '".$E->getNom()."',`Prenom` =  '".$E->getPrenom()."',`Email` =  '".$E->getEmail()."',`Login` =  '".$E->getLogin()."',`Password` =  '".$E->getPassword();
			
		
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function listeReclamation ()
		{			
			
			$Requete = "select * from admin";
			$cur = mysql_query ($Requete) or die ("Erreur".mysql_error());
			
			$tab = array();
			$i = 0;
			
			
			while($ligne = mysql_fetch_array($cur))
				{
					//echo $i;
					
					
					
							 $R = new admin (0,"","","","","");
							 $R->setId_admin($ligne["IdAdministrateur"]);		
							 $R->setNom($ligne["Nom"]);
							 $R->setPrenom($ligne["DPrenom"]);
							 $R->setEmail($ligne["Email"]);
							 $R->setLogin($ligne["Login"]);
							 $R->setpassword($ligne["Password"]);
							 
							
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
