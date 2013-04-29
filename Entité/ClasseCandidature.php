<?php
class Condidat
{
				private $IdCandidat;
				private $Date;
				private $Dtat ;
function __construct ($IdCandidat,$Date,$Etat)

{				$this->IdCandidat=$IdCandidat;
				$this->Date = $Date ;
				$this->Etat = $Etat ;  
				
}
				//fonction gets :

function getDate()
{
				return $this->Date;
}


function getetat()
{
				return $this->Etat;
}
function getid()
{
				return $this->IdCandidat;
}
				//fonction sets :

function setdate($D)
{
				$this->Date = $D;
}
function setetat($E)
{
				$this->Etat = $E;
}

function setid($I)
{
				$this->IdCandidat = $I;
}
}

?>