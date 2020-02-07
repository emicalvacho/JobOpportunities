<?php 

require_once 'db_conexion.php';
require_once 'funciones.php';
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$q = "SELECT * FROM empresas where username = '$usuario' and password='$password'";
$resultado = $conn->query($q);

//checkArrayQuery($resultado->fetch_assoc());

if($resultado->num_rows>0){
    $empresa=$resultado->fetch_array(MYSQLI_ASSOC);
    $_SESSION['id_empresa'] = $empresa['id_empresa'];
    $_SESSION['nombre'] = $empresa['nombre'];
    $_SESSION['actividad'] = $empresa['actividad'];
    $_SESSION['emai'] = $empresa['email'];
    $_SESSION['telefono'] = $empresa['telefono'];
    $_SESSION['username'] = $usuario;
    header("location: ../avisos_empresa.php");
}else{?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="alert alert-danger text-center">
        Usuario y/o contraseña incorrectas!!! <strong><a href="../login.php">Volver al login</a></strong>
    </div>
</body>
</html>
<?php 
}

$conn->close();
?>
