<?php include_once 'includes/header.php';?>
<?php include_once 'includes/funciones.php';?>
<?php  include_once 'includes/consultas_db/select_empresas.php';?>

<section class="seccion contenedor">
    <h2>Información del aviso seleccionado</h2>
    <ul class="detalle-aviso clearfix">
        <li>
            <div class="tabla-detalle">
                <h3><?php echo $_POST['aviso'] ?></h3>
                <p>Carga horaria: <?php echo $_POST['hora'] ?> hs.</p>
                <p>Descripcion: <?php echo $_POST['descripcion'] ?></p>
            </div>
        </li>
        <li>
            <div class="tabla-detalle">
                <h3><?php echo $_POST['empresa'] ?></h3>
                <p><i class="fas fa-tasks"></i> <?php echo $datos_empresa['actividad'] ?></p>
                <p><i class="fas fa-envelope"></i> <?php echo $datos_empresa['email'] ?></p>
                <p><i class="fas fa-phone"></i> <?php echo $datos_empresa['telefono'] ?></p>
            </div>
        </li>
    </ul>
</section>

<section class="seccion contenedor">
    <h2>Completar datos para postularse</h2>
    <form class="needs-validation registro" action="check_registro_pers.php" method="post" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre_pers" placeholder="Nombre" required>
                <div class="valid-feedback">
                    Completado!
                </div>
                <div class="invalid-feedback">
                    Por favor complete con su NOMBRE.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02" name="apellido_pers" placeholder="Apellido" required>
                <div class="valid-feedback">
                    Completado!
                </div>
                <div class="invalid-feedback">
                    Por favor complete con su APELLIDO.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom03">DNI</label>
                <input type="number" class="form-control" id="validationCustom03" name="dni_pers" placeholder="DNI" required>
                <div class="valid-feedback">
                    Completado!
                </div>
                <div class="invalid-feedback">
                    Por favor complete con su DNI.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom04">Email</label>
                <input type="Email" class="form-control" id="validationCustom04" name="email_pers" placeholder="mail@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                <div class="valid-feedback">
                    Completado!
                </div>
                <div class="invalid-feedback">
                    Por favor complete con su EMAIL o escribalo correctamente.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom06">Teléfono</label>
                <input type="text" class="form-control" id="validationCustom05" name="telefono_pers" placeholder="+54 9 3571 23-4578" required>
                <div class="valid-feedback">
                    Completado!
                </div>
                <div class="invalid-feedback">
                    Por favor complete con su TELÉFONO.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom05">Profesión u oficio</label>
                <input type="text" class="form-control" id="validationCustom06" name="profesion_pers" placeholder="Profesión u Oficio" required>
                <div class="valid-feedback">
                    Completado!
                </div>
                <div class="invalid-feedback">
                    Por favor complete con una PROFESIÓN o un OFICIO.
                </div>
            </div>
            <div class="col-md-6 mb-3 radioExperiencia">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="exp" value="Sin experiencia" class="custom-control-input" checked>
                    <label class="custom-control-label" for="customRadioInline1">Sin experiencia</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="exp" value="Con experiencia" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Con experiencia</label>
                </div>
            </div>
        </div>
		<?php inputHidden('id_aviso',$_POST['id_aviso']); ?>
        <button class="btn btn-primary button" type="submit" name="submit" >Postularse</button>
    </form>    
</section>

<?php include_once 'includes/footer.php';?>
