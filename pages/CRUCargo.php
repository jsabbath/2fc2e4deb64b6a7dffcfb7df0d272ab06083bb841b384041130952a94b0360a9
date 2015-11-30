<?php include('header.php'); ?>
<?php include('modals.php');?>
<!--rmodel registrar cargo-->
<div>
    <div>
        <div>
            <div>
                <h4>Cargo</h4>
            </div>
            <div>
                <form role="form" action="include/regCRUCargo.php" method="POST">
                    <div class="row">
                        <div class="col-md-1" id="">
                            Area 
                        </div>
                        <div class='col-md-4 btn-group'> 
                            <select name="cidArea" class="btn btn-default">
                               <?php 
                                    require_once('include/funciones.php');
                                    conectar('localhost', 'root', '', 'dbpjudicial');

                                    $consulta_mysql='SELECT cid,vcnombreArea From tbarea order by cid;';
                                    $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                        echo " 
                                            <option value='".$registro['cid']."'>".$registro['vcnombreArea']."</option>
                                        ";
                                    }
                                ?>  
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1">
                            Observaciones 
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Ingrese Observaciones" id="#vcCargoNombre" name="vcnombreCargo" required>
                        </div>
                    </div>
                    <div class="form-group"><!--para seguridad-->
                        <input type="hidden" id="name_tockenn" value="">
                    </div>
	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="panel panel-default">
	                            <!-- /.panel-heading -->
	                            <div class="panel-body">
	                                <div class="dataTable_wrapper">
	                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                                        <thead>
	                                            <tr>
	                                                <th>Area</th>
	                                                <th>Nombre</th>
                                                    <th>Opciones</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                            <?php include('include/tablas/tablaCargo.php'); ?>                                                    
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.panel -->
	                    </div>
	                    <!-- /.col-lg-12 -->
	                </div>
	                <div>
	                	<input type="submit" value="Guardar" class="btn btn-primary">
	                	<input type='reset' value="Limpiar" class="btn btn-default">
	                	<input type="button" class="btn btn-warning" value='Actualizar'>
		                <a class="btn btn-danger" value="cerrar" href='tables.php'>Salir</a>
		            </div>
                </form>
            </div>
	            
        </div>
    </div>
</div>
<?php include('footer.php'); ?>