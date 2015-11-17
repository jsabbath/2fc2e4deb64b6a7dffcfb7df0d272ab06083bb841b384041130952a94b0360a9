<?php
require_once('funciones.php');
conectar('localhost', 'root', '', 'dbpjudicial');

$message0 = "El registro ya existe";
$message1 = "Registro Exitoso";
$message2 = "Error de registro";

$vcdescripcion = strip_tags($_POST['vcdescripcion']);
$vcobservaciones = strip_tags($_POST['vcobservaciones']); //encriptacion sha1
//$ip = $_SERVER['REMOTE_ADDR'];

$query = @mysql_query('SELECT * FROM tbregimen WHERE vcdescripcion="'.mysql_real_escape_string($vcdescripcion).'"');
	if ($existe = @mysql_fetch_object($query))
	{
		//header ("Location: /2fc2e4deb64b6a7dffcfb7df0d272ab06083bb841b384041130952a94b0360a9/pages/tables.php");
		echo "<script type='text/javascript'>
				alert('".$message0."');
			  </script>";

	}else{
		$meter = @mysql_query('INSERT INTO tbregimen (vcobservaciones,vcdescripcion) values ("'.mysql_real_escape_string($vcobservaciones).'","'.mysql_real_escape_string($vcdescripcion).'")');
		if($meter)
			{
				echo '<div>Registro existoso</div>';
				//echo "Usuario registrado con exito";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}else 
				
				//echo "Hubo un error en el registro.";	
				//echo "<script type='text/javascript'>alert('$message2');</script>";
				//header ("Location: /2fc2e4deb64b6a7dffcfb7df0d272ab06083bb841b384041130952a94b0360a9/pages/tables.php");
				echo "<script type='text/javascript'>
						alert('".$message2."');
						</script>";
		}
?>