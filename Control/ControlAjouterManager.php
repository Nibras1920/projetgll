<?php

include('../Modele/ManagerModele.php');

$R = new manager (0,"","","","","","","");
					
					$R->setNom($_POST['Nom']);
					$R->setPrenom($_POST['Prenom']);
					$R->setEmail($_POST['Email']);
					$R->setLogin($_POST['Login']);
					$R->setPassword($_POST['Password']);
					
$RM = new ManagerModele();
$RM->AjouterManager ($R);
header ( "location: ../Vue/AccueilAdmin.html");

?>