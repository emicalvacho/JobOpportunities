<?php include_once 'includes/header.php';?>
<section class="seccion contenedor">
    <?php 
        if(isset($_POST['submit'])){
            $nombre = $_POST['nombre_pers'];
            $apellido = $_POST['apellido_pers'];
            $email = $_POST['email_pers'];
            $dni = $_POST['dni_pers'];
            $telefono = $_POST['telefono_pers'];
            $experiencia = $_POST['exp'];
            $profesion = $_POST['profesion_pers'];       
            $id_aviso = $_POST['id_aviso'];

            // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>";

            try{
                require_once('includes/db_conexion.php');
                $sql = "INSERT INTO postulados(dni,nombre,apellido,email,telefono,profesion,experiencia,id_aviso) VALUES('" . $dni  . "','" . $nombre . "','" . $apellido . "','" . $email . "','" . $telefono . "','" . $profesion . "','" . $experiencia . "','" . $id_aviso . "')";
                //echo "<p>". $sql."</p>";
                if($conn->query($sql)){
                    echo "<div class='alert alert-success' role='alert' style='text-align:center'>Postulación exitosa. Felicidades!</div>";
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