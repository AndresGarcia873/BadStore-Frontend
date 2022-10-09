<?php
    include("conexion.php");
    $con = conectar();

    if (isset($_POST['inicio'])) {
        if (strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1) {                
                $correo = trim($_POST['correo']);
                $contrasena = trim($_POST['contrasena']);

                $consulta = "SELECT correo, contrasena FROM login WHERE correo = '$correo' AND contrasena = '$contrasena'";
                $resultado = mysqli_query($con, $consulta);
                if ($resultado->fetch_object()) {
                    header('location: /BadStore-Frontend/inicio.php');
                } else {
                    header('location: /BadStore-Frontend/index.php');
                }
        } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    Todos los campos son obligatorios!
                </div>
            <?php
        }
    }
?>