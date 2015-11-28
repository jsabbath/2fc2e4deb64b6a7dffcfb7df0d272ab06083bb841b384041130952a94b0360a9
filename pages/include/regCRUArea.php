<?php 
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$vcnombre = strip_tags($_POST['vcnombre']); //varibless

	$query = @mysql_query('SELECT * FROM tbarea WHERE vcnombreArea="'.mysql_real_escape_string($vcnombre).'"');
		if ($existe = @mysql_fetch_object($query))
			{
				echo "El registro ya existe";
			}else{
<<<<<<< HEAD
                $currentCount();
				$meter = @mysql_query('Call InsertarArea ("","'.mysql_real_escape_string($vcnombre).'");');
=======
				$meter = @mysql_query('INSERT INTO tbarea (cid, vcnombreArea) values ("","'.mysql_real_escape_string($vcnombre).'");');
>>>>>>> origin/master
				if($meter)
					{
						
						header ("Location: .././CRUArea.php");//echo "<div>registro existoso </div>";
						//$cid = $cid ++;
					}else 
						echo "<div>registro error </div>";
				}
?>