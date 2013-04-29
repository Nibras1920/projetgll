<?php

	class Configuration
	{
		public $Serveur = "localhost";
		public $Utilisateur = "root";
		public $MDP = "";
		public $DB = "gl";
		
		function Connexion ()
		{
			$con = mysql_connect($this->Serveur,$this->Utilisateur,$this->MDP);
			mysql_select_db($this->DB,$con);
		}
	}

?>