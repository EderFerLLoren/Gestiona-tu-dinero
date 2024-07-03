<?php
include_once "../model/inicio.php";
// Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}

include_once 'cuerpo.php';

// Validación y cambio de contraseña
if (isset($_POST['changepwd'])) {
    $old_pass_hash = $getFromU->datosUsuario($_SESSION['UsuarioId'])->Password;
    $confirmpass = md5($_POST['oldpass']);

    function function_alert($title, $message, $icon)
    {
        echo "<script>
        Swal.fire({
            title: '$title',
            text: '$message',
            icon: '$icon',
            confirmButtonText: '¡Perfecto!'
        })
        </script>";
    }

    if ($confirmpass === $old_pass_hash) {
        $newpass = $_POST['newpass'];
        $cnewpass = $_POST['cnewpass'];

        if (strlen($newpass) >= 6 && strlen($newpass) <= 30) {
            if (!preg_match('/[A-Z]/', $newpass) || !preg_match('/[a-z]/', $newpass)
                ||!preg_match('/[0-9]/', $newpass) ||!preg_match('/[\W_]/', $newpass)) {
                function_alert(
                    "¡Error!",
                    "La nueva contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.",
                    "error"
                );
            } elseif ($newpass === $cnewpass) {
                $getFromU->update('usuario', $_SESSION['UsuarioId'], array('Password' => md5($newpass)));
                function_alert("¡Genial!", "Contraseña Cambiada con Éxito", "success");
            } else {
                function_alert("¡Error!", "Las nuevas contraseñas no coinciden", "error");
            }
        } else {
            function_alert("¡Error!", "La nueva contraseña debe tener entre 6 y 30 caracteres", "error");
        }
    } else {
        function_alert("¡Error!", "Contraseña actual incorrecta", "error");
    }
}
?>

<div class="wrapper">
    <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="counter" style="height: 60vh; display: flex; align-items: center; justify-content: center;">
                    <form action="" method="post" id="form">
                        <div class="formcontrol">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Contraseña actual:</label><br>
                            <input type="password" class="text-input" name="oldpass" id="oldpass" value="" required="true" style="padding-top: 10px; "><br>
                        </div>
                        <div class="formcontrol">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Nueva contraseña:</label><br>
                            <input type="password" class="text-input" name="newpass" id="newpass" value="" required="true" style="padding-top: 10px; "><br>
                        </div>
                        <div class="formcontrol">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Confirma contraseña:</label><br>
                            <input type="password" class="text-input" name="cnewpass" id="cpass" value="" required="true" style="padding-top: 10px; "><br>
                        </div>

                        <div><br>
                            <button type="submit" class="pressbutton" name="changepwd">Cambiar Contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="../static/css/11-Cambiar-Password.css">