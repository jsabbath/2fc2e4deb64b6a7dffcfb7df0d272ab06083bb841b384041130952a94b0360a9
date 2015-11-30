<?php 
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$vcdescripcion = strip_tags($_POST['vcdescripcion']);

	$query = @mysql_query('SELECT * FROM tbperiodo WHERE vcdescripcion="'.mysql_real_escape_string($vcdescripcion).'"');
		if ($existe = @mysql_fetch_object($query))
		{
			header ("Location: .././CRUPeriodo.php");//echo "<div>registro existoso </div>";
			echo "El registro ya existe";
		}else{
			$meter = @mysql_query('INSERT INTO tbperiodo (cid, vcdescripcion) values (" ","'.mysql_real_escape_string($vcdescripcion).'");');
			if($meter)
				{
					header ("Location: .././CRUPeriodo.php");//echo "<div>registro existoso </div>";
					echo "<div>registro existoso</div>";
					//$cid = $cid ++;
				}else 
					header ("Location: .././CRUPeriodo.php");//echo "<div>registro existoso </div>";
					echo "<div>registro error </div>";
			}
?>