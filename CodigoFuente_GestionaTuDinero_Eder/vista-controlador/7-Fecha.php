<?php
include_once "../model/inicio.php";
// Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}

// Comprueba si se ha enviado el formulario y lo redirige
if (isset($_POST['fecha'])) {
    header("Location: 7-Fecha-Detallada.php");
}
include_once 'cuerpo.php';
?>

<div class="wrapper">
    <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="counter" style="display: flex; align-items: center; justify-content: center;">

                    <form action="7-Fecha-Detallada.php" method="post" onsubmit="return validar()" id="datewiseform">
                        <h1 style="display: block; font-family: 'Source Sans Pro'">Reporte de Gastos por Fecha</h1>
                        <div class="form-send">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Desde:</label><br><br>
                            <input class="text-input" type="date" value="" name="fechadesde" id="registroGastosDesde" required="true" style="width: 100%; max-width: 100%; padding-top: 8px; "><br>
                            <br><br>
                        </div>
                        <div clas="form-send">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Hasta:</label><br><br>
                            <input class="text-input" type="date" value="" name="fechahasta" id="registroGastosHasta" required="true" style="width: 100%; max-width: 100%; padding-top: 8px; ">
                            <br>
                            <br>
                            <small style="font-family: 'Source Sans Pro'; font-size:1.01em; color: red;"></small>                        
                        </div>
                        <div>
                            <br>
                            <button type="submit" class="pressbutton" name="fecha">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<script src="../static/js/7-Fecha.js"></script>