<?php
include ('ClientModele.php');
 
 $Rep=new client(0,"","","","","","");
  $id=$_GET['idClient'];
 
 $Rs = new ClientModele();
 $Rs->SupprimerClient($id);


header ('location:valider_afficher.php');

?>