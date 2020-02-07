<?php include_once 'header_empresa.php';?>

<section class="seccion contenedor">
    <?php 
        if(isset($_POST['submit'])){
            $nombre = $_POST['nombre_aviso'];
            $carga_horaria = $_POST['horas'];
            $descripcion = $_POST['descripcion'];
            $rubro = $_POST['rubro'];
            $id_empresa = $_POST['id_empresa'];

            // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>";

            try{
                require_once('includes/db_conexion.php');
                $sql = "INSERT INTO `avisos`(`nombre`, `descripcion`, `carga_horaria`, `id_empresa`, `id_rubro`) VALUES ('" . $nombre  . "','" . $descripcion . "','" . $carga_horaria . "','" . $id_empresa. "','" . $rubro . "')";
                echo "<p>". $sql."</p>";
                if($conn->query($sql)){
                    echo "<div class='alert alert-success' role='alert' style='text-align:center'>Aviso creado con éxito. Felicidades!</div>";
                    echo "<script>$('.alert').alert()</script>";
                }
                $conn->close();

            }
            catch(\Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
</section>
<?php include_once 'includes/footer.php';?>