<?php include('header.php'); ?>    
<?php include('modals.php'); ?>            
              
<div class="contenedor">
		<form class="formulario_login" action="include/regCRUReglaboral.php" method="POST">
			<div>
	        <div>
	            <h4 id="myModalLabel">Regimen Laboral</h4>
	        </div>
	        <br>
	        <div>
	            <!--*****************************FORMULARIO*******************************-->
	                <div class="row">
	                    <div class="col-md-2" id="">
	                        Nuevo Regimen 
	                    </div>
	                    <div class="col-md-4 center-block ">
	                        <input class="form-control" type="text" placeholder="Ingrese denominacion" id="" name='vcdescripcion' required>
	                    </div>
	                </div>

	                <br>
	                <div class="row">
	                    <div class="col-md-2">
	                        Descripcion 
	                    </div>
	                    <div class="col-md-4 center-block ">
	                        <input type="text" class="form-control" placeholder="Ingrese observaciones" id="" name='vcobservaciones' required>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <!--para seguridad-->
	                    <input type="hidden" id="name_tocken" value="">
	                </div>
	                    <!-- /.tabla regimen laboral existentes -->
	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="panel panel-default">
	                            <!-- /.panel-heading -->
	                            <div class="panel-body">
	                                <div class="dataTable_wrapper">
	                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                                        <thead>
	                                            <tr>
	                                                <th>Regimen </th>
	                                                <th>Descripcion</th>
	                                                <th>Opciones</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                            <?php 
	                                                require_once('include/funciones.php');
	                                                conectar('localhost', 'root', '', 'dbpjudicial');

	                                                $consulta_mysql='SELECT * From tbregimen order by vcdescripcion;';
	                                                $resultado_consulta_mysql=mysql_query($consulta_mysql);
	                                                while($registro = mysql_fetch_array($resultado_consulta_mysql)){
	                                                    echo "
	                                                        <tr class='odd gradeX'>
	                                                        <td id=''>".$registro["vcdescripcion"]."</td>
	                                                        <td id=''>".$registro["vcobservaciones"]."</td>
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
	                <div claas='row pull-right'>
	                    <div class="col-md-1"><input  class="btn btn-success btn-xs" type = "submit" value="Registrar"></div>
	                    <div class="col-md-1"><input  class ='btn btn-primary btn-xs' type='button' value='Actualizar'></div>
						<div class="col-md-1"><input  class="btn btn-warning btn-xs" type = "reset" value="Limpiar"></div>
						<div class="col-md-1"><input  class ='btn btn-danger btn-xs' type='button' value='Salir'></div>
	                </div>
	            <!--***********************************************************************-->
	        </div>
	    </div>
		</form>
	</div>
<?php include('footer.php') ?>