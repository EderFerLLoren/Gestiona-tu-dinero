<?php
include_once "../model/inicio.php";

// Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
	header('Location: ../index.php');
}

include_once 'cuerpo.php';

// Elimina el registro de gastos
if (isset($_POST['borrarReg'])) {
	$getFromG->borrarGastos($_POST['ID']);
	echo "<script>
				Swal.fire({
					title: '¡Hecho!',
					text: 'Registro Borrado con Éxito',
					icon: 'success',
					confirmButtonText: 'Cerrar'
				})
				</script>";
}

?>

<div class="wrapper">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 style="font-family:'Source Sans Pro'; font-size: 1.5em;">
						Gastos
					</h3>
				</div>
				<div class="card-content">
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Categoría</th>
								<th>¿En qué?</th>
								<th>Coste</th>
								<th>Fecha</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$gastoTotal = $getFromG->todosGastos($_SESSION['UsuarioId']);
							if ($gastoTotal !== NULL) {
								$len = count($gastoTotal);
								for ($x = 1; $x <= $len; $x++) {
									$costeFormateado = number_format($gastoTotal[$x - 1]->Coste, 2, ',', '.');
									echo "<tr>
												<td>" . $x . "</td>
												<td>" . $gastoTotal[$x - 1]->Tipo . "</td>
												<td>" . $gastoTotal[$x - 1]->Item . "</td>
												<td>" . $costeFormateado . " €" . "</td>
												<td>" . date("d-m-Y", strtotime($gastoTotal[$x - 1]->Fecha)) . "</td>	
												<td><form style='margin-block-end: 0;' action='' method='post'>
												<input style='display:none;' name='ID' value=" . $gastoTotal[$x - 1]->ID . "></input>
												<button type='submit' name='borrarReg' class='btn btn-default' 
												style='background:none; color:#8f8f8f; font-size:1em;'>
												<i class='far fa-trash-alt' style='color:red;'></i></button></form></td>
											</tr>";
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>