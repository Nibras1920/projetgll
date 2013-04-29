<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="../js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="../js/cufon-yui.js"></script>
		<script type="text/javascript" src="../js/cufon-replace.js"></script>  
		<script type="text/javascript" src="../js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="../js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="../js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="../js/atooltip.jquery.js"></script>
		<script>
		/*$("#dialog").dialog({
   autoOpen: false,
   modal: true,
   buttons : {
        "Confirm" : function() {
            alert("You have confirmed!");            
        },
        "Cancel" : function() {
          $(this).dialog("close");
        }
      }
    });

$("#callConfirm").on("click", function(e) {
    e.preventDefault();
    $("#dialog").dialog("open");
});*/
		</script>
</head>


<body id="page5">
	
		<div class="main">
<!--header -->
			<header>
				<div class="wrapper">
					 <h2><span class="color1">GoStage</span><span>.com</span></h2>	
				
				</div>
                <nav>
					<ul id="menu">
					
					
					<li><a href="AccueilManager.html"><span>Accueil</span></a></li>
					
						
					</ul>
				</nav>
				
			</header>
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
//definition des requetes mysql pour afficher la liste des clients
$query = "select* from collaborateur";
//execution de requete
$cur = mysql_query($query);
?>
<h3>Modifier Collaborateur</h3>
<form action="ModifierColl.php" method="post">
<table border="5" bordercolor="#009933">
<tr align="center" valign="top" bgcolor="#009933" class="color1">
	
	<th width="69" nowrap="nowrap"><p><strong>Nom</strong></p></th>
    <td>   <p>&nbsp;</p></td>
	<th width="69" nowrap="nowrap"><p><strong>Prenom</strong></p></th>
    <td>   <p>&nbsp;</p></td>
	<th width="69" nowrap="nowrap"><p><strong>CIN</strong></p></th>
    <td>   <p>&nbsp;</p></td>
	<th width="69" nowrap="nowrap"><p><strong>Email</strong></p></th>
	<td>   <p>&nbsp;</p></td>
    <th width="69" nowrap="nowrap"><p><strong>Service</strong></p></th>
    <td>   <p>&nbsp;</p></td>
    <th width="69" nowrap="nowrap"><p><strong>Supprimer</strong></p></th>
</tr>
<?php
while($ligne = mysql_fetch_array($cur))
{
?>
<tr align="center" valign="middle">
	
	
	<td><?php echo $ligne['Nom'];?></td>
    <td></td>
	<td><?php echo $ligne['Prenom'];?></td>
    <td></td>
	<td><?php echo $ligne['CIN'];?></td>
    <td></td>
	<td><?php echo $ligne['Email'];?></td>
    <td></td>
    <td><?php echo $ligne['Service'];?></td>
    <td></td>
    <td><input type="radio" name="b" value="<?php echo $ligne['idCollaborateur'];?>" /></td>	
</tr>
<?php
}
?>
</table>
<input type="submit" class="button1" value="Modifier" />
</form>
</body>
</html>
