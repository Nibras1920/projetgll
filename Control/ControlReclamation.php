<?php
//include('ClasseReclamation.php');
include('../Modele/ReclamationModele.php');

$R = new client (NULL,"","","","","","",NULL,NULL);
  				
					$R->setsujet($_POST['sujet']);
					$R->settext($_POST['text']);
					$R->setetatM($_POST['etatM']);
					$R->setetatC($_POST['etatC']);
					$R->settraitement($_POST['traitement']);
					$R->setdate_envoi($_POST['date_envoi']);
					
					
$RM = new ReclamationModele();
$RM->ReclamationModele ($R);
header ( "location: ../Vue/VueAccueil.html");

?>
