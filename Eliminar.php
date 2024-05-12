
<?php 
        include "./hearder.php";
        include "./Clases/Conexion.php";
        include "./Clases/Crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->ObtenerDocumento($id);


?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">
                    <a href="index.php" class="btn btn-info"><i class="fa-solid fa-rotate-left"></i> Regresar</a>

                    <h2>Eliminar Registro</h2>

                    <table class="table table-bordered fondoDelete1">
                        <thead>
                            <th>Apellido Parterno</th>
                            <th>Apellido Marterno</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <?php echo $datos -> paterno; ?> </td>
                                <td> <?php echo $datos -> materno; ?> </td>
                                <td> <?php echo $datos -> nombre; ?> </td>
                                <td> <?php echo $datos -> fecha_nacimiento; ?> </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                     <div class="alert alert-danger" role="alert">
                        <p>¿Estas seguro que quieres Eliminar el Registro?</p>
                       
                        <p>Una vez Eliminado ya no se podra ser Recuperado</p>
                     </div>  
                    <form action="./Procesos/Eliminar.php" method="POST">
                     <input type="text" name="id" value="<?php echo $datos -> _id; ?>" hidden>
                    <button class = "btn btn-danger mt-3"><i class="fa-solid fa-user-xmark"></i> Eliminar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>