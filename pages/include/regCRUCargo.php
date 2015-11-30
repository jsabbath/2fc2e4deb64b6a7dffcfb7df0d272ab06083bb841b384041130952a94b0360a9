<?php 
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$cidArea = $_POST['cidArea'];
	$vcnombreCargo = strip_tags($_POST['vcnombreCargo']); //varibless

	$query = @mysql_query('SELECT * FROM tbcargo WHERE vcnombreCargo="'.mysql_real_escape_string($vcnombreCargo).'" AND cidarea = "'.$cidArea.'";');
		if ($existe = @mysql_fetch_object($query))
			{
				echo "El registro ya existe";
			}else{
				$meter = @mysql_query('INSERT INTO tbcargo (cid, cidarea ,vcnombreCargo) values (""."'.$cidArea.'","'.mysql_real_escape_string($vcnombreCargo).'");');
				if($meter)
					{
						header ("Location: .././CRUCargo.php");//echo "<div>registro existoso </div>";
						//$cid = $cid ++;
					}else 
						echo $cid;
						echo $vcnombreCargo;
						echo "<div>registro error </div>";
				}
?>