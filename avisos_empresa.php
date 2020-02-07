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
			<h2>Mis avisos</h2>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
				<a class="navbar-brand text-monospace">BUSCADOR DE AVISOS <i class="fas fa-search"></i></a>
				<input class="form-control mr-sm-4" type="text" name="termino" id="nombre_aviso" placeholder="Digite el rubro o nombre de aviso que desea buscar..." aria-label="Search">
			</nav>	
		</div>    
		<?php //checkPost($_SESSION); ?>
		
		<div class="avisos seccion" id="mis_avisos"></div>
	</section>
</section>

<?php include_once 'includes/footer.php' ?>   
<?php } ?>