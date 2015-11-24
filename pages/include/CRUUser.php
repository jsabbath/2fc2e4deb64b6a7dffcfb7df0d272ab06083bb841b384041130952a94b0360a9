<?php 
	session_start();
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$vcusername = strip_tags($_POST['vcusername']);
	$vcpassword = strip_tags($_POST['vcpassword']);

	$query = @mysql_query('SELECT * FROM tbusuario WHERE vcusername="'.mysql_real_escape_string($vcusername).'"');
	if ($existe = @mysql_fetch_object($query))
	{
		echo '<div>El registro ya existe</div>';
	}else{
		$meter = @mysql_query('INSERT INTO tbusuario (cid, vcusername, vcpassword, idpersonal, cpoder) values ("","'.mysql_real_escape_string($vcusername).'","'.mysql_real_escape_string($vcpassword).'"," "," ")');
		if($meter)
			{
				echo '<div>Registro existoso</div>';
				//echo "Usuario registrado con exito";
				//echo "<script type='text/javascript'>alert('$message');</script>";
			}else 
				echo '<div>Ocurrio un error</div>';
		}
 ?>