function validar(evt) {
    var theEvent = evt || window.event;
  
    if (theEvent.type === "paste") {
      key = event.clipboardData.getData("text/plain");
    } else {
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
    }
    var regex = /[0-9,]/;
    if (!regex.test(key)) {
      theEvent.returnValue = false;
      if (theEvent.preventDefault) theEvent.preventDefault();
    }
  }

function validarGasto() {
    var costeInput = document.getElementsByName('costeItem')[0];
    var coste = parseFloat(costeInput.value);
    if (coste <= 0) {
        Swal.fire({
            title: '¡Error!',
            text: 'El gasto no puede ser un número negativo ni igual a 0',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return false;
    }
    return true; 
}