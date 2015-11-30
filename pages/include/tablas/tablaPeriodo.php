<?php 
    require_once('include/funciones.php');
    conectar('localhost', 'root', '', 'dbpjudicial');

    $consulta_mysql='SELECT * FROM tbperiodo';
    $resultado_consulta_mysql=mysql_query($consulta_mysql);
    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
        echo " <tr class='odd gradeX'>
                    <td id=''>".$registro['vcdescripcion']."</td>
                    <td id='' class='center'>
                        <a class='btn btn-warning btn-xs' href='include/actualizarPeriodo.php?cid=".$registro["cid"]."'>Actualizar</a>
                        <a class='btn btn-danger btn-xs' href='include/eliminarPeriodo.php?cid=".$registro["cid"]."'>Eliminar</a>
                    </td>
                </tr>";
    }
?> 