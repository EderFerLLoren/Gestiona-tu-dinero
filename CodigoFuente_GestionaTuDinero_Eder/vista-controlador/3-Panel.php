<?php
include_once "../model/inicio.php";

//Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}

include_once 'cuerpo.php';

if (isset($_SESSION['swal'])) {
    echo $_SESSION['swal'];
    unset($_SESSION['swal']);
}

// Comprobación de la validez del presupuesto 
$validez_presupuesto = $getFromP->validarPresupuesto($_SESSION['UsuarioId']);
if ($validez_presupuesto == false) {
    $getFromP->borrarRegistroPresupuesto($_SESSION['UsuarioId']);
}

// Gastos de hoy
$gasto_hoy = $getFromG->Gastos($_SESSION['UsuarioId'], 0);
if ($gasto_hoy == NULL) {
    $gasto_hoy = "Sin gastos hoy";
} else {
    $gasto_hoy = number_format($gasto_hoy, 2, ',', '.') . " €";
}

// Gastos de ayer
$gasto_ayer = $getFromG->GastoAyer($_SESSION['UsuarioId']);
if ($gasto_ayer == NULL) {
    $gasto_ayer = "Sin gastos ayer";
} else {
    $gasto_ayer = number_format($gasto_ayer, 2, ',', '.') . " €";
}

// Gastos de los últimos 7 días 
$gasto_semana = $getFromG->Gastos($_SESSION['UsuarioId'], 6);
if ($gasto_semana == NULL) {
    $gasto_semana = "Sin gastos esta semana";
} else {
    $gasto_semana = number_format($gasto_semana, 2, ',', '.') . " €";
}

// Gastos de los últimos 30 días
$gasto_mensual = $getFromG->Gastos($_SESSION['UsuarioId'], 29);
if ($gasto_mensual == NULL) {
    $gasto_mensual = "Sin gastos este mes";
} else {
    $gasto_mensual = number_format($gasto_mensual, 2, ',', '.') . " €";
}

// Gasto anual total
$gasto_total = $getFromG->GastoTotal($_SESSION['UsuarioId']);
if ($gasto_total == NULL) {
    $gasto_total = "Sin gastos registrados";
} else {
    $gasto_total = number_format($gasto_total, 2, ',', '.') . " €";
}


// Presupuesto restante del mes
$presupuesto_restante = $getFromP->checkPresupuesto($_SESSION['UsuarioId']);
if ($presupuesto_restante == NULL) {
    $presupuesto_restante = "No incluido todavía";
} else {
    $gastoMesActual = $getFromG->GastoMesEnCurso($_SESSION['UsuarioId']);
    if ($gastoMesActual == NULL) {
        $gastoMesActual = 0;
    }
    $presupuesto_restante = $presupuesto_restante - $gastoMesActual;
    $presupuesto_restante = number_format($presupuesto_restante, 2, ',', '.') . " €";
}

// Gastos fijos totales
$gasto_fijo_total = $getFromG->GastosFijos($_SESSION['UsuarioId']);
if ($gasto_fijo_total == NULL) {
    $gasto_fijo_total = "Sin gastos fijos registrados";
} else {
    $gasto_fijo_total = number_format($gasto_fijo_total, 2, ',', '.') . " €";
}

// Gastos en ocio y lujo
$gasto_ocio_total = $getFromG->GastosOcio($_SESSION['UsuarioId']);
if ($gasto_ocio_total == NULL) {
    $gasto_ocio_total = "Sin gastos en ocio registrados";
} else {
    $gasto_ocio_total = number_format($gasto_ocio_total, 2, ',', '.') . " €";
}

// Gastos en ahorro o inverión
$gasto_ahorroInverion_total = $getFromG->GastosAhorroInverion($_SESSION['UsuarioId']);
if ($gasto_ahorroInverion_total == NULL) {
    $gasto_ahorroInverion_total = "Sin gastos en Ahorro o Inversión";
} else {
    $gasto_ahorroInverion_total = number_format($gasto_ahorroInverion_total, 2, ',', '.') . " €";
}

// Calcular el porcentaje de gastos
$presupuesto = $getFromP->checkPresupuesto($_SESSION['UsuarioId']);
$porcentajeGastosFijos = 0;
$porcentajeGastosOcio = 0;
$porcentajeGastosAhorro = 0;
if ($presupuesto > 0) {
    // Calcular porcentaje de gastos fijos
    $gastosFijos = $getFromG->GastosFijos($_SESSION['UsuarioId']);
    if ($gastosFijos > 0) {
        $porcentajeGastosFijos = ($gastosFijos / $presupuesto) * 100;
        $porcentajeGastosFijos = number_format($porcentajeGastosFijos, 2, ',', '.');
    } else {
        $porcentajeGastosFijos = '0,00';
    }

    // Calcular porcentaje de gastos en ocio
    $gastosOcio = $getFromG->GastosOcio($_SESSION['UsuarioId']);
    if ($gastosOcio > 0) {
        $porcentajeGastosOcio = ($gastosOcio / $presupuesto) * 100;
        $porcentajeGastosOcio = number_format($porcentajeGastosOcio, 2, ',', '.');
    } else {
        $porcentajeGastosOcio = '0,00';
    }

    // Calcular porcentaje de gastos en ahorro/inversión
    $gastosAhorro = $getFromG->GastosAhorroInverion($_SESSION['UsuarioId']);
    if ($gastosAhorro > 0) {
        $porcentajeGastosAhorro = ($gastosAhorro / $presupuesto) * 100;
        $porcentajeGastosAhorro = number_format($porcentajeGastosAhorro, 2, ',', '.');
    } else {
        $porcentajeGastosAhorro = '0,00';
    }
} else {
    $porcentajeGastosFijos = '0,00';
    $porcentajeGastosOcio = '0,00';
    $porcentajeGastosAhorro = '0,00';
}
?>

<div class="wrapper">
    <div class="row">
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-lite">
                    <p><i class="fas fa-tasks"></i></p>
                    <h3>
                        Gastos de Hoy
                    </h3>
                    <p style="font-size: 1.2em;">
                        <?php echo $gasto_hoy ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-primary">
                    <p><i class="fas fa-undo-alt"></i></p>
                    <h3>
                        Gastos de Ayer
                    </h3>
                    <p style="font-size: 1.2em;">
                        <?php echo $gasto_ayer ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-primary-second">
                    <p><i class="fas fa-calendar-week"></i></p>
                    <h3>
                        Gastos últimos 7 días
                    </h3>
                    <p style="font-size: 1.2em;">
                        <?php echo $gasto_semana ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-primary-three">
                    <p><i class="fas fa-calendar"></i></p>
                    <h3>
                        Gastos últimos 30 días
                    </h3>
                    <p style="font-size: 1.2em;">
                        <?php echo $gasto_mensual ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-vio">
                    <p><i class="fas fa-dollar-sign"></i></p>
                    <h3>
                        Presupuesto Mensual Restante
                    </h3>
                    <p style="font-size: 1.2em;">
                        <?php echo $presupuesto_restante ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-pink">
                    <p><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i></p>
                    <h3>
                        Gasto Anual Total
                    </h3>
                    <p style="font-size: 1.2em;">
                        <?php echo $gasto_total ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-dark-color">
                    <p><i class="fas fa-shopping-cart"></i></p>
                    <h3>
                        Gastos Fijos
                    </h3>
                    <p style="font-size: 0.8em; margin: 0;">(Mensuales)</p>
                    <p style="font-size: 1.2em; margin-top: 10px;">
                        <?php echo $gasto_fijo_total ?>
                    </p>
                    <p id="porcentajeGf" style="font-size: 1.2em; margin-top: 5px; margin-bottom: 0px">
                        <?php echo $porcentajeGastosFijos?>%
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-dark-color">
                    <p><i class="fas fa-wine-glass"></i></p>
                    <h3>
                        Gastos en Ocio
                    </h3>
                    <p style="font-size: 0.8em; margin: 0;">(Mensual)</p>
                    <p style="font-size: 1.2em; margin-top: 10px;">
                        <?php echo $gasto_ocio_total ?>
                    </p>
                    <p id="porcentajeGo" style="font-size: 1.2em; margin-top: 5px; margin-bottom: 0px">
                        <?php echo $porcentajeGastosOcio?>%
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-4 col-sm-4">
            <div class="card">
                <div class="counter bg-dark-color">
                    <p><i class="fas fa-piggy-bank"></i></p>
                    <h3>
                        Ahorro o Inversión
                    </h3>
                    <p style="font-size: 0.8em; margin: 0;">(Mensual)</p>
                    <p style="font-size: 1.2em; margin-top: 10px;">
                        <?php echo $gasto_ahorroInverion_total ?>
                    </p>
                    <p id="porcentajeGa" style="font-size: 1.2em; margin-top: 5px; margin-bottom: 0px">
                        <?php echo $porcentajeGastosAhorro?>%
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="../static/js/3-Panel.js"></script>