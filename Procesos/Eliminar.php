<?php  session_start();
    include "../Clases/Conexion.php";
    include "../Clases/Crud.php";
    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->EliminarDatos($id);

    if ($respuesta->getDeletedCount() > 0) {

        $_SESSION['mensaje_crud']='delete';

        header("location:../index.php");

    }else {

        print_r($respuesta);

    }

?>