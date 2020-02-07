<?php 
session_start();
try{
	include_once 'includes/db_conexion.php';
	include_once 'includes/funciones.php';
	
	$consulta="SELECT a.id_aviso, 
					a.nombre AS nombre_aviso, 
					a.descripcion, 
					a.carga_horaria, 
					r.nombre AS nombre_rubro 
				FROM avisos a 
				INNER JOIN rubros r 
					ON r.id_rubro = a.id_rubro 
				WHERE a.id_empresa =  ".$_SESSION['id_empresa'];
	$termino= "";
		
	if(isset($_POST['productos'])){
		$termino=$conn->real_escape_string($_POST['productos']);
		$consulta .= " AND a.nombre LIKE '%".$termino."%' 
						OR r.nombre LIKE '%".$termino."%'";
	}
	//checkQuery($consulta);
	$consultaBD=$conn->query($consulta);
	$conn->close();
}
catch(\Exception $e){
	$error = $e->getMessage();
}

?>
