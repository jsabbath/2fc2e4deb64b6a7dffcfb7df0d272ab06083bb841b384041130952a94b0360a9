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

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!---navbar principal-->
    <nav class="navbar navbar-inverse" role="navigation"> 
        <div class="navbar-header"> 
            <a class="navbar-brand" href="#">Sistema de Control Vacacional</a> 
        </div> 
        <div> 
            <ul class="nav navbar-nav">  
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda 
                    <b class="caret"></b></a> 
                    <ul class="dropdown-menu"> 
                        <li><a href="#">Mision</a></li> 
                        <li><a href="#">Vision</a></li> 
                        <li class="divider"></li> <!--bara horizotal de separacion-->
                        <li><a href="#">Ayuda</a></li> 

                    </ul> 
                </li> 
            </ul> 
        </div> 
        
    </nav>
    <!--Login al Sistema-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-primary text-center">Acceso al Sistema</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario o PIN" name="usuario" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="tables.php" class="btn btn-lg btn-block btn-default">Ingresar al panel</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer de pgina-->
    <div class="modal-footer"> 

    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
