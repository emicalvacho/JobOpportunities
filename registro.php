<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    
    <script src="js/registro.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<link rel="stylesheet" href="css/normalize.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">	
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	<div class="container-login100" style="background-image: url('img/background.jpg');">
	<div class="wrap-login100 p-b-30">
		
	<form action="insert_empresas.php" id="registrationForm" name="registrationForm" class="needs-validation" method="post"  novalidate>
		<div class="login100-form-avatar">
			<a href="index.php"><img src="img/icono.png" alt="AVATAR"></a>
		</div>
		<span class="login100-form-title p-t-20 p-b-20">
			Job Opportunities
		</span>
        <div class="col-sm-30">

			<div class="wrap-input100 m-b-10">
				<input type="text" class="form-control input100" id="validationCustom01" name="nombre_empresa" placeholder="Nombre de la empresa" required>
				<div class="invalid-feedback">
					Por favor complete con su NOMBRE.
				</div>
			</div>


			<div class="wrap-input100 m-b-10">
				<input type="text" class="form-control input100" id="validationCustom02" name="actividad" placeholder="Actividad" required>
				<div class="invalid-feedback">
					Por favor complete con la ACTIVIDAD.
				</div>
			</div>
	

			<div class="wrap-input100 m-b-10">
				<input type="email" class="form-control input100" id="validationCustom03" name="email" placeholder="E-mail" required>
				<div class="invalid-feedback">
					Por favor complete con su EMAIL o escribalo correctamente.
				</div>
			</div>
	

			<div class="wrap-input100 m-b-10">
				<input type="text" class="form-control input100" id="validationCustom04" name="telefono" placeholder="Telefono" required>
				<div class="invalid-feedback">
					Por favor complete con su TELÉFONO.
				</div>
			</div>

			<div class="wrap-input100 m-b-10">
				<input type="text" class="form-control input100" id="validationCustom05" name="username" placeholder="Usuario" required>
				<div class="invalid-feedback">
					Por favor complete con un USUARIO.
				</div>
			</div>



			<div class="wrap-input100 m-b-10">
				<input type="text" class="form-control input100" id="validationCustom06" name="password" placeholder="Contraseña" required>
				<div class="invalid-feedback">
					Por favor complete con una CONTRASEÑA.
				</div>
			</div>

			<div class="container-login100-form-btn p-t-10">
				<input type="hidden" name="btnRegistro" value="1">
				<button class="login100-form-btn" type="submit" name="submit" >Registrate</button>
			</div>
		</div>

		
	</form>    
	</div>
	</div>
</body>
</html>