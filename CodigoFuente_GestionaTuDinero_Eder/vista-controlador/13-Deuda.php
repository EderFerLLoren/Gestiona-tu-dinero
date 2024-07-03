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
                    <h1 style="font-family:'Source Sans Pro'; font-size: 2.5em; text-align: center">¿Cómo acabar con la deuda?</h1>
                </div>
                <div class="card-content" style="max-height: none;">
                    <p class="text">
                        Este será el momento más doloroso, porque vamos a tomarnos un chupito de realidad y ver cómo está realmente nuestra situación financiera.

                        <strong>¡Pongámonos manos a la obra!</strong>
                        Para ello, vamos a ordenar nuestras deudas <strong>de menor a mayor precio</strong>. Por ejemplo, <strong>deudas como el dinero que le debes a un amigo, el préstamo de la tarjeta de crédito, el del frigorífico nuevo que compraste, el del coche nuevo, etc, a excepción de la hipoteca.</strong>
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" />Si en algún caso la tasa de interés de alguno de esos préstamos es muy alta, la pondremos la primera . La idea es hacerlo de menor cantidad a mayor.

                        <strong>Lo que vamos a hacer es lo siguiente:</strong>
                        Con la cantidad de dinero que dedicabas de tu partida de gastos fijos a pagar esa deuda, o sea, la cantidad mensual que pagas por ella, vamos a hacer aportaciones extra cada mes, a ese importe que pagabas.
                        El total del porcentaje que hemos destinado a ahorro e inversión (un 10% o un 20%) lo vamos a sumar al importe inicial de la primera deuda de la lista. Empezando por la más pequeña de todas.
                        De este modo conseguiremos acabar de una manera mucho más rápida con esta deuda y conseguiremos pequeños logros, con una recompensa más rápida, y con la cual estaremos mandando un mensaje clave a nuestro cerebro de que lo estamos haciendo bien y de que vamos por el buen camino reforzando este hábito.
                        Una vez acabes con la primera deuda, irás de lleno a por la segunda, aportando el dinero mensual de esta, más lo que aportabas a la primera y sumando otra vez la cantidad de tu presupuesto de ahorro e inversión.
                        Y así sucesivamente, con todas y cada una de las deudas que tengas.
                        
                        Usando esta técnica, lo que vamos a conseguir es un efecto bola de nieve, que va a acabar con tus deudas de una manera increíblemente rápida y satisfactoria.
                        Seguramente habrás escuchado más de una vez que se aprende más de los fracasos que de las victorias. Pues no es así. Te invito a celebrar cada una de las deudas que consigas quitarte.
                        Cada vez que elimines una de estas deudas, date un pequeño homenaje haciendo lo que más te gusta ya sea una buena comida, abre una cerveza o un vino... cualquier cosa que te siga dando fuerzas para mantener el camino a hacer desaparecer todas y cada una de esas malditas deudas. Lo estás haciendo muy bien. ¡Sigue hacia delante!

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
