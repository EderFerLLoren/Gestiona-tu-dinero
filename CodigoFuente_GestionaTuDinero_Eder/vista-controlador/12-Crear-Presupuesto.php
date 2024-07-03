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
					<h1 style="font-family:'Source Sans Pro'; font-size: 2.5em; text-align: center">Aprende a Crear un Presupuesto</h1>
				</div>
				<div class="card-content" style="max-height: none;" >
					<p class="text">
						En el mundo de las finanzas personales hay algo indispensable si quieres llegar a tus objetivios económicos o de vida, deberás aprender a hacer tu presupuesto mensusal. La mejor forma de hacerlo es utilizando la famosa regla del 50/30/20, de esta forma nuestro presupuesto se divide en diferentes partidas de gastos.
						
						Veamos cuáles van a ser las principales partidas de tu presupuesto.
						Esto, obviamente, deberá adaptarse a cada caso en particular, pero debes acercarte lo más posible a estas partidas para poner en marcha el sistema y empezar a sanear tus finanzas.
						La estrategia más recomendable en cualquier caso es la del 50/30/20. ¡Veamos cómo podemos adaptarla a nuestro caso!

						<img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Gastos fijos:</strong> Se trata de aquellos gastos que llamamos de supervivencia. Los que de momento vamos a seguir manteniendo. Como, por ejemplo: <strong>La hipoteca o alquiler, facturas (luz, agua, gas, teléfono, internet, etc.) gasolina o el dinero que utilices cada mes en transporte para ir al trabajo, seguros, comida y la deuda que tenemos que pagar cada mes.</strong>
						Esta partida debería estar entre un <strong>50% y un 60%</strong> de tus ingresos. Si en algún momento esta partida supera este número, deberás hacer una revisión de los gastos de esta e intentar reducirlos sea como sea. El límite máximo de esta partida sería de un 80%, lo que no quiere decir que vaya a seguir así siempre. Para cambiar este porcentaje deberemos empezar a trabajar desde ya, porque tener menos de un 60% nos hará poder llevar un equilibrio real de nuestras finanzas.
						<strong>Es importante remarcar que en esta partida irá toda la deuda. Así como el pago mínimo mensual a pagar de la hipoteca, el coche, los electrodomésticos, las deudas que tengas de la tarjeta de crédito, etc.</strong>


						<img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Lujo - Ocio:</strong> El dinero que te gastas en cosas accesorias o que, en realidad, no necesitas, pero que compras ya que te hacen sentir bien. <strong>Que el nombre no te confunda</strong>. En esta partida del presupuesto tiene que haber gastos. Al final trabajas para algo, ¿no? No todo en la vida va a ser trabajar y pagar facturas. Nos merecemos disfrutar de los placeres que nos regala esta vida.
						El porcentaje recomendable para esta partida será de un <strong>10% a un 30%.</strong>
						Aquí pondremos cualquier gasto asociado al disfrute y caprichos personales. <strong>Así como, salir a tomar algo, comprar ropa, cenar fuera, ir a un concierto, algún regalo a quien tú quieras, esa escapadita de fin de semana, etc.</strong>
						<span>Podrás gastar ese dinero cada mes, sin remordimiento ninguno y sin miedo.</span>

						<img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Ahorro e inversión:</strong> <strong>El ahorro es la base fundamental para poner a trabajar una economía.</strong>
						<strong>Si no eres capaz de ahorrar mínimo un 10% de tus ingresos, tienes un problema grave no solo de dinero, si no también, de perseverancia y de autocontrol. ¡Hay que trabajar en ello!</strong>
						El mínimo de porcentaje para esta partida es <strong>un 10%</strong> y aquí sí, cuanto más mejor. Entorno a <strong>un 20% o un 30% estaríamos ante una cifra más que recomendable.</strong>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>