<?php 
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$vcnombreArea = strip_tags($_POST['vcnombreArea']); //varibless

	$query = @mysql_query('SELECT * FROM tbarea WHERE vcnombreArea="'.mysql_real_escape_string($vcnombreArea).'";');
		if ($existe = @mysql_fetch_object($query))
			{
				echo "El registro ya existe";
			}else{
				$meter = @mysql_query('INSERT INTO tbarea (cid, vcnombreArea) values ("","'.$vcnombreArea.'");');
				if($meter)
					{
						//header ("Location: .././CRUArea.php");
						//echo "<div>registro existoso </div>";
						header ("Location: .././CRUArea.php");
						//$cid = $cid ++;
					}else 
						echo "<div>registro error </div>";
				}
?>