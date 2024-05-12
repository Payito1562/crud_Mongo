<?php  session_start();

    include "../clases2/conexion2.php";
    include "../clases2/crud2.php";

    $Crud = new Crud();

    $datos = array(
        "Nombre" => $_POST['Nombre'],
        "Correo" => $_POST['Correo'],
        "Contraseña" => $_POST['Contraseña']

    );

        $respuesta = $Crud->insertarDatos($datos);

        if ($respuesta->getInsertedId() > 0 ) {

            $_SESSION['mensaje_crud']='insert';
            header("location:../registro.php");
        }else {
            print_r($respuesta);
        }

?>