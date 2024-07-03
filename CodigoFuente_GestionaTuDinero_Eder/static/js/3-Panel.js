document.addEventListener("DOMContentLoaded", function () {
  const gastosFijos = document.getElementById("porcentajeGf");
  const gastosOcio = document.getElementById("porcentajeGo");
  const ahorroInversion = document.getElementById("porcentajeGa");

  if (gastosFijos) {
    const contenedorGastosFijos = gastosFijos.parentElement;
    let valorGastosFijos = parseFloat(
      gastosFijos.textContent.replace(",", ".").replace("%", "").trim()
    );
    if (valorGastosFijos > 0 && valorGastosFijos <= 50) {
      contenedorGastosFijos.classList.remove("bg-dark-color");
      contenedorGastosFijos.classList.add("bg-success");
    } else if (valorGastosFijos > 50 && valorGastosFijos <= 60) {
      contenedorGastosFijos.classList.remove("bg-dark-color");
      contenedorGastosFijos.classList.add("bg-warning");
    } else if (valorGastosFijos > 60) {
      contenedorGastosFijos.classList.remove("bg-dark-color");
      contenedorGastosFijos.classList.add("bg-danger");
    }
  } 

  if (gastosOcio) {
    const contenedorAhorroInversion = gastosOcio.parentElement;
    let valorGastosOcio = parseFloat(
      gastosOcio.textContent.replace(",", ".").replace("%", "").trim()
    );
    if (valorGastosOcio > 0 && valorGastosOcio <= 30) {
      contenedorAhorroInversion.classList.remove("bg-dark-color");
      contenedorAhorroInversion.classList.add("bg-success");
    } else if (valorGastosOcio > 30 && valorGastosOcio <= 35) {
      contenedorAhorroInversion.classList.remove("bg-dark-color");
      contenedorAhorroInversion.classList.add("bg-warning");
    } else if (valorGastosOcio > 35) {
      contenedorAhorroInversion.classList.remove("bg-dark-color");
      contenedorAhorroInversion.classList.add("bg-danger");
    }
  } 

  if (ahorroInversion) {
    const contenedorAhorroInversion = ahorroInversion.parentElement;
    let valorAhorroInversion = parseFloat(
      ahorroInversion.textContent.replace(",", ".").replace("%", "").trim()
    );
    if (valorAhorroInversion > 0 && valorAhorroInversion >= 20) {
      contenedorAhorroInversion.classList.remove("bg-dark-color");
      contenedorAhorroInversion.classList.add("bg-success");
    } else if (valorAhorroInversion > 0 && valorAhorroInversion >= 10) {
      contenedorAhorroInversion.classList.remove("bg-dark-color");
      contenedorAhorroInversion.classList.add("bg-warning");
    } else if (valorAhorroInversion > 0 && valorAhorroInversion < 10) {
      contenedorAhorroInversion.classList.remove("bg-dark-color");
      contenedorAhorroInversion.classList.add("bg-danger");
    }
  } 
});
