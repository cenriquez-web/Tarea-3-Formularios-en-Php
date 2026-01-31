<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "<h2 style='color: red;'>Error</h2>";
    echo "<p>Todos los campos son obligatorios.</p>";
    echo "<a href='2_registro.html'>Volver</a>";
} elseif ($password !== $confirm_password) {
    echo "<h2 style='color: red;'>Error</h2>";
    echo "<p>Las contraseñas no coinciden.</p>";
    echo "<a href='2_registro.html'>Volver</a>";
} else {
   
    $datos = "Usuario: $username, Email: $email, Password: $password\n";
    file_put_contents('usuarios.txt', $datos, FILE_APPEND);
    
    echo "<h2 style='color: green;'>¡Registro exitoso!</h2>";
    echo "<p>Bienvenido, <strong>" . htmlspecialchars($username) . "</strong></p>";
    echo "<p>Tu correo es: " . htmlspecialchars($email) . "</p>";
    echo "<a href='1_login.html'>Ir al Login</a>";
}
?>
