<?php
$db = mysql_connect('localhost', 'root', '') or die ("<b>Erreur de connexion</b>");
mysql_select_db('gl', $db) or die ("<b>Erreur de connexion base</b>");

$nom=$_GET['nom'];

$sql=mysql_query("SELECT * FROM client WHERE nom Like '$nom%'") or die(mysql_error());


if (mysql_num_rows($sql) == 0 ) echo "Aucun résultat..." ;
else {

echo "<table align='center' border='1'>";
echo "<tr><td width='100' align='center'>id_client</td><td width='100' align='center'>nom</td><td width='100' align='center'>prenom</td><td width='100' align='center'>cin</td><td width='100' align='center'>adresse</td><td width='100' align='center'>email</td><tr>";

while($row = mysql_fetch_array($sql)) echo "<tr><td align='center'>".$row['id_client']."</td><td align='center'>".$row['nom']."</td><td align='center'>".$row['prenom']."</td><td align='center'>".$row['cin']."</td><td align='center'>".$row['adresse']."</td><td align='center'>".$row['email']."</td><tr>";

echo "</table>";
}


?>