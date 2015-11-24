<?php 
session_start();
require_once('funciones.php');
conectar('localhost','root', '', 'dbpjudicial'); //declara

$variables = strip_tags($_POST['nombre_campo']);
$variables = strip_tags($_POST[]);

$query = @mysql_query('consulta')
if($existe = @mysql_fetch_object($query))
{
	$_SESSION['logged'] = 'yes';

	header ("Location: .././tables.php");
	
}else{
	header ("Location: .././tables.php");
}

 ?>