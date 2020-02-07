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
    <h2>Crear avisos</h2>
    <form class="needs-validation registro" action="check_crear_aviso.php" method="post" novalidate>
        <div class="col-md-6 mb-3">
            <label for="validationCustom01">Nombre del aviso</label>
            <input type="text" class="form-control" id="validationCustom01" name="nombre_aviso" placeholder="Aviso..." required>
            <div class="valid-feedback">
                Completado!
            </div>
            <div class="invalid-feedback">
                Por favor complete con el NOMBRE DE AVISO.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationTextarea">Descripción</label>
            <textarea class="form-control" id="validationTextarea" name="descripcion" placeholder="Descripción..." required></textarea>
            <div class="invalid-feedback">
                Por favor completa con una DESCRIPCIÓN.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="slidecontainer">
                <label for="myRange">Carga horaria</label>
                <input type="range" min="4" max="12" value="8" class="custom-range" id="myRange" name="horas">
                <p><span id="demo"></span> hs.</p>
            </div>
        </div>

        <?php 
        include_once 'includes/consultas_db/select_rubros.php';
        ?>
        <div class="col-md-6 mb-3">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Rubro</label>
            </div>
                <select class="custom-select" id="inputGroupSelect01" name="rubro">
                    <option selected>Selecciona...</option>
                    <?php 
                    if($consultaBD->num_rows>0){
                        while($rubro=$consultaBD->fetch_array(MYSQLI_ASSOC)){
                            echo "<option value='".$rubro['id_rubro']."'>";
                            echo $rubro['nombre'];
                            echo "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <input type="hidden" name="id_empresa" value="<?php echo $_SESSION['id_empresa']; ?>"> 
        <div class="col-md-6 mb-3">
            <button class="btn btn-primary button" type="submit" name="submit" >Crear</button>
        </div>
    </form>    
</section>

<?php include_once 'includes/footer.php'; ?>
<?php } ?>