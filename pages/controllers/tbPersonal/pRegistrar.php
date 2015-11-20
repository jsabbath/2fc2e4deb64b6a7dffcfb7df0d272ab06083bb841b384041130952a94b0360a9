<?php
include('mysql_conexion.php');
if(isset($_POST))
{
	$nombres=$_POST["nombres"];
	$apellidos=$_POST["apellidos"];
	$email=$_POST["email"];
	$user=$_POST["user"];
	$pass=$_POST["pass"];

	if($nombres==NULL || $nombres=="")
	{
		echo "<p class='text-danger'>Ingresar Nombre</p>";
	}
	elseif($apellidos==NULL || $apellidos=="")
	{
		echo "<p class='text-danger'>Ingresar Apellido</p>";
	}
	elseif($email==NULL || $email=="")
	{
		echo "<p class='text-danger'>Ingresar Email</p>";
	}
	elseif($user==NULL || $user=="")
	{
		echo "<p class='text-danger'>Ingresar Usuario</p>";
	}
	elseif($pass==NULL || $pass=="")
	{
		echo "<p class='text-danger'>Ingresar Contraseña</p>";
	}
	elseif(UserAlreadyExists($user, $ldapLink))
    {
        echo "<p class='text-danger'>El usuario ya existe.</p>";
    }
	else
	{
	$password = hash ( "sha256" , $pass, false );
            
    $info["cn"] = $user;
        $info["givenname"] = $nombres;
        $info["sn"] = $apellidos;
        //$info["dn"] = "cn=dfernandez,ou=usuarios,dc=ldap,dc=digitalsoft,dc=tk";
        //$info["objectClass"][0] = "top";
        //$info["objectClass"][1] = "person";
        $info["objectClass"][0] = "inetOrgPerson";
        $info["objectClass"][1] = "posixAccount";
        //$info["objectClass"][2] = "shadowAccount";
        //$info["ou"] = "usuarios";
        $info["uid"] = $user;
        $info["uidNumber"] = "5004";
        $info["gidNumber"] = "10001";
        $info["userPassword"] = $password;
        //$info["loginShell"] = "/bin/bash";
        $info["homeDirectory"] = "./home/nfs/$user";
        $info["mail"] = $email;
    
    // ƒf[ƒ^‚ðƒfƒBƒŒƒNƒgƒŠ‚É’Ç‰Á
    if (ldap_add($ldapLink, "cn=$user,ou=usuarios,dc=ldap,dc=digitalsoft,dc=tk", $info))
        {
            // Todo: Security
            RegisterPasswordSecurity($user, $password);
                
            $current_user = $_SESSION['current_user_cn'];
            RegisterAuditoriaTransaccion($current_user,"Usuarios","user_cn_id","I","-",$user);
            
            echo "<p class='text-info'>Usuario registrado con exito.</p>";
            
            /*echo 
    			'<script language="JavaScript" type="text/javascript">
    				window.location="personal.php";
    			</script>';*/
        }
        else
        {
            echo "<p class='text-danger'>Error en la conexion.</p>";
        }
    }
}
?>