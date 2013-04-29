<?php
//Declaration des parametres
	$serveur = "localhost" ;
	$utilisateur = "root";
	$pwd = "";
	$bd = "gl";

//connexion au serveur BD
$lien = mysql_connect($serveur,$utilisateur,$pwd)/*En cas d'erreur */or die("impossible de se connecter");

//selection de la base de donnes
mysql_select_db($bd, $lien);

$id = $_POST['b'];

//definition des requetes mysql pour afficher la liste des clients
$query = "delete from collaborateur where idCollaborateur=$id ";
mysql_query($query);

header("location:SupprimerCollaborateur.php");
?>