<?php
// Capturamos lo que el usuario escribió en el formulario
$usuario_ingresado = $_POST['username'];
$clave_ingresada = $_POST['password'];

// Esta es nuestra "base de datos" local de empleados
$tabla_acceso = [
    "gerente_general" => "Gte2026",
    "cajero_turno" => "Caja123",
    "vendedor_aux" => "Vende99"
];

// Validamos si los datos existen en nuestra tabla
if (isset($tabla_acceso[$usuario_ingresado]) && $tabla_acceso[$usuario_ingresado] == $clave_ingresada) {
    echo "<div style='font-family: Arial; text-align: center; margin-top: 50px;'>";
    echo "<h2 style='color: #2e7d32;'>✅ Ingreso Exitoso</h2>";
    echo "<p>Bienvenido al sistema, <b>" . htmlspecialchars($usuario_ingresado) . "</b>.</p>";
    echo "<a href='3_ventas.html' style='padding: 10px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Ir al Punto de Venta</a>";
    echo "</div>";
} else {
    echo "<div style='font-family: Arial; text-align: center; margin-top: 50px;'>";
    echo "<h2 style='color: #c62828;'>❌ Error de Autenticación</h2>";
    echo "<p>El usuario o la clave no son correctos. Por favor, revisa tus datos.</p>";
    echo "<a href='1_login.html'>Intentar de nuevo</a>";
    echo "</div>";
}
?>