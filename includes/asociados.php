<?php 
	try{
		require_once('includes/db_conexion.php');
		$sql = "SELECT * FROM empresas LIMIT 6;";
		$resultado = $conn->query($sql);
		$conn->close();
	}
	catch(\Exception $e){
		echo $e->getMessage();
	}
?>

<section class="asociados seccion contenedor">
	<h2>Empresas e instituciones asociados</h2>
	<ul class="lista-asociados clearfix">
		<?php while($asociados = $resultado->fetch_assoc()){ ?>
			<li>
				<div class="asociado">
					<img src="img/<?php echo $asociados['logo']; ?>" alt="Imagen asociado">
					<p><?php echo $asociados['nombre']; ?></p>
				</div> 
			</li>
			
			<div style="display:none;">
				<div class="asociado-info" id="asociado<?php echo $asociados['id_asociado']; ?>">
					<h2><?php echo $asociados['nombre']; ?></h2>
					<img src="img/<?php echo $asociados['logo']; ?>" alt="">
					<p><?php echo $asociados['descripcion']; ?></p>
				</div>
			</div>
		<?php } ?>
	</ul>
</section>  