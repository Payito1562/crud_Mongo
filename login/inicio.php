<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login crud</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="contenedor">
            <div class="formulario">
                <form id="loginForm"> <!-- Agregué el id "loginForm" al formulario -->
                    <h1>Iniciar sesión al CRUD</h1>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="usuario" name="email" required> <!-- Cambié el id a "usuario" y agregué el atributo name -->
                        <label for="email">Email</label> 
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="contrasena" name="contraseña" required> <!-- Cambié el id a "contrasena" y agregué el atributo name -->
                        <label for="password">Contraseña</label> 
                    </div>

                    <div class="olvidar">
                        <label for="olvidar"> 
                            <input type="checkbox">recordar 
                            <a href="#">Olvidé la contraseña</a>
                        </label>
                    </div>

                    <button type="submit">Iniciar sesión</button> 
                </form>
                <div class="registrar"> 
                    <p>No tengo cuenta <a href="registro.php">Crear una</a></p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Objeto que almacena las credenciales de los usuarios permitidos
        var usuariosPermitidos = {
            "Victor@gmail.com": "1234",
            "Gustavo@gmail.com": "12345",
            "Cesar@gmail.com": "123456",
            "Aaron@gmail.com": "1234567",
            "usuario5": "contraseña5",
            "usuario6": "contraseña6",
            "usuario7": "contraseña7",
            "usuario8": "contraseña8",
            "usuario9": "contraseña9",
            "usuario10": "contraseña10"
            // Puedes agregar más usuarios aquí según sea necesario
        };

        document.getElementById("loginForm").addEventListener("submit", function(event){
            event.preventDefault(); // Evitar que se envíe el formulario
            var usuario = document.getElementById("usuario").value;
            var contrasena = document.getElementById("contrasena").value;
            // Verificar si las credenciales coinciden con algún usuario permitido
            if (usuariosPermitidos.hasOwnProperty(usuario) && usuariosPermitidos[usuario] === contrasena) {
                alert("Inicio de sesión exitoso.");
                // Aquí podrías redirigir a una página de inicio de sesión exitoso
                window.location.href = "../index.php";
            } else {
                alert("Credenciales incorrectas. Por favor, inténtelo de nuevo.");
            }
        });
    </script>
</body>
</html>

