<?php
//include('ClasseClient.php');
include('../Modele/ClientModele.php');

$R = new client (0,"","","","","","","");
					
					$R->setNom($_POST['Nom']);
					$R->setPrenom($_POST['Prenom']);
					$R->setCIN($_POST['CIN']);
					$R->setAdresse($_POST['Adresse']);
					$R->setEmail($_POST['Email']);
					$R->setLogin($_POST['Login']);
					$R->setMdp($_POST['Password']);
					
$RM = new ClientModele();
$RM->AjouterClient ($R);
header ( "location: ../Vue/VueAccueil.html");

?>