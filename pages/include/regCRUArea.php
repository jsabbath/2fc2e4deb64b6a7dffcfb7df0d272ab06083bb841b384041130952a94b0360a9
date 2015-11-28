<?php 
	include('config.php');
	//require_once('funciones.php');
	//conectar('localhost','root','','dbpjudicial');
if(isset($_POST))
    {
	$vcnombreArea = $_POST['vcnombre']; //varibless
/*
	$query = @mysql_query('SELECT * FROM tbarea WHERE vcnombreArea="'.mysql_real_escape_string($vcnombre).'"');
		if ($vcnombre=="")
			{
				echo "El registro ya existe";
			}else{
				/*
				$meter = @mysql_query('Call InsertarArea ("'.$vcnombreArea.'")');

				if($meter)
					{
						
						header ("Location: .././CRUArea.php");//echo "<div>registro existoso </div>";
						//$cid = $cid ++;
					}else 
						echo "<div>registro error </div>";
*/

						$conn = new mysqli(HOST, USER, PASSWORD, DB);

        				mysqli_query($conn,"Call InsertarArea('','".$vcnombreArea."')"); 
        			}
				
?>