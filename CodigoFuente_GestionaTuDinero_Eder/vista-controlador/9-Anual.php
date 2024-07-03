<?php
include_once "../model/inicio.php";
// Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}

// Validación de fechas + redirección de formularios
if (isset($_POST['añosubmit'])) {
    if (!is_numeric($_POST['añodesde']) || !is_numeric($_POST['añohasta'])) {
        $error = "Los campos de año deben contener solo números";
    } elseif ($_POST['añodesde'] > $_POST['añohasta']) {
        $error = "Rango de fechas inválido, el año Desde no puede ser mayor que el año Hasta.";
    }elseif ($_POST['añodesde'] <= 0 || $_POST['añohasta'] <= 0) {
        $error = "Los campos no pueden contener números negativos. Introduce un año valido.";
    }
     else {
        $_SESSION['añohasta'] = $_POST['añohasta'];
        $_SESSION['añodesde'] = $_POST['añodesde'];

        header("Location: 9-Anual-Detallado.php");
    }
}

include_once 'cuerpo.php';
?>

<script src="../static/js/9-Anual.js"></script>

<div class="wrapper">
    <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="counter" style="display: flex; align-items: center; justify-content: center;">

                    <form action="" method="post">
                        <h1 style="display: block; font-family: 'Source Sans Pro'">Reporte Anual de Gastos</h1>
                        <div>
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Desde:</label><br>
                            <input class="text-input yearpicker" type="number" max="9999" id="añodesde" placeholder="2023" name="añodesde" required="true" style="width: 100%; padding-top: 8px; "><br><br><br>
                        </div>

                        <div>
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Hasta:</label><br>
                            <input class="text-input yearpicker" type="number" max="9999" id="añohasta" placeholder="2024" name="añohasta" required="true" style="width: 100%; padding-top: 8px; "><br><br>
                            <small style="font-family:'Source Sans Pro'; font-size: 1.01em; color: red;">
                                <?php if (isset($error)) {
                                    echo $error;
                                } ?>
                            </small>
                        </div>

                        <div class="form-group has-success"><br>
                            <button type="submit" class="pressbutton" name="añosubmit">Enviar</button>
                        </div>

                </div>

                </form>

            </div>
        </div>
    </div>
</div>
</div>