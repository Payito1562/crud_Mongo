<?php session_start();
    include "../Clases/Conexion.php";
    include "../Clases/Crud.php";

    $Crud = new Crud();

    $id = $_POST['id'];
    $datos = array(
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento']

    );

    $respuesta = $Crud->ActualizarDatos($id,$datos);

    if ($respuesta -> getModifiedCount() > 0 || $respuesta -> getMatchedCount() > 0) {
        
        $_SESSION['mensaje_crud']='update';

        header("location:../index.php");

    }else {

        print_r($respuesta);

    }
?>