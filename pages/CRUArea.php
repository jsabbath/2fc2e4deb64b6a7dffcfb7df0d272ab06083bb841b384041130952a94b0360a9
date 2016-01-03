<!--area-->  
  <?php include('header.php'); ?>
  <?php include('modals.php'); ?>
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
                                <input type="text" class="form-control" placeholder="Ingrese Nombre del Area" name="vcnombreArea" required>
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
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Area</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include('include/tablas/tablaArea.php');?>
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
                            <input type='submit' class="btn btn-success" value="Guardar">
                            <input type='button' class="btn btn-warning" value="Actualizar">
                            <input type='reset' class="btn btn-default" value="Nuevo">
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