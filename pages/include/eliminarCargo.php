<?php
    require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	//$cid=$_GET['cid'];
	//$query="DELETE FROM tbarea WHERE cid='".$cid."'";
	//$resultado=$mysqli->query($query);

	$cidcargo =  $_GET['cid']; //varibless
	$query = @mysql_query('DELETE FROM tbcargo WHERE cidcargo="'.$cidcargo.'";');
	//echo $cid;
	//header ("Location: .././CRUCargo.php");
?>