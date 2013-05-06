<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>  
		<script type="text/javascript" src="js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="js/atooltip.jquery.js"></script>
		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
			</div>
		<![endif]-->
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
<!--header end-->
<!--content -->
			<article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
				<div class="wrapper">
					<h2>Modifier Les Infos </h2>
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
$query = "select * from collaborateur where idCollaborateur=$id ";
$cur=mysql_query($query);
					?>
                    
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
    	
</tr>
<?php 
}
?>
</table>
					<form id="ContactForm" method="post" action="ModifierClient.php">
						<div>
						<div  class="wrapper">
								
								<div class="bg"><input type="text" class="input" name="id_client" style="display:none"></div>
							</div>
						
						
						
						
							<div  class="wrapper">
								<span>Nom:</span>
								<div class="bg"><input type="text" class="input" name="Nom" > <?php 
							echo $cur['Nom']
								 ?></div>
							</div>
							<div  class="wrapper">
								<span>Prenom:</span>
								<div class="bg"><input type="text" class="input" name="Prenom" ><?php 
							echo $cur['Prenom']
								 ?></div>								
							</div>
							<div  class="wrapper">
								<span>CIN:</span>
								<div class="bg"><input type="text" class="input" name="CIN" ><?php 
							echo $cur['CIN']
								 ?></div>								
							</div>
							
							<div  class="wrapper">
								<span>Email:</span>
								<div class="bg"><input type="text" class="input" name="Email" ><?php 
							echo $cur['Email']
								 ?></div>								
							</div>
							<div  class="wrapper">
								<span>Service:</span>
								<div class="bg"><input type="text" class="input" name="Login" ><?php 
							echo $cur['Service']
								 ?></div>								
							</div>
							
							
							<a href="GestionCollaborateurs.html"class="button1" onClick="document.getElementById('ContactForm').submit()">Annuler</a>
							<a href="AccueilManager.html" class="button1" onClick="document.getElementById('ContactForm').submit()">Modifier</a>
							
							
						</div>
					</form>
				</div>
			</article>

						
				
	
		<div class="main">
<!--content end-->
<!--footer -->
			<footer>
				<ul id="icons">
					<li class="first">Follow Us:</li>
					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Picasa"><img src="images/icon3.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="YouTube"><img src="images/icon4.jpg" alt=""></a></li>
				</ul>
				GoStage.com &copy; 2013 
				<!-- {%FOOTER_LINK} -->
			</footer>
<!--footer end-->
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>
