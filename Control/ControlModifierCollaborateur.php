<?php
include ('../Modele/CollaborateurModele.php');
	
session_start();
$id = $_SESSION['IdCollaborateur'];

$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$CIN=$_POST['CIN'];
$Email=$_POST['Email'];
$Login=$_POST['Login'];
$Password=$_POST['Password'];

 
 $R=new collaborateur($id,$Nom ,$Prenom ,$CIN ,$Email ,$Login ,$Password);
 $RM = new CollaborateurModele ();
 $RM->ModifierCollaborateur ($R,$id);
 
header ("location:../Control/ModifierCollaborateur.php");
?>
 