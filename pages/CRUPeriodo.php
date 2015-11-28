<?php include('header.php'); ?>
<?php include('modals.php'); ?>
<!--modal registrar periodo-->
<div>
    <div>
        <div>
            <div class="row">
			    <div class="col-md-5">
			        <h4>
			            Periodo
			        </h4>
			    </div>
			</div>
            <div>
                <form action="include/regCRUPeriodo.php" method="POST">
                    <div>
                        <div class="col-md-2">
                            Periodo:  
                        </div>
                        <div class="col-md-3 center-block">
                            <input maxlength="9" class="form-control" type="text" placeholder="YYYY-YYYYY" name='vcdescripcion' required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group"> <!--para seguridad-->
                        <input type="hidden" id="name_tocken" value=''>
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
                                                <tr>
                                                    <th>Periodo</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    require_once('include/funciones.php');
                                                    conectar('localhost', 'root', '', 'dbpjudicial');

                                                    $consulta_mysql='SELECT * FROM tbperiodo';
                                                    $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                                    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                                        echo " <tr class='odd gradeX'>
                                                                    <td id=''>".$registro['vcdescripcion']."</td>
                                                                    <td id='' class='center'>
                                                                        <input type='button' value='Editar' class='btn btn-danger btn-xs'>
                                                                        <input type='button' value='Exportar' class='btn btn-success btn-xs'>
                                                                    </td>
                                                                </tr>";
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
                    
                    <div>
                    	<input type='submit' value="Registrar" class="btn btn-default">
                    	<input type="reset" value="Limpiar" class="btn btn-primary">
                    	<input	type='button' class="btn btn-warning" value="Actualizar">
                        <a class="btn btn-danger" value="cerrar" href='tables.php'>Salir</a>
                    </div>
                </form>
                 <!-- /.tabla regimen laboral existentes -->
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>