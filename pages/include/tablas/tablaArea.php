<?php 
    require_once('include/funciones.php');
    conectar('localhost', 'root', '', 'dbpjudicial');

    $consulta_mysql='SELECT cid,vcnombreArea From tbarea order by cid;';
    $resultado_consulta_mysql=mysql_query($consulta_mysql);
    while($registro = mysql_fetch_array($resultado_consulta_mysql))
    {
        echo "
            <tr class='odd gradeX'>
                <td id=''>".$registro["cid"]."</td>
                <td id=''>".$registro["vcnombreArea"]."</td>
                <td id='' class='center'>
                    <a class='btn btn-warning btn-xs' href='include/actualizarArea.php?cid=".$registro["cid"]."'>Actualizar</a>
                    <a class='btn btn-danger btn-xs' href='include/eliminarArea.php?cid=".$registro["cid"]."'>Eliminar</a>
                </td>
            </tr>";
    }
?> 