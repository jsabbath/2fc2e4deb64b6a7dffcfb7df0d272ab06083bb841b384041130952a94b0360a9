<!DOCTYPE html>
<html lang="es">
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
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"> 
                            <?php 
                                $valor = $_GET['$user'];
                                echo $valor;
                             ?>
                        </i>
                        </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        <?php 
                           require_once('include/sesion_start.php'); //invoca
                         ?>
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
                        <li class="mayuscula">
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i>Lista de Personal</a>
                        </li>
                        <li>
                            <a href="#" class="mayuscula">
                                <i class="fa fa-files-o fa-fw"></i> Otras Opciones
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a data-toggle="modal" data-target="#ModalCRURegLaboral" href="" data Targe>Regimen Laboral</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#ModalRegEmpleado" href="">Personal</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="" href="">Vacaciones / Permiso</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#ModalCRUArea" href="">Area / Permiso</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#ModalCRUPeriodo" href="">Periodo / Permiso</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#ModalCRUCargo" href="">Cargo / Permiso</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#ModalCRUCargo" href="">Cargo / Permiso</a>
                                </li>
                                <li role="presentation" class="divider">
                                    <a href=""></a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#" href="">Registrar Usuario</a>
                                </li>
                                <li>
                                    <a href="login.php">Cerrar Sesion</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="" class="mayuscula"> 
                                <i class="fa fa-edit fa-fw"></i>Control patrimonial 
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a data-toggle="modal" data-target="#ModalCRUUsuario" href="">Registro de Ingreso</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="" href="">Asignacion de recursos</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="" href="">Historial de Recursos</a>
                                </li>
                            </ul>
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
                    <h2 class="page-header">Personal Laboral</h2>
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
                                        <h4 class="modal-title" id="myModalLabel">Personal Laboral</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form">
                                        <div class="form-group">
                                            <label class="control-label" for="inputSuccess">Nombres y Apellidos</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control col-xs-3 col-sm-3" id="inputSuccess" type="text" placeholder="Nombres Completos" required>    
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="form-control col-xs-6 col-sm-3" id="inputSuccess" type="text" placeholder="Apellido Paterno" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form-control col-xs-6 col-sm-3" id="inputSuccess" type="text" placeholder="Apellido Materno" required>
                                                </div> 
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label" for="inputError">Escalofon</label>
                                                    <input class="form-control" id="inputError" type="text" placeholder='Ingrese escalofon' requires>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label" for="inputError">DNI</label>
                                                    <input class="form-control" id="inputError" type="text" placeholder="ingrese DNI" required>
                                                </div>
                                            </div>                                        <div class="form-group"><!--para seguridad-->
                                            <input type="hidden" id="name_tockenn" value="">
                                        </div>
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
                    <!--modal registrar reglaboral-->
                        <div class="modal litle" id="ModalCRURegLaboral" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Regimen Laboral</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!--*****************************FORMULARIO*******************************-->
                                        <form action="include/registros.php" method="GET">
                                            <div class="row">
                                                <div class="col-md-4" id="">
                                                    Nuevo Regimen 
                                                </div>
                                                <div class="col-md-8 center-block ">
                                                    <input class="form-control" type="text" placeholder="Ingrese denominacion" id="" name='vcdescripcion' required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    Descripcion 
                                                </div>
                                                <div class="col-md-8 center-block ">
                                                    <input type="text" class="form-control" placeholder="Ingrese observaciones" id="" name='rvcobservaciones' required>
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
                                            <div class="modal-footer">
                                                <input value="Guardar" class="btn btn-primary btn-xs" type="submit">

                                                <button type="button" class="btn btn-warning btn-xs">Actualizar</button>
                                                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </form>
                                        <!--***********************************************************************-->
                                         
                                    </div>
                                    
                                </div>
                            </div>
                       </div>
                    
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
                                                                                        <input type='button' value='Exportar' class='btn btn-success btn-xs'>
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
                        Registrar Personal
                    </button>
                    <!--fin tabla empleado-->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalCRUVacacion"> 
                        <i class="fa fa-edit "></i>
                        Registar Vacacion
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
            <!-- /.row -->
            <div class="row">
                
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
            
            $(".dropdown-menu li a").click(function(){
              var selText = $(this).text();
              $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
            });
            
            $("#btnSearch").click(function(){
            	alert($('.btn-select').text()+", "+$('.btn-select2').text());
            });
        });
    </script>

    <style type="text/css">
        #ModalCRURegLaboral.modal-dialog{
            width: 40% !important;
        }
        .mayuscula{
            text-transform: uppercase;
        }
        .minuscula{
          text-transform: lowercase;
        }
    </style>
</body>
</html>