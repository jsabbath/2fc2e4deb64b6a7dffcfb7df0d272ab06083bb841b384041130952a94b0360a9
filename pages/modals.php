
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
    </div>
</div>
<br>