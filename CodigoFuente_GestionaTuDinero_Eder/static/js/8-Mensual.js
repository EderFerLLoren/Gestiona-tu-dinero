const form = document.getElementById("mesform")
const from = document.getElementById("mesdesde")
const to = document.getElementById("meshasta")



const validar = () => {
  const x1 = new Date(from.value);
  const x2 = new Date(to.value);

  if (x1 > x2) {
      enviarMensajeError(to, "El mes Desde no puede ser mayor que el mes Hasta.");
      return false;
  }

  return true;
}

function enviarMensajeError(input, msg){
  const f1 = input.parentElement;
  const small = f1.querySelector('small');
  small.innerText = msg;
  f1.className = "mesControl error";
}
