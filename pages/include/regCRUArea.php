<?php 
	require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');

	$vcnombre = strip_tags($_POST['vcnombre']); //varibless
	$cid = @mysql_query('SELECT COUNT (*) from tbarea;')+1;

	$query = @mysql_query('SELECT * FROM tbarea WHERE vcnombre="'.mysql_real_escape_string($vcnombre).'"');
		if ($existe = @mysql_fetch_object($query))
			{
				echo "El registro ya existe";
			}else{
				$meter = @mysql_query('INSERT INTO tbarea (cid, vcnombre) values ("'.$cid.'","'.mysql_real_escape_string($vcnombre).'");');
				if($meter)
					{
						
						echo "<script type='text/javascript'>
								document.write('<! - Pequeño modal -> 
												<button  type = 'button'  class = 'btn  btn-primaria'-toggle de datos = 'modal' diana de datos='.BS-ejemplo-modal-sm'> Pequeño modal </ botón>
												<div  class = 'fade modal modal-sm'> 
												    <div  class = 'modal-content'>
												      registro Exitoso
												    </ div> 
												  </ div> 
												</ div>');
							  </script>";
						header ("Location: .././CRUArea.php");//echo "<div>registro existoso </div>";
						//$cid = $cid ++;
					}else 
						echo "<script type=¡text/javascript'>
								$('.message').removeClass('')
							  </script>";
						//echo "<div>registro error </div>";
				}
?>