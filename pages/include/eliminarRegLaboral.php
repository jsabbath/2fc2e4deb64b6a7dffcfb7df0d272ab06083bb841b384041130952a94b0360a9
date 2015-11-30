<?php
    require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	//$cid=$_GET['cid'];
	//$query="DELETE FROM tbarea WHERE cid='".$cid."'";
	//$resultado=$mysqli->query($query);

	$cid =  $_GET['cid']; //varibless
	$query = @mysql_query('DELETE FROM tbregimen WHERE cid="'.$cid.'";');
	//echo $cid;
	header ("Location: .././CRURegLaboral.php");
?>