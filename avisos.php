<?php include_once 'includes/header.php';?>

<section class="contenedor">
	<div class="seccion" >
		<h2>Busca y Selecciona un aviso</h2>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand text-monospace">BUSCADOR DE AVISOS <i class="fas fa-search"></i></a>
			<input class="form-control mr-sm-4" type="text" name="termino" id="termino" placeholder="Digite el rubro, empresa o nombre de aviso que desea buscar..." aria-label="Search">
		</nav>	
		<div class="avisos seccion" id="datos"></div>
	</div>    
</section>

<?php include_once 'includes/footer.php';?>