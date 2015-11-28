<?php include('header.php'); ?>    
<?php include('modals.php'); ?>       
<!--rmodel registrar empleado-->
    <div>
        <div>
            <div>
                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Personal Laboral</h4>
                </div>
                <br>
                <div>
                    <form role="form" ID="regPersonalForm" action="controllers/tbPersonal/pRegistrar.php">
                    <div class="form-group">
                        <label class="control-label" for="inputSuccess" data-toggle="tooltip" data-placement="top" title="Ingrese nombres y apellidos">Nombres y Apellidos</label>
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
                                    <a class='btn btn-default dropdown-toggle btn-select' data-toggle='dropdown'>
                                        Seleccione <span class='caret'></span>
                                    </a>
                                    <ul class='dropdown-menu'>
                                        <?php 
                                            require_once('include/funciones.php');
                                            conectar('localhost', 'root', '', 'dbpjudicial');

                                            $consulta_mysql='SELECT vcdescripcion From tbregimen;';
                                            $resultado_consulta_mysql=mysql_query($consulta_mysql);
                                            while($registro = mysql_fetch_array($resultado_consulta_mysql)){
                                                echo " <li><a value='".$registro['cid']."'>".$registro['vcdescripcion']."</a></li>";
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
                                                    echo " <li><a value='".$registro['cid']."' href='#'>".$registro['vcnombre']."</a></li>";

                                                } 

                                                return $registro['cid'];
                                            }

                                            function show_Cargo($idArea)
                                            {
                                                
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
                        <div class="form-group">
                            <!--para seguridad-->
                            <input type="hidden" id="name_tockenn" value="">
                        </div>
                    </div>
                </form>
                </div>
                <div>
                    <input class="btn btn-primary" type="reset" value="Nuevo">
                    <button type="button" class="btn btn-primary"  id="btnRegPersonal" >Guardar</button>
                            <a class="btn btn-primary" value="cerrar" href='tables.php'>Salir</a>
                </div>
            </div>
        </div>
    </div>
<!--fin tabla empleado-->
<?php include('footer.php') ?>