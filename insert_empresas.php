<?php
require_once 'includes/db_conexion.php';
require_once 'includes/funciones.php';

if(isset($_POST)){
	$nombre 		= $_POST['nombre_empresa'];
	$actividad 		= $_POST['actividad'];
	$email 			= $_POST['email'];
	$telefono	    = $_POST['telefono'];
	$username	    = $_POST['username'];
    $password 		= $_POST['password'];

    $sql = "INSERT INTO `empresas`(`actividad`, `nombre`, `email`, `telefono`, `username`, `password`) VALUES('" . $actividad  . "','" . $nombre  . "','" . $email  . "','" . $telefono  . "','" . $username . "','" . $password . "')";
    $resultado = $conn->query($sql);

    if($resultado){
        echo json_encode($resultado);
    } 

    $conn->close();
}
?>