<?php
// Conexión a la base de datos MongoDB
$cliente = new MongoDB\Client("mongodb://localhost:27017");
$base_de_datos = $cliente->crud; // Nombre de tu base de datos
$coleccion = $base_de_datos->usuarios; // Nombre de tu colección de usuarios

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Hash de la contraseña

    // Crear el documento del usuario
    $documento = [
        'nombre' => $nombre,
        'email' => $email,
        'contraseña' => $contraseña
    ];

    // Insertar el documento en la colección de usuarios
    $coleccion->insertOne($documento);

    // Redirigir al usuario a una página de éxito o mostrar un mensaje de éxito aquí
    echo "¡Registro exitoso! Ahora puedes iniciar sesión.";
} else {
    // Si se intenta acceder al script de procesamiento directamente sin enviar datos del formulario, redireccionar al formulario de registro
    header("Location: registro.html");
    exit;
}
?>



