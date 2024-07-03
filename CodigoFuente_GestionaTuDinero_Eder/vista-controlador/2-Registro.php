<?php
include_once "../model/inicio.php";
include_once '../model/conexion.php';

// Comprobación de inicio de sesión
if (isset($_SESSION['UsuarioId'])) {
    header('Location: 3-Panel.php');
}


if (isset($_POST['registro'])) {
    // Almacenamiento de la ruta de la imagen en la base de datos
    if (empty($_FILES['rutaImagen']['name'])) {
        $targeta = '../static/images/logo_usuario.png';
    } else {
        // Nombre de imagen de perfil único para cada usuario
        $nombreImgPerfil = time() . '_' . $_FILES['rutaImagen']['name'];
        $targeta = '../static/imagenesPerfil/' . $nombreImgPerfil;
    }


    $nombrecompleto = $_POST['nombre_completo'];
    $nombreUsuario = $_POST['nombreusuario'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $registroError = "";

    // Validación de formularios
    $email = $getFromU->checkInput($email);
    $nombrecompleto = $getFromU->checkInput($nombrecompleto);
    $nombreUsuario = $getFromU->checkInput($nombreUsuario);
    $password = $getFromU->checkInput($password);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $registroError = "Correo no válido. Prueba con nombre@dominio.com";
    } elseif (strlen($nombrecompleto) > 30 || (strlen($nombrecompleto)) < 2) {
        $registroError = "El Nombre debe tener entre 2 y 30 caracteres";
    } elseif (!preg_match('/^[a-zA-Z\p{L} ]+$/u', $nombrecompleto)) {
        $registroError = "El nombre completo solo puede contener letras y espacios.";
    } elseif (strlen($nombreUsuario) > 30 || (strlen($nombreUsuario)) < 3) {
        $registroError = "El nombre de Usuario debe tener entre 3 y 30 caracteres.";
    } elseif (strlen($password) < 6) {
        $registroError = "Contraseña demasiado corta, la contraseña debe contener entre 6 y 30 caracteres.";
    } elseif (strlen($password) > 30) {
        $registroError = "Contraseña demasiado larga, la contraseña debe contener entre 6 y 30 caracteres.";
    } elseif (
        !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)
        || !preg_match('/[0-9]/', $password) || !preg_match('/[\W_]/', $password)
    ) {
        $registroError = "La nueva contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial como: #.*,!.";
    } elseif ($password !== $_POST['password_confirm']) {
        $registroError = "Las contraseñas no coinciden";
    } else {
        if ($getFromU->checkEmail($email) === true) {
            $registroError = "Ese correo ya está en uso";
        } elseif ($getFromU->checkNombreUsuario($nombreUsuario) === true) {
            $registroError = "Ese nombre de usuario ya existe";
        } else {
            move_uploaded_file($_FILES['rutaImagen']['tmp_name'], $targeta);
            $usuario_id = $getFromU->create('usuario', array(
                'Email' => $email,
                'Password' => md5($password),
                'NombreCompleto' => $nombrecompleto,
                'NombreUsuario' => $nombreUsuario,
                'Foto' => $targeta,
                'RegFecha' => date("Y-m-d H:i:s")
            ));

            $_SESSION['UsuarioId'] = $usuario_id;
            $_SESSION['swal'] = "<script>
                    Swal.fire({
                        title: '¡Bienvenido! " . $nombreUsuario . "',
                        text: 'Ahora ya eres un nuevo usuario',
                        icon: 'success',
                        confirmButtonText: 'Adelante'
                    })
                    </script>";
            header('Location: 3-Panel.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/images/bolsa-de-dinero.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="../static/css/2-Registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Gestiona tu Dinero</title>
</head>

<body>

    <div class="container">

        <div class="mob-hidden">
            <h1>¡Crea tu cuenta!</h1>
        </div>

        <div class="img-container"">
            <h1>¡Crea tu cuenta!</h1>
            <img src=" ../static/images/registro1.png" alt="Registro" style="margin-top: 40px;">
        </div>

        <form action="2-Registro.php" method="post" id="form" enctype="multipart/form-data">
            <!-- Carga de imágenes -->
            <div class="image-preview" id="imagePreview">
                <img src="" alt="Previsualizacon imagen" class="image-preview__image" id="profileDisplay">
                <span class="image-preview__default-text"><img src="../static/images/logo_usuario.png" alt=""></span>
            </div>
            <label for="imageUpload" class="user-pic-btn" style="cursor: pointer;">Agrega aquí tu Foto</label>
            <input type="file" name="rutaImagen" id="imageUpload" accept="image/*" style="display: none">

            <!-- Detalles del usuario -->
            <div class="group">
                <div class="form-control">
                    <i class="fa fa-user u1" aria-hidden="true"></i>
                    <input class="fname" type="text" name="nombre_completo" id="fullname" minlength="2" maxlength="30" placeholder="Nombre Completo" value="<?php echo isset($_POST['nombre_completo']) ? $_POST['nombre_completo'] : ''; ?>" required>
                    <br>
                </div>

                <div class="form-control">
                    <i class="fa fa-envelope u2" aria-hidden="true"></i>
                    <input type="text" name="email" id="email" placeholder="Correo" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
                    <br>
                </div>


                <div class="form-control">
                    <i class="fa fa-user-plus u3" aria-hidden="true"></i>
                    <input type="text" name="nombreusuario" id="nombreusuario" placeholder="Nombre de Usuario" minlength="3" maxlength="30" value="<?php echo isset($_POST['nombreusuario']) ? $_POST['nombreusuario'] : ''; ?>" required>
                    <br>
                    <span id="respuesta" style="font-family: 'Source Sans Pro'; font-size:0.8em; font-weight:bold"></span>
                </div>

                <div class="form-control">
                    <i class="fa fa-key u4" aria-hidden="true"></i>
                    <input type="password" name="password" id="password" placeholder="Contraseña" minlength="6" maxlength="30" autocomplete="on" required>
                    <br>
                </div>

                <div class="form-control">
                    <i class="fa fa-key u4" aria-hidden="true"></i>
                    <input type="password" name="password_confirm" id="confirmpassword" minlength="6" maxlength="30" placeholder="Confirmar Contraseña" autocomplete="on" required>
                    <br>
                </div>

            </div>
            <button type="submit" value="Submit" name="registro">Completar</button>
            <br>
            <?php
            if (isset($registroError) && !empty($registroError)) {
                $font = "Source Sans Pro";
                echo '<div style="color: red; text-align:center; font-family:' . $font . ';">' . $registroError . '</div>';
            }
            ?>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#nombreusuario").keyup(function() {
                var nombreusuario = $(this).val().trim();
                if (nombreusuario != '') {
                    $("#nombreusuario").css({
                        'margin-bottom': '5px'

                    });
                    $("#uname_response").css({
                        'margin-bottom': '15px'
                    });
                    $.ajax({
                        url: '../model/ajax.php',
                        type: 'post',
                        data: {nombreusuario: nombreusuario},
                        success: function(response) {
                            $('#respuesta').html(response);

                            if (response.trim() === 'Disponible.') {
                                $('#respuesta').css('color', 'green');
                            } else if (response.trim() === 'No Disponible.') {
                                $('#respuesta').css('color', 'red');
                            }

                        }
                    });
                } else {
                    $("#respuesta").html("<br/>");
                }
            });

        });
    </script>
    <script src="../static/js/2-Registro.js"></script>

</body>

</html>