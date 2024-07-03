<?php
include_once "../model/inicio.php";

// Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}
include_once 'cuerpo.php';

if (isset($_POST['añadirPresupuesto'])) {
    $presupuesto = $_POST['presupuesto'];
    if ($presupuesto < 0) {
        echo '<script>
        Swal.fire({
            title: "¡Error!",
            text: "El presupuesto no puede ser un número negativo",
            icon: "error",
            confirmButtonText: "OK"
        })
        </script>';
    } else {
        echo '<script>
        Swal.fire({
            title: "¡Hecho!",
            text: "Presupuesto añadido con éxito",
            icon: "success",
            confirmButtonText: "OK"
          })
        </script>';

        $usuario_id = $_SESSION['UsuarioId'];
        $presupuesto = $_POST['presupuesto'];

        $presupuesto_actual = $getFromP->checkPresupuesto($usuario_id);

        if ($presupuesto_actual == NULL) {
            $getFromP->establecerPresupuesto($usuario_id, $presupuesto);
        } else {
            $getFromP->actualizarPresupuesto($usuario_id, $presupuesto);
        }
    }
}

?>

<div class="wrapper">
    <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="counter" style="height: 40vh; display: flex; align-items: center; justify-content: center;">
                    <form action="" method="post" onsubmit="return validarPresupuesto()">
                        <p style="font-size: 1.4em; color:black; font-family:'Source Sans Pro'">
                            Introduce tu presupuesto para este mes:
                        </p>
                        <p style="font-size: 0.8em; color:black; font-family:'Source Sans Pro'">
                            El presupuesto debe de ser un número entero.
                        </p>
                        <br>
                        <input type='number' name="presupuesto" max="999999" onkeypress='validar(event)' class="text-input" style="color:black;font-size: 1.2em;;background: rgba(0,0,0,0);text-align: center; border: none;
                                outline: none; border-bottom: 2px solid black;" required />
                        €
                        <br><br><br>
                        <button type="submit" name="añadirPresupuesto" class="pressbutton">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="../static/js/4-Añadir-Presupuesto.js"></script>