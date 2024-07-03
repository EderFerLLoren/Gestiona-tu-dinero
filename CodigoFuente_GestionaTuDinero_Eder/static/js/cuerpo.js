const themeCookieName = "theme";
const themeDark = "dark";
const themeLight = "light";

const body = document.getElementsByTagName("body")[0];

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

cargarTema();

function cargarTema() {
  var theme = getCookie(themeCookieName);
  body.classList.add(theme === "" ? themeLight : theme);
}

function cambiarTema() {
  if (body.classList.contains(themeLight)) {
    body.classList.remove(themeLight);
    body.classList.add(themeDark);
    setCookie(themeCookieName, themeDark);
  } else {
    body.classList.remove(themeDark);
    body.classList.add(themeLight);
    setCookie(themeCookieName, themeLight);
  }
}

function colapsarSidebar() {
  body.classList.toggle("sidebar-expand");
}

window.onclick = function (event) {
  abrirCerrarDesplegable(event);
};

function cerrarDesplegable() {
  var dropdowns = document.getElementsByClassName("dropdown-expand");
  for (var i = 0; i < dropdowns.length; i++) {
    dropdowns[i].classList.remove("dropdown-expand");
  }
}

function abrirCerrarDesplegable(event) {
  if (!event.target.matches(".dropdown-toggle")) {
    cerrarDesplegable();
  } else {
    var toggle = event.target.dataset.toggle;
    var content = document.getElementById(toggle);
    if (content.classList.contains("dropdown-expand")) {
      cerrarDesplegable();
    } else {
      cerrarDesplegable();
      content.classList.add("dropdown-expand");
    }
  }
}

function abrir1() {
  let val = document.getElementById("Gasto");
  let sib1 = val.nextElementSibling;
  let sib2 = sib1.nextElementSibling;
  if (val.classList.length === 1) {
    val.classList.add("open");
    console.log(val.classList);
    sib1.outerHTML = `<li class="sidebar-nav-item">
                            <a href="5-Añadir-Gasto.php" class="sidebar-nav-link">
                                <div>
                                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </div>
                                <span>
                                    Añadir Gastos
                                </span>
                            </a>
                        </li>`;
    sib2.outerHTML = `<li class="sidebar-nav-item">
                                <a href="6-Gestion-Gastos.php" class="sidebar-nav-link">
                                    <div>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Control de Gastos
                                    </span>
                                </a>
                            </li>`;
  } else {
    val.classList.remove("open");
    sib1.outerHTML = `<li class="sidebar-nav-item" style="display: none">
                                <a href="5-Añadir-Gasto.php" class="sidebar-nav-link">
                                <div>
                                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </div>
                                <span>
                                    Añadir Gastos
                                </span>
                                </a>
                            </li>`;
    sib2.outerHTML = `<li class="sidebar-nav-item">
                                <a href="6-Gestion-Gastos.php" class="sidebar-nav-link" style="display: none">
                                <div>
                                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </div>
                                <span>
                                    Control de Gastos
                                </span>
                                </a>
                            </li>`;
  }
}

function abrir2() {
  let val = document.getElementById("ER");
  let sib1 = val.nextElementSibling;
  let sib2 = sib1.nextElementSibling;
  let sib3 = sib2.nextElementSibling;
  if (val.classList.length === 1) {
    val.classList.add("open");
    console.log(val.classList);

    sib1.outerHTML = `<li class="sidebar-nav-item">
                                <a href="7-Fecha.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Reporte de Fechas
                                    </span>
                                </a>
                            </li>`;
    sib2.outerHTML = `<li class="sidebar-nav-item">
                                <a href="8-Mensual.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Reporte Mensual
                                    </span>
                                </a>
                            </li>`;

    sib3.outerHTML = `<li class="sidebar-nav-item">
                                <a href="9-Anual.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Reporte Anual
                                    </span>
                                </a>
                            </li>`;
  } else {
    val.classList.remove("open");
    sib1.outerHTML = `<li class="sidebar-nav-item" style="display:none;">
                                <a href="7-Fecha.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Reporte de Fechas
                                    </span>
                                </a>
                            </li>`;
    sib2.outerHTML = `<li class="sidebar-nav-item" style="display: none;">
                                <a href="8-Mensual.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Reporte Mensual
                                    </span>
                                </a>
                            </li>`;

    sib3.outerHTML = `<li class="sidebar-nav-item" style="display:none;">
                                <a href="9-Anual.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Reporte Anual
                                    </span>
                                </a>
                            </li>`;
  }
}

function abrir3() {
  let val = document.getElementById("Aprende");
  let sib1 = val.nextElementSibling;
  let sib2 = sib1.nextElementSibling;
  let sib3 = sib2.nextElementSibling;
  let sib4 = sib3.nextElementSibling;
  if (val.classList.length === 1) {
    val.classList.add("open");
    console.log(val.classList);

    sib1.outerHTML = ` <li class="sidebar-nav-item">
                                <a href="12-Crear-Presupuesto.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Crear un Presupuesto
                                    </span>
                                </a>
                            </li>`;
    sib2.outerHTML = `<li class="sidebar-nav-item">
                            <a href="13-Deuda.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Acaba con<br> tu Deuda
                                    </span>
                                </a>
                            </li>`;

    sib3.outerHTML = `<li class="sidebar-nav-item">
                                <a href="14-Colchon-Seguridad.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Colchón de Seguridad
                                    </span>
                                </a>
                            </li>`;
    sib4.outerHTML = `<li class="sidebar-nav-item">
                                <a href="15-Inversion.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Inversión
                                    </span>
                                </a>
                            </li>`;
  } else {
    val.classList.remove("open");
    sib1.outerHTML = `<li class="sidebar-nav-item" style="display: none;">
                                <a href="12-Crear-Presupuesto.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Crear un Presupuesto
                                    </span>
                                </a>
                            </li>`;
    sib2.outerHTML = `<li class="sidebar-nav-item" style="display: none;">
                                <a href="13-Deuda.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Acaba con<br> tu Deuda
                                    </span>
                                </a>
                            </li>`;

    sib3.outerHTML = `<li class="sidebar-nav-item" style="display: none;">
                                <a href="14-Colchon-Seguridad.php" class="sidebar-nav-link">
                                    <div>
                                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <span>
                                        Colchón de Seguridad
                                    </span>
                                </a>
                            </li>`;
    sib4.outerHTML = `<li class="sidebar-nav-item" style="display: none;">
                            <a href="15-Inversion.php" class="sidebar-nav-link">
                                <div>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </div>
                                <span>
                                    Inversión
                                </span>
                            </a>
                        </li>`;
  }
}
