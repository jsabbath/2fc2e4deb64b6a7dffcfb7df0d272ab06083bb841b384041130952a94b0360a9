  
  <?php include('header.php'); ?>
  <?php include('modals.php'); ?>
   <?php include('include/config.php'); ?>
  <div class="row">
    <!--modal Registrar Area-->
    <div>
        <div>
            <div>
                <div>
                    <form action="include/regCRUArea.php" method="POST">
                        
                        <div>
                            <h4>Area</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                Nombre 
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Ingrese Nombre del Area" name="vcnombre" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" type="hidden">
                        hola
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
                                                    <th>Id</th>
                                                    <th>Area</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    //require_once('include/funciones.php');
                                                    //conectar('localhost', 'root', '', 'dbpjudicial');

                                                    //$consulta_mysql='SELECT cid,vcnombreArea From tbarea order by cid;';

                                                    $conn = new mysqli(HOST, USER, PASSWORD, DB);
                                                     


                                                    $resultado_consulta_mysql=mysqli_query($conn,"Call MostrarArea()"); 
                                                    while($registro = mysqli_fetch_array($resultado_consulta_mysql))
                                                    {
                                                        echo "
                                                            <tr class='odd gradeX'>
                                                                <td id=''>".$registro["cid"]."</td>
                                                                <td id=''>".$registro["vcnombre"]."</td>
                                                                <td id='' class='center'>
                                                                    <input type='button' value='Editar' class='btn btn-danger btn-xs'>
                                                                    <input type='button' value='Deshabilitar' class='btn btn-success btn-xs'>
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
                        <div>
                            <input type='submit' class="btn btn-primary" value="Guardar">
                            <input type='button' class="btn btn-warning" value="Actualizar">
                            <input type='reset' class="btn btn-success" value="Nuevo">
                            <a class="btn btn-primary" value="cerrar" href='tables.php'>Salir</a>
                        </div>
                    </form>
                     <!-- /.tabla regimen laboral existentes -->
                    
                </div>
                
            </div>
        </div>
   </div>
  </div>

<?php include('footer.php'); ?>