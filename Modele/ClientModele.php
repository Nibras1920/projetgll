<?php

    include ('ClassClient.php');
	include ('Configuration.php');
	class ClientModele
	{
		function __construct ()
		{
			$Conf = new Configuration ();
			$Conf->Connexion ();
		}
		
		function AjouterClient ($R)
		{			
			$Requete = "insert into etudiant
						(
						IdClient,
					    Nom ,
					    Prenom,
						CIN,
						Adresse ,
						Email ,
						Login ,
					    Password 
					    
													
						)
						values
						(
							'".$R->getId_client()."',
							'" .$R->getNom()."',
							'" .$R->getPrenom()."',
							'" .$R->getcin()."',
							'" .$R->getAdresse()."',
							'" .$R->getEmail()."',
							'" .$R->getLogin()."',
							'" .$R->getMdp()."'
																	
						)";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function SupprimerClient ($id)
		{		
	        //$id= $E->getId();	
			$Requete = "delete from client where IdClient = '$id'";
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
	
		function ModifierClient ($E)
		{		
		
		
		$Requete="update  `client` set  `Nom` =  '".$E->getNom()."',`Prenom` =  '".$E->getPrenom()."',`CIN` =  '".$E->getcin()."',
`Adresse` =  '".$E->getAdresse()."',`Email` =  '".$E->getEmail()."',`Login` =  '".$E->getLogin()."',`Password` =  '".$E->getMpd()."' WHERE  `client`.`IdClient` =".$E->getId_Client() ;
			
		
			mysql_query ($Requete) or die ("Erreur".mysql_error());
		}
		
		function listeClient ()
		{			
			
			$Requete = "select * from client";
			$cur = mysql_query ($Requete) or die ("Erreur".mysql_error());
			
			$tab = array();
			$i = 0;
			
			
			while($ligne = mysql_fetch_array($cur))
				{
					//echo $i;
					
					
					
							 $R = new client (0,"","","","","","","");
							 $R->setId_Client($ligne["IdClient"]);		
							 $R->setNom($ligne["Nom"]);
							 $R->setPrenom($ligne["Prenom"]);
							 $R->setcin($ligne["CIN"]);
							 $R->setAdresse($ligne["Adresse"]);
							 $R->setEmail($ligne["Email"]);
							 $R->setLogin($ligne["Login"]);
							 $R->setMdp($ligne["Password"]);
							
					         $tab[$i] = $R;
					
					
					
				
					
					
					$i++;
					
				}
		
			return $tab ;
			
	}
	
	}
	$RM = new ClientModele ();
	$R=new client(13,"hamadi","salah","1483123","tunis","hamadi@yahoo.fr","hamadi","hamadi");
	//$RM->AjouterClient($R);
	//$RM->SupprimerClient(7);
	$RM->ModifierClient($R);
	$Liste= $RM->listeClient();
	?>
<table border="1" >
	<tr>
			<th>IdClient</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>CIN</th>
			<th>Adresse</th>
			<th>Email</th>
			<th>Login</th>
			<th>Password</th>
			
	</tr>
<?php 
	foreach ($Liste as $Etu ):
			
				echo "<tr>";
				echo "<td>".$Etu->getId_client()."</td>";
				echo "<td>".$Etu->getNom()."</td>";
				echo "<td>".$Etu->getPrenom()."</td>";
				echo "<td>".$Etu->getcin()."</td>";
				echo "<td>".$Etu->getAdresse()."</td>";
				echo "<td>".$Etu->getEmail()."</td>";
				echo "<td>".$Etu->getLogin()."</td>";
				echo "<td>".$Etu->getMdp()."</td>";
	endforeach ;
	
	
?>	
</table>