const form = document.getElementById("datewiseform");
const from = document.getElementById("registroGastosDesde");
const to = document.getElementById("registroGastosHasta");

const validar = () => {
  const x1 = new Date(from.value);
  const x2 = new Date(to.value);

  if (x1 > x2) {
    enviarMensajeError(to, "La fecha desde no puede ser mayor que la fecha hasta.");
    return false;
  }

  return true;
};

function enviarMensajeError(input, msg) {
  const f1 = input.parentElement;
  const small = f1.querySelector("small");
  small.innerText = msg;
  f1.className = "form-send error";
}
