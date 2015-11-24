<?php 
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$vcnombre = strip_tags($_POST['vcnombre']);

	$query = @mysql_query('SELECT * FROM tbarea WHERE vcnombre="'.mysql_real_escape_string($vcnombre).'"');
		if ($existe = @mysql_fetch_object($query))
			{
				echo "El registro ya existe";
			}else{
				$meter = @mysql_query('INSERT INTO tbarea (cid, vcnombre) values ("","'.mysql_real_escape_string($vcnombre).'");');
				if($meter)
					{
						echo "<div>registro existoso </div>";
					}else 
						echo "ocurrio un error";
				}
?>