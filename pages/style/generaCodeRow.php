    <?php
    require_once('funciones.php');
	conectar('localhost','root','','dbpjudicial');
    // primero conectamos siempre a la base de datos mysql
    $sql = "SELECT * FROM tbarea";  // sentencia sql
    $result = mysql_query($sql);
    $numero = mysql_num_rows($result); // obtenemos el número de filas
    
    $pass .= substr($result,$numero);
    echo 'El registros es: '.$pass.'';  // imprimos en pantalla el número generado
    ?>

