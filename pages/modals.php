                    
                    <!--modal Registrar Area-->
                        <div class="modal litle" id="ModalCRUArea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Area</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row center-block">
                                                <div class="col-md-4" id="">
                                                    Nombre 
                                                </div>
                                                <div class="col-md-8 center-block">
                                                    <input type="text" class="form-control" placeholder="Ingrese Nombre del Area" id="#vcnombre" required>
                                                </div>
                                            </div>
                                            <div class="form-group"><!--para seguridad-->
                                                <input type="hidden" id="name_tockenn" value="">
                                            </div>
                                        </form>
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
                                                                        <th>Id</th>
                                                                        <th>Area</th>
                                                                        <th>Opciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                        require_once('include/funciones.php');
                                                                        conectar('localhost', 'root', '', 'dbpjudicial');

                                                                        $consulta_mysql='SELECT cid,vcnombre From tbarea order by cid;';
                                                                        $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                                                        while($registro = mysql_fetch_array($resultado_consulta_mysql)){
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-xs">Guardar</button>
                                        <button type="button" class="btn btn-warning btn-xs">Actualizar</button>
                                        <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                       </div>
                       
                    <!--modal registrar periodo-->
                        <div class="modal litle" id="ModalCRUPeriodo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Periodo</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row center-block">
                                                <div class="col-md-4" id="">
                                                    Descripcion 
                                                </div>
                                                <div class="col-md-8 center-block">
                                                    <input class="form-control" type="text" placeholder="Ingrese denominacion" id="#vcPeriodoDescripcion" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group"> <!--para seguridad-->
                                                <input type="hidden" id="name_tocken" value="">
                                            </div>
                                        </form>
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-xs">Guardar</button>
                                        <button type="button" class="btn btn-warning btn-xs">Actualizar</button>
                                        <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                       </div>

                        <!--rmodel registrar empleado-->
                        <div class="modal fade" id="ModalCRUVacacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Registrar Vacacion</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form">
                                        <div class="form-group">
                                            <label class="control-label" for="inputSuccess">Generales del Empleado</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="form-control col-xs-3 col-sm-3" id="inputSuccess" type="text" placeholder="Ingrese Nombres" required>    
                                                </div>                                               
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="inputError">Escalofon</label>
                                            <input class="form-control" id="inputError" type="text">
                                        </div>
                                        <div class="form-group"><!--para seguridad-->
                                            <input type="hidden" id="name_tockenn" value="">
                                        </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       <!--rmodel registrar cargo-->
                        <div class="modal litle" id="ModalCRUCargo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Cargo</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4" id="">
                                                    Area 
                                                </div>
                                                <div class='col-md-8 btn-group'> <a class='btn btn-default dropdown-toggle btn-select' data-toggle='dropdown' href='#'>Seleciona un Area <span class='caret'></span></a>
                                                    <ul class='dropdown-menu'>
                                                       <?php 
                                                            require_once('include/funciones.php');
                                                            conectar('localhost', 'root', '', 'dbpjudicial');

                                                            $consulta_mysql='SELECT cid,vcnombre From tbarea order by vcnombre;';
                                                            $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                                            while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                                                echo " 
                                                                    <li><a href='#'>".$registro['vcnombre']."</a></li>
                                                                    ";
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
                                        </form>
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
                                                                        <th>Area</th>
                                                                        <th>Nombre</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd gradeX">
                                                                        <td id="">R728</td> <!--nombre-->
                                                                        <td id="">Comprnde del tipo de contrato xs</td>
                                                                        <td id="" class="center">
                                                                            <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                                            <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                                                        </td>
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-xs">Guardar</button>
                                        <button type="button" class="btn btn-warning btn-xs">Actualizar</button>
                                        <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                       </div>
                </div>
            </div>
            <br>