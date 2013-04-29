<?php
session_start();
$logR=$_POST['Nom-utilisateur'];
$pwdR=$_POST['mot_de_passe'];

$host='localhost';
$user='root';
$pwd='';
$nomdb='zago';


$lien=mysql_connect($host,$user,$pwd);
mysql_select_db($nomdb,$lien);

$requete="select * from etudiant where AdresseElectronique='".$logR."' AND MotDePasse='".$pwdR."'";
$resultat= mysql_query($requete);
$r1="select * from recruteur where AdresseElectronique='".$logR."' AND MotDePasse='".$pwdR."'";
$r= mysql_query($r1);
if (mysql_num_rows($resultat)==1)
{

while($ligne=mysql_fetch_array($resultat))
{
	$id=$ligne['IdEtudiant'];
}
	$_SESSION['IdEtudiant']=$id;
	header("location:../Vue/VueAccueilEtudiant.html");
}
elseif (mysql_num_rows($r)==1)
{

while($ligne=mysql_fetch_array($r))
{
	$id=$ligne['IdRecruteur'];
}
$_SESSION['IdRecruteur'] = $id;
header("location:../Vue/VueAccueilRecruteur.html");
}
else
{

header("location:../Vue/VueAccueil.html");
}
?>
