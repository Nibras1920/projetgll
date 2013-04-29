<?php
include ('CollaborateurModele.php');
 
 $Rep=new collaborateur(0,"","","","","","");
  $id=$_GET['idCollaborateur'];
 
 $Rs = new CollaborateurModele();
 $Rs->SupprimerCollaborateur($id);


header ('location:valider_afficher.php');

?>