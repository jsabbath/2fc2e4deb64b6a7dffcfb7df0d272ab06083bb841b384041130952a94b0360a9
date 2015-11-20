<?php
session_start();
require_once('funciones.php'); //invoca
conectar('localhost','root', '', 'dbpjudicial'); //declara

$user = strip_tags($_POST['login_username']);
$pass = strip_tags($_POST['login_password']);

$query = @mysql_query('SELECT * FROM tbusuario WHERE vcusername="'.mysql_real_escape_string($user).'" AND vcpassword="'.mysql_real_escape_string($pass).'"');
if($existe = @mysql_fetch_object($query))
{
	$_SESSION['logged'] = 'yes';
	$_SESSION['login_username'] = $user;
	//echo '<script>window.location="principal.php"</script>';
	//echo "<div>user correcto</div>";
	

	//echo '<script>window="tables.php"</script>'. $user ;
	header ("Location: .././tables.php");
	echo '<div>'.$user.'</div>';

}else {
		
		header ("Location: /2fc2e4deb64b6a7dffcfb7df0d272ab06083bb841b384041130952a94b0360a9/pages/login.php");
		
		//echo $mensaje = 'El usuario no existe';		
		//echo "<div>user incorrecto</div>";
		//echo '<div>El usuario y/o password son incorrectos</div>';
        // echo "<script type=\"No existe el usuario/javascript\">alert(\"Fotos guardadas\");</script>";
	}
?>