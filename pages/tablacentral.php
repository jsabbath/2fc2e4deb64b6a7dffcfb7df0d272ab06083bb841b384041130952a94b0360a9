<div class="row">
    <div class="col-md-5">
        <h3>
            Laboral
        </h3>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr class="mayuscula">
                                <th>Nombres / Apellidos</th>
                                <th>Area / Regimen Laboral</th>
                                <th>Fecha Ingreso</th>
                                <th>Fecha Cese</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require_once('include/funciones.php');
                                conectar('localhost', 'root', '', 'dbpjudicial');

                                $consulta_mysql='SELECT P.vcnombrePersonal,P.vcApPaterno,P.vcApMaterno, A.vcnombre, Reg.vcdescripcion, Cont.dateinicio, Cont.datefin
                                                From ((((tbarea A INNER JOIN tbcargo C ON  A.CId = C.CIdArea)
                                                INNER JOIN tbpersonal P ON C.cid = P.cidcargo)
                                                INNER JOIN tbcontrato Cont ON P.cid = Cont.cidpersonal)
                                                INNER JOIN tbperiodo Period ON Cont.cidperiodo = Period.cid)
                                                INNER JOIN tbregimen Reg ON Cont.cidregimen = Reg.cid;';
                                $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                
                                while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                    echo " 
                                        <tr class='odd gradeX'>
                                        <td class='mayuscula'>".$registro["vcnombrePersonal"]." ".$registro["vcApPaterno"]." ".$registro["vcApMaterno"]."</td>
                                        <td class='mayuscula'>".$registro["vcnombre"]." / ".$registro["vcdescripcion"]."</td>
                                        <td id=''>".$registro["dateinicio"]."</td>
                                        <td id='' class='center'>".$registro["datefin"]."</td>
                                        <td id='' class='center'>
                                            <input type='button' value='Editar' class='btn btn-danger btn-xs mayuscula'>
                                            <input type='button' value='Exportar' class='btn btn-success btn-xs mayuscula'>
                                        </td>
                                        </tr>
                                        ";
                                }
                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>