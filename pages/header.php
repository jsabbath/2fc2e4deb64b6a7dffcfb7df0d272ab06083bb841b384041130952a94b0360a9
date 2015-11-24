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
                <a class="navbar-brand" href="">Control Vacacional v0.15</a>
            </div>

            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->   
                Bienvenido:
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          
                        <i class="fa fa-user fa-fw"></i>
                        <!--intento de ubicar nombre en panel principal-->
                        <?php 
                            session_start();
                            echo $_SESSION['login_username'];
                            echo " ";
                        ?>  
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        </a>
                        </li>
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
                        <li class="mayuscula">
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i>Lista de Personal</a>
                        </li>
                        <li>
                            <a href="#" class="mayuscula">
                                <i class="fa fa-files-o fa-fw"></i> Otras Opciones
                                <span class="fa arrow"></span> <!--icono-->
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="CRURegLaboral.php" data Targe>Regimen Laboral</a>
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
                                    <a href="regUser.php">Registrar Usuario</a>
                                </li>
                                <li>
                                    <a href="login.php">Cerrar Sesion</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class='desable'>
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
                                        <form role="form" ID="regPersonalForm" action="controllers/tbPersonal/pRegistrar.php">
                                        <div class="form-group">
                                            <label class="control-label" for="inputSuccess">Nombres y Apellidos</label>
                                            <!--Nombres y apellido materno-->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input class="form-control col-xs-3 col-sm-3" id="inputSuccess" type="text" id="fullFirstName" placeholder="Nombres Completos" required>    
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-control col-xs-6 col-sm-3" id="inputSuccess" type="text" id="lastName1" placeholder="Apellido Paterno" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-control col-xs-6 col-sm-3" id="inputSuccess" type="text" id="lastName1" placeholder="Apellido Paterno" required>
                                                </div>
                                            </div>

                                            <!--Apellido paterno + alert-->
                                            <div class="hidden row">
                                                <div class=" col-md-6">
                                                    <input class="form-control col-xs-6 col-sm-3" id="inputSuccess" type="text"id="lastName2" placeholder="" required>
                                                </div> 
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <div class="control-label" >
                                                        <label for="inputError">Escalofon</label>
                                                    </div>
                                                    <div class='btn-group'> <!--Dropdown-->
                                                        <a class='btn btn-default dropdown-toggle btn-select' data-toggle='dropdown' href='#'>
                                                            Seleccione <span class='caret'></span>
                                                        </a>
                                                        <ul class='dropdown-menu'>
                                                            <?php 
                                                                require_once('include/funciones.php');
                                                                conectar('localhost', 'root', '', 'dbpjudicial');

                                                                $consulta_mysql='SELECT vcdescripcion From tbregimen;';
                                                                $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                                                while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                                                    echo " <li><a href='#'>".$registro['vcdescripcion']."</a></li>";
                                                                }
                                                            ?>  
                                                        </ul>
                                                    </div>   
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label" for="inputError">DNI</label>
                                                    <input class="form-control" id="inputError" maxlength="8" type="text" id="dni" placeholder="ingrese DNI" onclick="return justNumbers(event);" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <div>
                                                       <label class="control-label" for="inputError">Area / Cargo </label> 
                                                    </div>
                                                    <div class='btn-group'> <!--Dropdown Area-->
                                                        <a class='btn btn-default dropdown-toggle btn-select' data-toggle='dropdown' href='#'>
                                                            Area <span class='caret'></span>
                                                        </a>
                                                        <ul class='dropdown-menu' onclick="function show_Area()" >
                                                            <?php 
                                                                function show_Area()
                                                                {
                                                                    require_once('include/funciones.php');
                                                                    conectar('localhost', 'root', '', 'dbpjudicial');

                                                                    $consulta_mysql='SELECT vcnombre, cid From tbarea;';
                                                                    $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                                                    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                                                        echo " <li><a href='#'>".$registro['vcnombre']."</a></li>";

                                                                    } 
                                                                    $idArea = $registro['cid'];
                                                                    
                                                                }

                                                                function show_Cargo($idArea)
                                                                {
                                                                    require_once('include/funciones.php');
                                                                    conectar('localhost', 'root', '', 'dbpjudicial');

                                                                    $consulta_mysql='SELECT vcnombre FROM tbcargo WHERE cidarea ='.$idArea.';';
                                                                    $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                                                    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                                                        echo " <li><a href='#'>".$registro['vcnombre']."</a></li>";
                                                                    }
                                                                }
                                                                show_Area();
                                                            ?>  
                                                        </ul>
                                                    </div> 
                                                    <div class='btn-group'> / </div>
                                                    <div class='btn-group'> <!--Dropdown Cargo-->
                                                        <a class='btn btn-default dropdown-toggle btn-select' data-toggle='dropdown' href='#'>
                                                            Cargo <span class='caret'></span>
                                                        </a>
                                                        <ul class='dropdown-menu'>
                                                            <?php 
                                                                show_Cargo($idArea);
                                                            ?>  
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group"><!--para seguridad-->
                                                <input type="hidden" id="name_tockenn" value="">
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <input class="btn btn-primary" type="reset" value="Nuevo">
                                        <button type="button" class="btn btn-primary"  id="btnRegPersonal" >Guardar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--fin tabla empleado-->