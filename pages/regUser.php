<?php include('header.php'); ?>    
<?php include('modals.php'); ?>            
              
<div class="contenedor">
	<form class="formulario_login" action="include/CRUUser.php" method="POST">
		<div class="row">
			<div class="col-md-5">
				<h4>
					REGISTRO DE USUARIO
				</h4>
			</div>
			
		</div>
		<div class="divider"></div>
		<div class="row">
			<div class="col-md-5">
				<input  class= "form-control" type = "text" placeholder = "Ingrese usuario" name="vcusername" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-5">
				<input  class= "form-control" type = "password" placeholder = "Ingrese contraseña" name="vcpassword" required>
			</div>
		</div>	
		<br>
		<div class="row">
			<div class="col-md-1">
				<input  class="btn btn-danger" type = "submit" value="Registrar">
			</div>
			<div class="col-md-1">
				<input  class="btn btn-success" type = "reset" value="Limpiar">
			</div>
		</div>		
		
	</form>
</div>
	
<?php include('footer.php') ?>