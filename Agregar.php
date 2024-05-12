<?php include "./hearder.php"; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info"><i class="fa-solid fa-rotate-left"></i>Regresar</a>
                <h2>Agregar nuevo registro</h2>
                
                <form action="./Procesos/insertar.php" method="post">
                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id=" paterno" name="paterno">
                    <label for="materno">Apellido Materno</label>
                    <input type="text" class="form-control" id="materno" name="materno">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                    <label for="fecha_nacimiento">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                    <button class = "btn btn-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Agregar</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

<?php include "./scripts.php"; ?>