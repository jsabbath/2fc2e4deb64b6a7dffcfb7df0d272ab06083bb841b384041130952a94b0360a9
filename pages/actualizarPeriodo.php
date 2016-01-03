  <?php include('header.php'); ?>
  <?php include('modals.php'); ?>

  <?php
	
	conectar('localhost','root','','dbpjudicial');

		$id=$_GET ['id'];
		$query="select * from tbperiodo where id='$id'";
  ?>

	<form action="" method="POST">
	    <div>
	        <div class="col-md-2">
	            Fecha de Inicio/Fin:  
	        </div>
	        <div class="col-md-3 center-block">
	            <input maxlength="9" class="form-control" type="text" placeholder="YYYY-YYYYY" name='vcdescripcion' required>
	        </div>
	    </div>
	    <br>
	    <div class="form-group"> <!--para seguridad-->
	        <input type="hidden" id="name_tocken" value=''>
	    </div>
	    <br>
	    
	    <div>
	    	<input type='submit' value="Registrar" class="btn btn-default">
	    	<input type="reset" value="Limpiar" class="btn btn-primary">
	    	<input	type='button' class="btn btn-warning" value="Actualizar">
	        <a class="btn btn-danger" value="cerrar" href='tables.php'>Salir</a>
	    </div>
	</form>
	 <!-- /.tabla regimen laboral existentes -->