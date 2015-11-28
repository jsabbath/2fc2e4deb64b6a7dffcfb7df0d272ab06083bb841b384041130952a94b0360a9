<?php 
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$cid = $_POST['cidArea'];
	$vcnombre = strip_tags($_POST['vcnombreCargo']); //varibless

	$query = @mysql_query('SELECT * FROM tbcargo WHERE vcnombreCargo="'.mysql_real_escape_string($vcnombre).'"');
		if ($existe = @mysql_fetch_object($query))
			{
				echo "El registro ya existe";
			}else{
				$meter = @mysql_query('INSERT INTO tbcargo (cid, vcnombreCargo) values (""."'.$cid.'","'.mysql_real_escape_string($vcnombre).'");');
				if($meter)
					{
						header ("Location: .././CRUArea.php");//echo "<div>registro existoso </div>";
						//$cid = $cid ++;
					}else 
						echo "<div>registro error </div>";
				}
?>