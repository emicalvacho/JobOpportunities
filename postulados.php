<?php 
session_start();

$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: login.php");
}else{
?>

<?php include_once 'header_empresa.php' ?>   
<?php include_once 'includes/funciones.php' ?>   

<section class="seccion contenedor">
    <section class="contenedor">
		<div class="seccion" >
			<h2>Postulados</h2>
		
			<div class="avisos seccion">
				<?php 
				include_once 'includes/consultas_db/select_postulados.php';
				include_once 'includes/funciones.php';

				//checkQuery($consulta);

				if($consultaBD->num_rows>0){
					
					$postulados = array();
					while($postulacion = $consultaBD->fetch_assoc()){ 
						$rubro = $postulacion['nombre_rubro'];
						
						$postulado = array(
							'nombre' => $postulacion['nombre_postulado'] . " " . $postulacion['apellido'],
							'dni' => $postulacion['dni'],
							'email' => $postulacion['email'],
							'telefono' => $postulacion['telefono'],
							'profesion' => $postulacion['profesion'],
							'experiencia' => $postulacion['experiencia'],
							'aviso' => $postulacion['nombre_aviso'],
						);   
						
						$postulados[$rubro][] = $postulado;
					}

					foreach($postulados as $rubro => $lista_postulados){ ?>
						<h3><i class="fas fa-map-signs"></i> <?php echo $rubro; ?></h3>
						<?php foreach ($lista_postulados as $postulado){ ?>
							<button class='aviso'>
								<p class='titulo'><?php echo $postulado['aviso']; ?></p>
								<p><i class='fas fa-user'></i> <?php echo $postulado['nombre']; ?></p>
								<p><i class='fas fa-id-card'></i> <?php echo $postulado['dni']; ?></p>
								<p><i class='fas fa-envelope'> </i> <?php echo $postulado['email']; ?></p>
								<p><i class='fas fa-phone'></i> <?php echo $postulado['telefono']; ?></p>
								<p><i class="fas fa-briefcase"></i> <?php echo $postulado['profesion']; ?></p>		
								<p><i class='fas fa-business-time'></i> <?php echo $postulado['experiencia']; ?></p>						
							</button>
						<?php } ?>  
					<?php }    
				}else{
					echo "<center>
							<h4>
							No hemos encotrado ningun postulado
							</h4>
						<center>";
				}
				?>				
		</div>
	</section>
</section>

<?php include_once 'includes/footer.php' ?>   

<?php } ?>

    
      