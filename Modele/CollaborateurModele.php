<?php

    include ('../Entité/ClassCollaborateur.php');
	include ('../Control/Configuration.php');
	class CollaborateurModele
	{
		function __construct ()
		{
			$Conf = new Configuration ();
			$Conf->Connexion ();
		}
		
		function AjouterCollaborateur ($R)
		{			
			$Requete = "insert into collaborateur
						(
						
					    Nom ,
					    Prenom,
						CIN,
						Email ,
						Login ,
					    Password 
					    
													
						)
						values
						(
							
							'" .$R->getNom()."',
							'" .$R->getPrenom()."',
							'" .$R->getcin()."',
							'" .$R->getEmail()."',
							'" .$R->getLogin()."',
							'" .$R->getMdp()."'
																	
						)";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function SupprimerCollaborateur ($id)
		{		
	        //$id= $E->getId();	
			$Requete = "delete from collaborateur where IdCollaborateur = '$id'";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
	
		function ModifierCollaborateur ($E)
		{		
		
		
		$Requete="update  `collaborateur` set  `Nom` =  '".$E->getNom()."',`Prenom` =  '".$E->getPrenom()."',`CIN` =  '".$E->getcin()."',`Email` =  '".$E->getEmail()."',`Login` =  '".$E->getLogin()."',`Password` =  '".$E->getMpd()."' WHERE  `collaborateur`.`IdCollaborateur` =".$E->getId_Collaborateur() ;
			
		
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function listeCollaborateur ()
		{			
			
			$Requete = "select * from collaborateur";
			$cur = mysql_query ($Requete) or die ("Erreur".mysql_error());
			
			$tab = array();
			$i = 0;
			
			
			while($ligne = mysql_fetch_array($cur))
				{
					//echo $i;
					
					
					
							 $R = new collaborateur (0,"","","","","","");
							 $R->setId_Client($ligne["IdClient"]);		
							 $R->setNom($ligne["Nom"]);
							 $R->setPrenom($ligne["Prenom"]);
							 $R->setcin($ligne["CIN"]);
							 $R->setEmail($ligne["Email"]);
							 $R->setLogin($ligne["Login"]);
							 $R->setMdp($ligne["Password"]);
							
					         $tab[$i] = $R;
					
					
					
				
					
					
					$i++;
					
				}
		
			return $tab ;
			
	}
	
	}
	$RM = new CollaborateurModele();
	//$R=new collaborateur();
	//$RM->AjouterCollaborateur($R);
	//$RM->SupprimerCollaborateur(7);
	//$RM->ModifierCollaborateur($R);
	//$Liste= $RM->listeCollaborateur();
	?>
<table border="1" >
	<tr>
			<th>IdCollaborateur</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>CIN</th>
			<th>Email</th>
			<th>Login</th>
			<th>Password</th>
			
	</tr>
<?php 
	foreach ($Liste as $Etu ):
			
				echo "<tr>";
				echo "<td>".$Etu->getId_collaborateur()."</td>";
				echo "<td>".$Etu->getNom()."</td>";
				echo "<td>".$Etu->getPrenom()."</td>";
				echo "<td>".$Etu->getcin()."</td>";
				echo "<td>".$Etu->getEmail()."</td>";
				echo "<td>".$Etu->getLogin()."</td>";
				echo "<td>".$Etu->getMdp()."</td>";
	endforeach ;
	
	
?>	
</table>