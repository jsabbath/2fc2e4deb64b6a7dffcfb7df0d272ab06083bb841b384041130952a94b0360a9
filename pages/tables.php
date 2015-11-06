<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Control Vacacional</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Control Vacacional v0.1</a>
            </div>

            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Admin 0001</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form center-text">   
                            <h4 style="text-align:center;">Menu de Opciones</h4>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i>Lista de Empleados</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-files-o fa-fw"></i> Otras Opciones
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a data-toggle="modal" data-target="#ModalCRURegLaboral" href="" data Targe>Agregar Regimen Laboral</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#ModalRegEmpleado" href="">Agregar Empleado</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="" href="">Agregar Vacacion / Permiso</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="" href="login.php">Cerrar Sesion</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Lista de Trabajadores </h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12 ">                    
                    <!--rmodel registrar empleado-->
                        <div class="modal fade" id="ModalRegEmpleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Registrar Empleado</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form">
                                        <div class="form-group">
                                            <label class="control-label" for="inputSuccess">Nombres y Apellidos</label>
                                            <div class="row center-block">
                                                <input class="" id="inputSuccess" type="text" placeholder="Ingrese nombres" required>    
                                                <input class="" id="inputSuccess" type="text" placeholder="Ingrese apellidos" required>
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
                    <!--fin tabla empleado-->
                    <!--rmodel registrar empleado-->
                        <div class="modal litle" id="ModalCRURegLaboral" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Registrar Regimen Laboral</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row center-block">
                                                <div class="col-md-4" id="">
                                                    Descripcion 
                                                </div>
                                                <div class="col-md-8 center-block">
                                                    <input type="text" placeholder="Ingrese denominacion" id="#vcdescripcion" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row center-block">
                                                <div class="col-md-4">
                                                    Observaciones 
                                                </div>
                                                <div>
                                                    <input type="textarea" placeholder="Ingrese observaciones" id="#vcobservaciones" required>
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
                                                                        <th>Regimen Laboral</th>
                                                                        <th>Descripcion</th>
                                                                        <th>Opciones</th>
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

                    <!--Tougle RegistroEmpleado-->
                    <button class="btn btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalRegEmpleado">
                      <i class="fa fa-edit "></i>
                        Registrar Empleado
                    </button>
                    <!--fin tabla empleado-->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#"> 
                        <i class="fa fa-edit "></i>
                        Registar Vacacion
                    </button>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalCRURegLaboral"> 
                        <i class="fa fa-edit "></i>
                        Registar Regimen Laboral
                    </button>

                </div>
            </div>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombres / Apellidos</th>
                                            <th>Area / Regimen Laboral</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Fecha Cese</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td id="">Rodrigo Andres Valeunde Tinoco</td> <!--nombre-->
                                            <td id="">Logistica / 728</td>
                                            <td id="">12/12/2008</td>
                                            <td id="" class="center">12/12/2002</td>
                                            <td id="" class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <!--tr class="even gradeC">
                                            <td>Andres del Carpio sandoval</td>
                                            <td>RR.UU. / 1017</td>
                                            <td>14/01/1999</td>
                                            <td class="center">23/10/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Luz maria del solar</td>
                                            <td>TI / 1057</td>
                                            <td>23/02/1015</td>
                                            <td class="center">23/08/1015</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        
                                        <tr class="gradeA">
                                            <td>Aquiles brinco rapido</td>
                                            <td>Logistica / 728</td>
                                            <td>03/08/1995</td>
                                            <td class="center">23/08/2009</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Alan Garcia Solazo</td>
                                            <td>Almacen / 1017</td>
                                            <td>15/08/1990</td>
                                            <td class="center">23/08/1992</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Loida Mezquino Ricther</td>
                                            <td>Marketing / 728</td>
                                            <td>13/03/2010</td>
                                            <td class="center">23/09/1015</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Andrea Lizeth Atuhuaman jurad</td>
                                            <td>Almacen / 728</td>
                                            <td>09/09/2009</td>
                                            <td class="center">10/10/2015</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Juan Carlos de  Las casas del Toro</td>
                                            <td>RRHH / 1017</td>
                                            <td>12/02/2000</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Victor Luck Uzumaki Mazgo</td>
                                            <td>Logistica / 1017</td>
                                            <td>13/05/2000</td>
                                            <td class="center">12/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Han solo Verger piñas</td>
                                            <td>Almacen / 1017</td>
                                            <td>09/08/2003</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Celene Margit levano soriano</td>
                                            <td>Marketing / 728</td>
                                            <td>12/03/1994</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Melani Mallqui Celestino</td>
                                            <td>Marketing / 728</td>
                                            <td>15/12/2014</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Ricardo Casas Montes</td>
                                            <td>RRHH / 728</td>
                                            <td>12/13/2002</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Rita Vazquez Cordova</td>
                                            <td>TI / 1057</td>
                                            <td>15/05/2005</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Cielo Latini Montalvan</td>
                                            <td>RRHH / 728</td>
                                            <td>13/12/2003</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Lucas Meltrozo Briano</td>
                                            <td>Marketing / 728</td>
                                            <td>12/12/2009</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Cipriano Solan Asquilete</td>
                                            <td>RRHH / 728</td>
                                            <td>11/11/2010</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>TI / 1010</td>
                                            <td>12/12/1994</td>
                                            <td class="center">23/08/2002</td>
                                            <td class="center">
                                                <input type="button" value="Editar" class="btn btn-danger btn-xs">
                                                <input type="button" value="Exportar" class="btn btn-success btn-xs">
                                            </td>
                                        </tr-->
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
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

    <style type="text/css">
        #ModalCRURegLaboral.modal-dialog{
            width: 40% !important;
        }
    </style>

</body>
</html>