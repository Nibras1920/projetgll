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
<!--header end-->
<!--content -->
			
<fieldset>
  <legend>Rechercher un Collaborateur par Service :</legend>
  
  <p>Service  :
    
     <?php 
	$serveur = "localhost" ;
	$user = "root";
	$mot = "";
	$bd = "gl";

	$lien=@mysql_connect($serveur,$user,$mot) or die("Erreur de connexion");
	mysql_select_db($bd,$lien);
	
	$requete="select distinct Service from collaborateur;";
	$resultat=mysql_query($requete);
	while ($ligne=mysql_fetch_array($resultat)){
	?>
      <table>
      <tr>
      <td>Service</td><td>Option de Recherche</td>
      
<tr align="center" valign="middle">
	
	
	<td><?php echo $ligne['Service'];?></td>
    
    
    <td><input type="radio" name="b" value="<?php echo $ligne['Service'];?>" /></td>	
</tr>

</table>
<?php }?>
  </p>
 
  




<table width="297" border="5" bordercolor="#FFFFFF">
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

</tr>
<?php
if(isset($service)) $service = $_GET['service'];
if(!isset($service) || $service == null) $service = 'Informatique';
$req="SELECT * FROM collaborateur WHERE Service = '$service';";


	
$cur=mysql_query($req);

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

</fieldset>
<div id="zone"> </div>
</body>
</html>

