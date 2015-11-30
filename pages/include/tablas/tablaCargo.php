 <?php 
    require_once('include/funciones.php');
    conectar('localhost', 'root', '', 'dbpjudicial');

    $consulta_mysql='SELECT * FROM tbcargo LEFT JOIN tbarea ON tbcargo.cidarea = tbarea.cid;';

    $resultado_consulta_mysql=mysql_query($consulta_mysql);
    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
    echo "
        <tr class='odd gradeX'>
        <td id=''>".$registro['vcnombreArea']."</td>
        <td id=''>".$registro['vcnombreCargo']."</td>
        <td id='' class='center'>
            <a class='btn btn-warning btn-xs' href='include/actualizarCargo.php?cid=".$registro["cidcargo"]."'>Actualizar</a>
            <a class='btn btn-danger btn-xs' href='include/eliminarCargo.php?cid=".$registro["cidcargo"]."'>Eliminar</a>
        </td>";
    }
 ?>