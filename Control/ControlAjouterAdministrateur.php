<?php

include('../Modele/AdminModele.php');

$R = new admin (0,"","","","","","","");
					
					$R->setNom($_POST['Nom']);
					$R->setPrenom($_POST['Prenom']);
					$R->setEmail($_POST['Email']);
					$R->setLogin($_POST['Login']);
					$R->setPassword($_POST['Password']);
					
$RM = new AdministrateurModele();
$RM->AjouterAministrateur ($R);
header ( "location: ../Vue/AccueilAdmin.html");

?>