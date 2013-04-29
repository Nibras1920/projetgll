// JavaScript Document

function verification(){
	xhr = new XMLHttpRequest;
	var URL="verif.php";
	xhr.open("GET",URL+"?nom="+document.getElementById('nom').value, true);
	xhr.send(null);
	xhr.onreadystatechange=result;
	
	function result(){
	document.getElementById('verifuser').innerHTML = xhr.responseText;
	
		}	
	}
	
function inscription(){
	xhr = new XMLHttpRequest;
	var URL="inscription.php";
	xhr.open("GET",URL+"?nom="+document.getElementById('nom').value+"&prenom="+document.getElementById('prenom').value+"&classe="+document.getElementById('classe').value, true);
	xhr.send(null);
	xhr.onreadystatechange=result;
	
	function result(){
	document.getElementById('inscription').innerHTML = xhr.responseText;
	recherche();
		}
return false;		
	}


function recherche(){
	xhr = new XMLHttpRequest;
	var URL="afficherclient.php";
	xhr.open("GET",URL+"?nom="+document.getElementById('recherche').value, true);
	xhr.send(null);
	xhr.onreadystatechange=result;
	
	function result(){
	document.getElementById('resultats').innerHTML = xhr.responseText;
	
		}	
	}
	
	
	
	
	
	// JavaScript Document
	
	
	