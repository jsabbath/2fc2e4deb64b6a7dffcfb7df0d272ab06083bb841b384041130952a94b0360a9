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
	header ("Location: .././tables.php");
	echo '<div>'.$user.'</div>';

}else {
		header ("Location: .././login.php");
	}
?>