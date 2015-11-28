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
                <form>
                    <div class="row">
                        <div class="col-md-4" id="">
                            Area 
                        </div>
                        <div class='col-md-8 btn-group'> 
                        <a class='btn btn-default dropdown-toggle btn-select' data-toggle='dropdown' href='#'>
                            Selecciona un Area <span class='caret'></span>
                        </a>
                            <ul class='dropdown-menu'>
                               <?php 
                                    require_once('include/funciones.php');
                                    conectar('localhost', 'root', '', 'dbpjudicial');

                                    $consulta_mysql='SELECT cid,vcnombreArea From tbarea order by cid;';
                                    $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                        echo " 
                                            <li><a href='#' value='".$registro['cid']."'>".$registro['vcnombreArea']."</a></li>";
                                    }
                                ?>  
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            Observaciones 
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Ingrese Observaciones" id="#vcCargoNombre" required>
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
	                                            
                                                <?php 
                                                    require_once('include/funciones.php');
                                                    conectar('localhost', 'root', '', 'dbpjudicial');

                                                    $consulta_mysql='SELECT vcnombreArea, vcnombreCargo FROM tbcargo LEFT JOIN tbarea ON tbcargo.cidarea = tbarea.cid;';

                                                    $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                                    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                                    echo "
                                                        <tr class='odd gradeX'>
                                                        <td id=''>".$registro['vcnombreArea']."</td>
                                                        <td id=''>".$registro['vcnombreCargo']."</td>
                                                        <td id='' class='center'>
                                                            <input type='button' value='Editar' class='btn btn-danger btn-xs'>
                                                            <input type='button' value='Exportar' class='btn btn-success btn-xs'>
                                                        </td>";
                                                    }
                                                 ?>
                                                    
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
	                	<input type="submit" value="Guardar" class="">
	                	<input type='reset' value="Limpiar">
	                	<input type="button" class="btn btn-warning" value='Actualizar'>
		                <a class="btn btn-primary" value="cerrar" href='tables.php'>Salir</a>
		            </div>
                </form>
            </div>
	            
        </div>
    </div>
</div>
<?php include('footer.php'); ?>