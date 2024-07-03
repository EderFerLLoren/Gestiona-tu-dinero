<?php
include_once "../model/inicio.php";

// Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}

include_once 'cuerpo.php';

// Recopilación de todos los datos del usuario
$objusuario = $getFromU->datosUsuario($_SESSION['UsuarioId']);
$nombrecompleto = $objusuario->NombreCompleto;
$nombre_usr = $objusuario->NombreUsuario;
$emailid = $objusuario->Email;
$fecha_alta = $objusuario->RegFecha;
$foto = $objusuario->Foto;

$fecha_alta_obj = new DateTime($fecha_alta);
$fecha_formateada = $fecha_alta_obj->format('d-m-Y');


?>

<div class="wrapper">
    <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="counter" style="display: flex; align-items: center; justify-content: center;">

                    <form action="">
                        <h1 style="font-family: 'Source Sans Pro'">Perfil</h1>

                        <div>
                            <img style="width:100px; height:100px; object-fit: cover; border-radius: 50%;" src=<?php echo '"' . $foto . '"' ?> alt="Foto Perfil">
                        </div>
                        <div>
                            <p>Nombre Completo:</p>
                            <input type="text" class="text-input" style="width: 100%;" value=<?php echo '"' . $nombrecompleto . '"' ?> readonly><br>
                        </div>
                        <div>
                            <p>Nombre de Usuario:</p>
                            <input type="text" class="text-input" style="width: 100%;" value=<?php echo '"' . $nombre_usr . '"' ?> readonly><br>
                        </div>

                        <div>
                            <p>Correo electrónico:</p>
                            <input type="email " style="width: 100%;" class="text-input" value=<?php echo '"' . $emailid . '"' ?> readonly><br>
                        </div>

                        <div>
                            <p>Fecha de registro:</p>
                            <input type="datetime" class="text-input" style="width: 100%; font-size: 1.1em; padding-left: 45px;" value=<?php echo '"' . $fecha_formateada . '"' ?> readonly><br>
                        </div>
                        <br>

                        <div><br>
                            <a href="11-Cambiar-Password.php"><button type="button" class="pressbutton" name="submit">Cambiar Contraseña</button></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>