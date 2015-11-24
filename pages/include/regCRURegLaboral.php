<?php
require_once('funciones.php');
conectar('localhost', 'root', '', 'dbpjudicial');

$vcdescripcion = strip_tags($_POST['vcdescripcion']);
$vcobservaciones = strip_tags($_POST['vcobservaciones']); //encriptacion sha1

$query = @mysql_query('SELECT * FROM tbregimen WHERE vcdescripcion="'.mysql_real_escape_string($vcdescripcion).'"');
	if ($existe = @mysql_fetch_object($query))
	{
		echo "El registro ya existe";
	}else{
		$meter = @mysql_query('INSERT INTO tbregimen (cid, vcdescripcion, vcobservaciones) values ("","'.mysql_real_escape_string($vcdescripcion).'","'.mysql_real_escape_string($vcobservaciones).'");');
		if($meter)
			{
				echo "<div>registro existoso </div>";
			}else 
				echo "ocurrio un error";
		}
?>