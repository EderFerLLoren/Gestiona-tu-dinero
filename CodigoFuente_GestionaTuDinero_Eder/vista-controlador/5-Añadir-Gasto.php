<?php
include_once "../model/inicio.php";

//Comprobación de inicio de sesión
if ($getFromU->loggedIn() === false) {
	header('Location: ../index.php');
}

include_once 'cuerpo.php';

// Crear un registro de gastos
if (isset($_POST['añadirGasto'])) {
	$costeItem = $_POST['costeItem'];
	$nombreItem = $_POST['item'];
	if ($costeItem <= 0) {
		echo '<script>
        Swal.fire({
            title: "¡Error!",
            text: "El precio no puede ser un número negativo o igual a 0",
            icon: "error",
            confirmButtonText: "OK"
        })
        </script>';
	}else if (strlen($nombreItem) > 20) {
        echo '<script>
        Swal.fire({
            title: "¡Error!",
            text: "El nombre del item no puede tener más de 20 caracteres",
            icon: "error",
            confirmButtonText: "OK"
        })
        </script>';
    }else {
		$fecha = date("Y-m-d H:i:s", strtotime($_POST["fechaGasto"]));
		$nombreItem = $_POST['item'];
		$costeItem = $_POST['costeItem'];
		$tipoItem = $_POST['tipo'];
		$getFromG->create("gasto", array(
			'UsuarioId' => $_SESSION['UsuarioId'], 'Item' => $nombreItem,
			'Coste' => $costeItem, 'Tipo' => $tipoItem, 'Fecha' => $fecha
		));
		echo '<script>
			Swal.fire({
				title: "¡Hecho!",
            	text: "¡Gasto añadido con éxito!",
            	icon: "success",
            	confirmButtonText: "Cerrar"
			})
			</script>';
	}
}
?>

<div class="wrapper">
	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="counter" style="height: 60vh; display: flex; align-items: center; justify-content: center;">
					<form action="" method="post" onsubmit="return validarGasto()">
						<div>
							<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Día del gasto:</label><br><br>
							<input class="text-input" type="datetime-local" value="" name="fechaGasto" required="true" style="width: 100%; padding-top: 8px; cursor: pointer;"><br><br>
						</div>
						<div>
							<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">¿Cuál es el gasto?</label><br>
							<input type="text" class="text-input" name="item" placeholder="ej: Gasolina" required="true" style="width: 100%; padding-top: 10px; "><br><br>
						</div>

						<div>
							<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">¿Cúanto te ha costado?</label><br>
							<div style="display: flex; align-items: center;">
								<input class="text-input" type="number" max="999999" placeholder="ej: 50€" step="0.01" lang="es" required="true" name="costeItem" onkeypress='validar(event)' style="flex: 1; padding-top: 10px; padding-right: 2px;">
								<span>€</span>
							</div>
							<br><br>
						</div>

						<div>
							<label style="font-family: 'Source Sans Pro'; font-size: 1.2em;">¿Qué categoría de gasto es?</label><br>
							<select class="text-input" name="tipo" required="true" style="width: 100%; padding-top: 10px; cursor: pointer;">
								<option value="" class="1option">-- Selecciona una categoría --</option>
								<option value="Gasto Fijo">Gasto Fijo</option>
								<option value="Gasto en Ocio">Gasto en Ocio</option>
								<option value="Ahorro o Inversión">Ahorro o Inversión</option>
							</select>
						</div>

						<div><br>
							<button type="submit" class="pressbutton" name="añadirGasto">Añadir</button>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../static/js/5-Añadir-Gasto.js"></script>