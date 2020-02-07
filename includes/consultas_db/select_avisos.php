<?php 

try{
	include_once 'includes/db_conexion.php';
	
	$consulta="SELECT a.id_aviso, 
					a.nombre AS nombre_aviso, 
					a.descripcion, 
					a.carga_horaria, 
					e.nombre AS nombre_empresa, 
					e.id_empresa, 
					r.nombre AS nombre_rubro 
				FROM avisos a 
				INNER JOIN empresas e 
					ON e.id_empresa = a.id_empresa 
				INNER JOIN rubros r 
					ON r.id_rubro = a.id_rubro ";
	$termino= "";
		
	if(isset($_POST['productos'])){
		$termino=$conn->real_escape_string($_POST['productos']);
		$consulta .= " WHERE a.nombre LIKE '%".$termino."%' 
						OR e.nombre LIKE '%".$termino."%' 
						OR r.nombre LIKE '%".$termino."%'";
	}
		
	$consultaBD=$conn->query($consulta);
	$conn->close();
}
catch(\Exception $e){
	$error = $e->getMessage();
}

?>
