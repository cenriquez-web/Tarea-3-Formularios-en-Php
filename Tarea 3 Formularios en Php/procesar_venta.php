<?php
// Listado de precios oficiales
$lista_precios = [
    "hamburguesa" => 35.00, "papas" => 15.00, "refresco" => 12.00,
    "pizza" => 70.00, "nuggets" => 25.00, "ensalada" => 30.00,
    "yogurt" => 15.00, "agua" => 12.00
];

$suma_productos = 0;

// 1. Verificamos si eligió un paquete (Radio Buttons)
if (isset($_POST['paquete'])) {
    $seleccion = $_POST['paquete'];
    if ($seleccion == "pkg1") $suma_productos += 62; // Precio combo 1
    if ($seleccion == "pkg2") $suma_productos += 107; // Precio combo 2
    if ($seleccion == "pkg3") $suma_productos += 57; // Precio combo 3
}

// 2. Sumamos los productos individuales (Cajas de texto)
foreach ($lista_precios as $nombre => $costo) {
    if (!empty($_POST[$nombre]) && $_POST[$nombre] > 0) {
        $cantidad = (int)$_POST[$nombre];
        $suma_productos += ($cantidad * $costo);
    }
}

// 3. Cálculos de impuestos (IVA 16%)
$impuesto_iva = $suma_productos * 0.16;
$gran_total = $suma_productos + $impuesto_iva;
$efectivo_cliente = (float)$_POST['pago'];
$cambio_entregar = $efectivo_cliente - $gran_total;

// Diseño del ticket (Bootstrap embebido para que se vea profesional)
echo "<html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'></head><body class='p-5 bg-light'>";
echo "<div class='container'><div class='card mx-auto shadow' style='max-width: 500px;'><div class='card-body'>";
echo "<h3 class='text-center border-bottom pb-2'>Resumen de Venta</h3>";
echo "<p class='d-flex justify-content-between'><span>Monto Base:</span> <b>$" . number_format($suma_productos, 2) . "</b></p>";
echo "<p class='d-flex justify-content-between'><span>IVA (16%):</span> <b>$" . number_format($impuesto_iva, 2) . "</b></p>";
echo "<h4 class='text-primary d-flex justify-content-between'><span>TOTAL:</span> <b>$" . number_format($gran_total, 2) . "</b></h4>";
echo "<hr>";
echo "<p class='text-muted'>Recibido: $" . number_format($efectivo_cliente, 2) . "</p>";

if ($cambio_entregar >= 0) {
    echo "<div class='alert alert-success'><b>Cambio a devolver: $" . number_format($cambio_entregar, 2) . "</b></div>";
} else {
    echo "<div class='alert alert-danger'><b>Faltan: $" . number_format(abs($cambio_entregar), 2) . "</b></div>";
}

echo "<div class='text-center mt-3'><a href='3_ventas.html' class='btn btn-outline-dark'>Regresar</a></div>";
echo "</div></div></div></body></html>";
?>