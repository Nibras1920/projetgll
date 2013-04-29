<?php
include('ClasseCollaborateur.php');
include('CollaborateurModele.php');

$R= new collaborateur("","","","","","");
					
					$R->setNom($_POST['Nom']);
					$R->setPrenom($_POST['Prenom']);
					$R->setcin($_POST['CIN']);
					$R->setEmail($_POST['Email']);
					$R->setLogin($_POST['Login']);
					$R->setMdp($_POST['Password']);
					
$RM = new CollaborateurModele();
$RM->AjouterCollaborateur($R);
header ( "location: ../Vue/VueAccueil.html");

?>