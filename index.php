<html>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<head>
	<title>Principal</title>
</head>

<body>
	<div class="navbar">
		<img src="img/logo.png">
	</div>

	<div class="contenedor">
		<div class="formulario_login">
			<div class="title1">
				AUTENTICACIÓN
			</div>
			<div class="divider"></div>
			<img src="img/perfil.png" class="img-flat">
				<form action="login.php" method="POST" data-wow-offset="10" data-wow-delay="0.2s">
					<div>
						<input class= "textbox" name="user" type = "text" placeholder = "Ingrese usuario" required>
					</div>
					<div>
						<input class= "textbox" name="pass" type = "password" placeholder = "Ingrese contraseña" required>
					</div>
					<div>
						<input  class="button_BLUEJEANS" type = "submit" value="Ingresar" href="modulos/panelControl.php">
						<br>
					</div>
					<!--div class="alert alert-danger">
						Error ! Change few things.
					</div--> 
											
				</form>
		</div>
	</div>

</body>
</html>