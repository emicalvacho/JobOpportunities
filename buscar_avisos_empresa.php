<?php 

	include_once 'includes/consultas_db/select_avisos_empresa.php';
	include_once 'includes/funciones.php';

	if($consultaBD->num_rows>0){
		echo "<form method='post'>";
		while($aviso=$consultaBD->fetch_array(MYSQLI_ASSOC)){
		echo "<button class='aviso' type='submit'>";
			inputHidden('hora',$aviso['carga_horaria']);
			inputHidden('rubro',$aviso['nombre_rubro']);
			inputHidden('aviso',$aviso['nombre_aviso']);
			inputHidden('id_aviso',$aviso['id_aviso']);
			inputHidden('descripcion',$aviso['descripcion']);?>
			
			<p class='titulo'>
				<?php echo $aviso['nombre_aviso']; ?>
			</p>

			<p class='hora'>
				<i class='fa fa-clock' aria-hidden='true'></i> 
				<?php echo $aviso['carga_horaria']; ?>
			</p>

			<p>
				<i class='fas fa-map-signs'></i>
				<?php echo $aviso['nombre_rubro']; ?>
			</p>

			<p> 
				<i class='fas fa-info'></i>
				<?php echo $aviso['descripcion']; ?>
			</p>
		</button>
		<?php } 
		echo "</form>";
	}else{
		echo "<center>
				<h4>
				No hemos encotrado ningun registro con la palabra
				<strong class='text-uppercase'>".$termino."</strong>
				</h4>
			<center>";
	}
?>