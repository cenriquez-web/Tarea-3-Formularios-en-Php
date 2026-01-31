<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso al Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #2c3e50; display: flex; align-items: center; min-height: 100vh; }
        .card-login { border-radius: 20px; border: none; }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-login p-4 shadow-lg">
                <h3 class="text-center mb-4">🔐 Panel de Control</h3>
                
                <form action="procesar_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="username" class="form-control" placeholder="Ej: gerente_general" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2">ENTRAR AL SISTEMA</button>
                    <div class="mt-3 text-center">
                        <a href="registro.php" class="text-muted small">¿Nuevo empleado? Regístrate aquí</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>