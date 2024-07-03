<?php
include_once "../model/inicio.php";

// Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}

include_once 'cuerpo.php';

?>


<div class="wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 style="font-family:'Source Sans Pro'; font-size: 2.5em; text-align: center">Colchón de Seguridad</h1>
                </div>
                <div class="card-content" style="max-height: none;">
                    <h4>¿Que es un colchón de seguridad?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" />La libertad financiera es la capacidad de continuar llevando tu estilo de vida al mismo nivel en caso de que cese tu fuente de ingresos, es decir, si tu nivel de gasto mensual es de 1000€ y tienes ahorrados 4000€. Tu libertad financiera es de 4 meses.
                        En cambio, si tus gastos mensuales son de 1000€ y no tienes ahorros, <strong>estás viviendo al borde del precipicio.</strong>

                        El colchón de seguridad trata exactamente de esto. Un colchón de tranquilidad que no debes usar, salvo ocasiones excepcionales. <strong>Comprar un bolso o irse de vacaciones no lo son. En cambio, arreglar el pinchazo de una rueda o comprarte una lavadora nueva si lo son.</strong>

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Tener un fondo de emergencia, transforma una emergencia en un inconveniente irrelevante.</strong>
                    </p>
                    <h4>¿Cuánto debe tener un colchón de seguridad?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Lo que se recomienda es tener de 3 a 6 meses ahorrados de tus gastos comunes, así como las facturas, alquiler, seguros, comida, etc.</strong>
                        Desde mi punto de vista esto es relativamente poco. Está bien empezar por esa cifra, pero yo recomiendo tener, como mínimo, de 8 a 1 año de estos gastos dentro de tu colchón de seguridad. Por supuesto, esto depende de cada persona y de cada situación. No es lo mismo un joven que viva en casa de sus padres o que se acaba de independizar, que una familia ya con hijos y por lo tanto con más responsabilidades.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

