<!DOCTYPE html>
<html lang="en">
	<head>
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
				
			</header>
<!--header end-->
<!--content -->
			<article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
				<div class="wrapper">
					<h2>Modifier mes infos personnelles</h2>
					
<?php
session_start();
$id = $_SESSION['IdCollaborateur'];

$host='localhost';
$user='root';
$pwd='';
$nomdb='gl';

//echo $id ;
$lien=mysql_connect($host,$user,$pwd);
mysql_select_db($nomdb,$lien);

$requete="select * from collaborateur where IdCollaborateur=" .$id;
$resultat= mysql_query($requete);

?>
<form id="ContactForm" method="post" action="../Control/ControlModifierCollaborateur.php">
					
			
								
<?php 
while($ligne=mysql_fetch_array($resultat))
{$Nom=$ligne['Nom'];
$Prenom=$ligne['Prenom'];
$CIN=$ligne['CIN'];
$Email=$ligne['Email'];
$Login=$ligne['Login'];
$Password=$ligne['Password'];

}
						
?>	


                              <div  class="wrapper">
								<span>Nom:</span>
								<div class="bg"><input type="text" value="<?php echo $Nom;?>" class="input" name="Nom" ></div>								
							</div>							
							<div  class="wrapper">
								<span>Prenom:</span>
								<div class="bg"><input type="text" value="<?php echo $Prenom;?>" class="input" name="Prenom" ></div>								
							</div>
								 <div  class="wrapper">
								<span>CIN:</span>
								<div class="bg"><input type="text" value="<?php echo $CIN;?>" class="input" name="CIN" ></div>								
							</div>		
							
							<div  class="wrapper">
								<span>Email:</span>
								<div class="bg"><input type="text" value="<?php echo $Email;?>" class="input" name="Email" ></div>								
							</div>
							<div  class="wrapper">
								<span>Login:</span>
								<div class="bg"><input type="text" value="<?php echo $Login;?>" class="input" name="Login" ></div>								
							</div>
							<div  class="wrapper">
								<span>Password:</span>
								<div class="bg"><input type="text" value="<?php echo $Password;?>" class="input" name="Password" ></div>								
							</div>
							
							</br>
			
							<a href="../Vue/VueAccueilCollaborateur.html"class="button1" onClick="document.getElementById('ContactForm').submit()">Annuler</a>
						<input type="submit" class="button1" value="Modifier"></a>
							
							
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
					<li><a href="#" class="normaltip" title="Facebook"><img src="../images/icon1.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="../images/icon2.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Picasa"><img src="../images/icon3.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="YouTube"><img src="../images/icon4.jpg" alt=""></a></li>
				</ul>
				GoStage.com &copy; 2013 
				<!-- {%FOOTER_LINK} -->
			</footer>
<!--footer end-->
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>