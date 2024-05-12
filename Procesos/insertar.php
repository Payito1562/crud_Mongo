<?php  session_start();

    include "../Clases/Conexion.php";
    include "../Clases/Crud.php";

    $Crud = new Crud();

    $datos = array(
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento']

    );

        $respuesta = $Crud->insertarDatos($datos);

        if ($respuesta->getInsertedId() > 0 ) {

            $_SESSION['mensaje_crud']='insert';
            header("location:../index.php");
        }else {
            print_r($respuesta);
        }

?>