<?php
// Datos simulados de un usuario válido (puedes mover esto a una base de datos más adelante)
$valid_email = "admin@example.com";
$valid_password = "12345";

// Iniciar sesión (permite mantener al usuario conectado si es necesario)
session_start();

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar credenciales
    if ($email === $valid_email && $password === $valid_password) {
        // Guardar sesión del usuario
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redirigir al panel
        header("Location: panel.php");
        exit();
    } else {
        // Mostrar un mensaje de error
        $error = "Correo o contraseña incorrectos.";
        include("index.html"); // Asegúrate de que este archivo esté en la misma carpeta
        exit();
    }
}
?>
