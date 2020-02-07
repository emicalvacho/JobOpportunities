<?php 
try{
	include_once 'includes/db_conexion.php';
	include_once 'includes/funciones.php';
	
	$consulta="SELECT * FROM rubros";
		
	//checkQuery($consulta);
	$consultaBD=$conn->query($consulta);
	$conn->close();
}
catch(\Exception $e){
	$error = $e->getMessage();
}

?>
