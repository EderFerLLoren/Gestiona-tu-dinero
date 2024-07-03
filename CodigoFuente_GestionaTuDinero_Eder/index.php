<?php
include_once "model/inicio.php";

// Comprobación de inicio de sesión de usuario
if (isset($_SESSION['UsuarioId'])) {
    header('Location: vista-controlador/3-Panel.php');
}

// Validar las credenciales y registrar al usuario
if (isset($_POST['login']) && !empty($_POST)) {
    $password = $_POST['password'];
    $nombreUsuario = $_POST['nombreusuario'];

    if (!empty($nombreUsuario) || !empty($password)) {
        $nombreUsuario = $getFromU->checkInput($nombreUsuario);
        $password = $getFromU->checkInput($password);
        if ($getFromU->login($nombreUsuario, $password) === false) {
            $error = "El usuario o la contraseña son incorrectos.";
        } else {
            $_SESSION['swal'] = "<script>
                                    Swal.fire({
                                        title: '¡Hola de nuevo! " . $nombreUsuario . "',
                                        text: '¡Empieza a gestionar tus gastos!',
                                        icon: 'success',
                                        confirmButtonText: 'Cerrar'
                                    });
                                </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="static/images/bolsa-de-dinero.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="static/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Gestiona tu Dinero</title>
</head>

<body>
    <div class="container">

        <div class="mob-hidden">
            <h1>Gestiona tu Dinero</h1>
        </div>

        <div class="top-heading">
            <h1>Gestiona tu Dinero</h1>
        </div>
        <form action="index.php" method="post" id="form1">

            <div class="group">

                <div class="form-controller">
                    <i class="fa fa-user-plus u3" aria-hidden="true"></i>
                    <input type="text" name="nombreusuario" placeholder="Nombre de usuario" id="user1" required>
                    <br>
                </div>

                <div class="form-controller">
                    <i class="fa fa-key u4" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="Contraseña" id="pass1" autocomplete="on" required>
                    <br>
                </div>

            </div>
            <button type="submit" class="sign-in" name="login">ENTRAR</button>

            <br>
            <?php
            if (isset($error)) {
                $font = "Source Sans Pro";
                echo '<div style="color:  red;font-family:' . $font . ';">' . $error . '</div>';
            }
            ?>

            <div class="new-account">
                <span style="color: rgba(0, 0, 0, 0.54); font-weight: bolder; font-family: 'Source Sans Pro';">¿No tienes cuenta?</span>
                <a href="vista-controlador/2-Registro.php" style="text-decoration: none;">
                    <span style="color: rgba(5, 0, 255, 0.81); font-weight: bolder; font-family: 'Source Sans Pro';">¡Regístrate ahora!</span></a>
            </div>

        </form>

        <div class="img-container">
            <img src="static/images/login.png" alt="Login">
        </div>
    </div>
</body>

</html>