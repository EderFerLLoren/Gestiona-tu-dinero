function validar(evt) { 
    var theEvent = evt || window.event;
  
    if (theEvent.type === "paste") {
      key = event.clipboardData.getData("text/plain");
    } else {
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
    }
    var regex = /[0-9]/;
    if (!regex.test(key)) {
      theEvent.returnValue = false;
      if (theEvent.preventDefault) theEvent.preventDefault();
    }
  }

function validarPresupuesto() {
    var presupuestoInput = document.getElementsByName('presupuesto')[0];
    var presupuesto = parseInt(presupuestoInput.value);
    if (presupuesto < 0) {
        Swal.fire({
            title: '¡Error!',
            text: 'El presupuesto no puede ser un número negativo',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return false;
    }
    return true; 
}
