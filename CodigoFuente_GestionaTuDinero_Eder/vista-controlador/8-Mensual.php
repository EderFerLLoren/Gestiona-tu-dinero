<?php  
    // Comprobación de inicio de sesión
    include_once "../model/inicio.php";
    if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
    }

    if(isset($_POST['fecha']))
    {
        header("Location: 8-Mensual-Detallado.php");
    }
    include_once 'cuerpo.php'; 	
?>

<div class="wrapper">
    <div class="row">
        <div class="col-12 col-m-12 col-sm-12" >
            <div class="card">
                <div class="counter" style="display: flex; align-items: center; justify-content: center;">
                
                <form action="8-Mensual-Detallado.php" method="post" id="mesform" onsubmit = "return validar()">
                    <h1 style="display: block; font-family: 'Source Sans Pro'">Reporte Mensual de Gastos</h1>
                        <div class = "mesControl">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Desde:</label><br>
                            <input class="text-input" type="month" id='mesdesde' value="" name="mesdesde" 
                            required="true" style="width: 100%; padding-top: 8px; "><br><br><br>
                        </div>
                        <div class = "mesControl">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Hasta:</label><br>
                            <input class="text-input" type="month" id="meshasta" value="" name="meshasta" 
                            required="true" style="width: 100%; padding-top: 8px; ">
                            <br>
                            <br>
                            <small style="font-family: 'Source Sans Pro'; font-size:1.01em; color: red;"></small>        
                        </div>									
                        <div>
                            <br>
                            <button type="submit" class="pressbutton" name="mthsubmit">Enviar</button>
                        </div>								                            
                </form>
                
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="../static/js/8-Mensual.js"></script>