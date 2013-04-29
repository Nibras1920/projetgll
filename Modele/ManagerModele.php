<?php

   
	include "../Control/Configuration.php";
	
	class manager
{
	private $IdManager;
	private $Nom ;
	private $Prenom;
	private $Email ;
	private $Login ;
	private $Password ;
	
	
	
		
		
		function __construct($IdManager , $Nom , $Prenom , $Email , $Login , $Password )
		{
			$this->IdManager = $IdManager;
			$this->Nom = $Nom;
			$this->Prenom = $Prenom;
			$this->Email = $Email;
			$this->Login = $Login;
			$this->Password = $Password;
			
		}
		
		
		function getId_manager()
		{
			return $this->IdManager;
		}
		function setId_manager($I)
		{
			$this->IdManager = $I;
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
	
	class ManagerModele
	{
		function __construct ()
		{
			$Conf = new Configuration ();
			$Conf->Connexion ();
		}
		
		
		function AjouterManager ($R)
		{			
			$Requete = "insert into manager
						(
						IdManager,
					    Nom ,
					    Prenom,
						Email,
						Login ,
						Password
						
					    
													
						)
						values
						(
							'" .$R->getId_manager()."',
							'" .$R->getNom()."',
							'" .$R->getPrenom()."',
							'" .$R->getEmail()."',
							'" .$R->getLogin()."',
							'" .$R->getPassword()."'
							
																	
						)";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function SupprimerManager ($id)
		{		
	        //$id= $E->getId();	
			$Requete = "delete from admin where IdAdministrateur = '$id'";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
	
		function ModifierManager ($E)
		{		
		
		
		$Requete="update  `manager` set  `Nom` =  '".$E->getNom()."',`Prenom` =  '".$E->getPrenom()."',`Email` =  '".$E->getEmail()."',`Login` =  '".$E->getLogin()."',`Password` =  '".$E->getPassword();
			
		
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function listeManager ()
		{			
			
			$Requete = "select * from manager";
			$cur = mysql_query ($Requete) or die ("Erreur".mysql_error());
			
			$tab = array();
			$i = 0;
			
			
			while($ligne = mysql_fetch_array($cur))
				{
					//echo $i;
					
					
					
							 $R = new manager (0,"","","","","");
							 $R->setId_manager($ligne["IdManager"]);		
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
