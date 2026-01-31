<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Punto de Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <div class="card p-4 shadow-sm border-0">
        <h2 class="text-center mb-4 text-success">🍔 Sistema de Comandas</h2>
        
        <form action="procesar_venta.php" method="POST">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5 class="border-bottom pb-2">1. Selecciona un Paquete</h5>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="paquete" value="pkg1">
                        <label class="form-check-label">Combo 1: Burguer + Papas + Refresco ($62)</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="paquete" value="pkg2">
                        <label class="form-check-label">Combo 2: Pizza + Nuggets + Refresco ($107)</label>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="border-bottom pb-2">2. Productos Individuales</h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <label class="small">Hamburguesa ($35)</label>
                            <input type="number" name="hamburguesa" class="form-control" min="0">
                        </div>
                        <div class="col-6">
                            <label class="small">Papas ($15)</label>
                            <input type="number" name="papas" class="form-control" min="0">
                        </div>
                        <div class="col-6">
                            <label class="small">Refresco ($12)</label>
                            <input type="number" name="refresco" class="form-control" min="0">
                        </div>
                        <div class="col-6">
                            <label class="small">Pizza ($70)</label>
                            <input type="number" name="pizza" class="form-control" min="0">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-dark p-3 rounded text-white mt-3">
                <h5>3. Finalizar Pedido</h5>
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <label>Monto con el que paga el cliente:</label>
                        <input type="number" step="0.01" name="pago" class="form-control form-control-lg" placeholder="$ 0.00" required>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning w-100 btn-lg fw-bold">PROCESAR PAGO</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>