<?php
    try{
        require_once('includes/db_conexion.php');
        $sql = "SELECT nombre, 
                actividad, 
                telefono, 
                email 
                FROM empresas 
                WHERE id_empresa = " . $_POST['id_empresa'];
        $resultado = $conn->query($sql);
        $datos_empresa = $resultado->fetch_assoc();
        $conn->close();
    }
    catch(\Exception $e){
        $error = $e->getMessage();
    }
?>