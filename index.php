
<?php session_start();

    include "./Clases/Conexion.php";
    include "./Clases/Crud.php";
    $crud = new Crud();
    $datos = $crud -> mostrarDatos();

    $mensaje='';
    if (isset($_SESSION['mensaje-crud'])) {
        $mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
        unset($_SESSION['mensaje_crud']);
    }

?>
<?php include "./hearder.php"; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="nuevo mt-4">
                <div class="card-body">
                <h2>Crud con mongodb y php </h2>
                <a href="Agregar.php" class="btn btn-primary">
                <i class="fa-solid fa-user-plus"></i> Agregar nuevo registro
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered ">
                    <thead >
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        
                    </thead>
                    <tbody>
                    <?php 
                    foreach($datos as $item) { 
                    ?>
                        <tr>
                            <td> <?php echo $item -> paterno; ?> </td>
                            <td> <?php echo $item -> materno; ?> </td>
                            <td> <?php echo $item -> nombre; ?> </td>
                            <td> <?php echo $item -> fecha_nacimiento; ?> </td>
                            <td class="text-center">
                                <form action="./actualizar.php" method="POST">
                                <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                    <button class = "btn btn-warning">
                                    <i class="fa-solid fa-user-pen"></i>
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form  action="./eliminar.php" method="POST">
                                    <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                    <button class = "btn btn-danger">
                                    <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </form> 
                            </td>
                        
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>

<?php include "./scripts.php"; ?>
<script>
    let mensaje = <?php echo $mensaje; ?>
    console.log(mensaje);
</script>
