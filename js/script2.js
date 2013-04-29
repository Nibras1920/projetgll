function submitForm(){
var xhr = new XMLHttpRequest();
var service=document.getElementById('b').value;



var URL="recherche.php?Service="+b;

xhr.open("GET",URL, true);
xhr.send(null);
xhr.onreadystatechange=function() {

	document.getElementById('zone').innerHTML= xhr.responseText;
} 

}// JavaScript Document