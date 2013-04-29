 <?php 
	$serveur = "localhost" ;
	$user = "root";
	$mot = "";
	$bd = "gl";

	$lien=@mysql_connect($serveur,$user,$mot) or die("Erreur de connexion");
	mysql_select_db($bd,$lien);
	
	
		?>