<?php      

    include('../../include/config.php');
    if(isset($_POST))
    {
    	$nombres=$_POST["fullFirstName"];
    	$apellido1=$_POST["lastName1"];
        $apellido2=$_POST["lastName2"];
    	$scalafon=$_POST["scalafon"];
    	$dni=$_POST["dni"];
        $codigopersonal="00002";
    	

    	if($nombres==NULL || $nombres=="")
    	{
    		echo "<p class='text-danger'>Ingresar Nombres</p>";
    	}
    	elseif($apellido1==NULL || $apellido1=="")
    	{
    		echo "<p class='text-danger'>Ingresar Primer Apellido</p>";
    	
    	elseif($apellido2==NULL || $apellido2=="")
    	{
    		echo "<p class='text-danger'>Ingresar Segundo Apellido</p>";
    	}
    	elseif($scalafon==NULL || $scalafon=="")
    	{
    		echo "<p class='text-danger'>Ingresar ESCALAFON</p>";
    	}
    	elseif($dni==NULL || $dni=="")
    	{
    		echo "<p class='text-danger'>Ingresar DNI</p>";
    	}
        else
        {
            $conn = new mysqli($HOST, $USER, $PASSWORD, $DB);

        mysqli_query(conn,'Call InsertarPersonal("'.$codigopersonal.'","'.$nombres.'","'.$nombres.'","'$apellido1'","'.$apellido2.'","'.$scalafon.'","'.$dni.'")');
        } 
    }
?>