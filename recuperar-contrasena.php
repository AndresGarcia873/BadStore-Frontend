<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Store</title>
    <!-- Bootstrap v5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login" style="width:450px;">
        <a href="index.php" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left fs-3"></i>
        </a>
        <h1 class="text-center">¿Olvido su Contraseña?</h1>
        <hr>
        <form class="needs-validation" action="">
            <div class="form-group was-validated">
                <label class="form-label" for="correo">Correo:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="icono-email"><i class="bi bi-envelope"></i></span>
                    <input class="form-control" type="email" aria-describedby="icono-email" placeholder="Introduzca Su Correo" name="correo" id="correo" required title="Correo">
                </div>
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Correo
                </div>
            </div>

            <div class="text-center">
                <a href="" class="link-info fs-6 text-decoration-none">¿Necesito Ayuda?</a>
            </div>
            
            <a href="#" class="btn btn-primary btn-lg w-100 mt-3">Enviar</a>
        </form>
    </div>
</body>
</html>