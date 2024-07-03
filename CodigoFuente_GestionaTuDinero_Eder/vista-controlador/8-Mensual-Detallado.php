<?php
// Comprobación de inicio de sesión
include_once "../model/inicio.php";
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
					<h4 style="font-family:'Source Sans Pro'; font-size: 1.3em; text-align: center">Gastos realizados entre
						<?php
						$formatter = new IntlDateFormatter('es_ES', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
						$formatter->setPattern('MMMM \'de\' yyyy');
						echo $formatter->format(strtotime($_POST['mesdesde']));
						echo ' y ';
						echo $formatter->format(strtotime($_POST['meshasta'])) ?>
					</h4>

				</div>
				<div class="card-content">
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Categoría</th>
								<th>¿Qué Compré?</th>
								<th>Coste</th>
								<th>Fecha</th>
							</tr>
						</thead>
						<tbody id="chart-facilitate1">
							<?php
							$_POST['meshasta'] = $_POST['meshasta'] . "-01";
							$_POST['mesdesde'] = $_POST['mesdesde'] . "-01";

							$gastoMensual = $getFromG->registroMesGastos($_SESSION['UsuarioId'], $_POST['mesdesde'], $_POST['meshasta']);
							if ($gastoMensual !== NULL) {
								$len = count($gastoMensual);
								for ($x = 1; $x <= $len; $x++) {
									$costeFormateado = number_format($gastoMensual[$x - 1]->Coste, 2, ',', '.');
									echo "<tr>
											<td>" . $x . "</td>
											<td>" . $gastoMensual[$x - 1]->Tipo . "</td>
											<td>" . $gastoMensual[$x - 1]->Item . "</td>
											<td>" . $costeFormateado . " €" . "</td>
											<td>" . date("d-m-Y", strtotime($gastoMensual[$x - 1]->Fecha)) . "</td>
										</tr>";
								}
							} else {
								echo '<h4 style="color: red; font-family:"Source Sans Pro"; font-size: 0.8em; text-align: center;">
								No hay ningún gasto registrado entre las fechas introducidas..
								</h4>';
							}
							?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h3>
						Gráfica de Gastos
					</h3>
					<div class="card-content">
						<canvas id="myChart1"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../static/js/8-Mensual-Detallado.js"></script>