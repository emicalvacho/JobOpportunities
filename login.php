<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">	
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" href="css/normalize.css"> 
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/background.jpg');">
			<div class="wrap-login100 p-b-30">
				<form class="login100-form validate-form" action="includes/loguear.php" method="post">
					<div class="login100-form-avatar">
						<a href="index.php"><img src="img/icono.png" alt="AVATAR"></a>
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Job Opportunities
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Falta usuario">
						<input class="input100" type="text" name="usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Falta contraseña">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" name="login" type="submit">
							Ingresar
						</button>
					</div>

					<div class="text-center w-full font-weight-bold fixed-bottom">
						No tienes una cuenta? <a class="txt1 text-primary" href="registro.php">Registrate<i class="fa fa-long-arrow-right"></i></a>
					</div>
				</form>
			</div>
		</div>
	</div>
			
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/login.js"></script>
</body>
</html>