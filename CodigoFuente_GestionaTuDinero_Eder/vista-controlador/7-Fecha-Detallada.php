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

					<h4 style="font-family:'Source Sans Pro'; font-size: 1.3em; text-align: center">
						Gastos incurridos entre el <?php echo date("d-m-Y", strtotime($_POST['fechadesde'])) ?> y
						<?php echo date("d-m-Y", strtotime($_POST['fechahasta'])) ?></h4>

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
						<tbody id="chart-facilitate">
							<?php

							$gastoDia = $getFromG->registroGastos($_SESSION['UsuarioId'], $_POST['fechadesde'], $_POST['fechahasta']);
							if ($gastoDia !== NULL) {
								$len = count($gastoDia);
								for ($x = 1; $x <= $len; $x++) {
									$costeFormateado = number_format($gastoDia[$x - 1]->Coste, 2, ',', '.');
									echo "<tr>
											<td>" . $x . "</td>
											<td>" . $gastoDia[$x - 1]->Tipo . "</td>
											<td>" . $gastoDia[$x - 1]->Item . "</td>
											<td>" . $costeFormateado . " €" . "</td>
											<td>" . date("d-m-Y", strtotime($gastoDia[$x - 1]->Fecha)) . "</td>
										</tr>";
								}
							}else {
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
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../static/js/7-Fecha-Detallada.js"></script>