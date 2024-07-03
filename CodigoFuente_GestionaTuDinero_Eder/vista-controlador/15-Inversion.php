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
                    <h1 style="font-family:'Source Sans Pro'; font-size: 2.5em; text-align: center">Inversión</h1>
                </div>
                <div class="card-content" style="max-height: none;">
                    <p class="text">
                        <strong>Vamos a empezar con la parte más interesante y con lo que de verdad vamos a hacer despegar nuestras finanzas personales de una vez por todas.</strong>

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Recuerda que la inversión es para todo el mundo.</strong> No hace falta que seas rico, ni que seas un superexperto en este tema. Solo necesitas tener un mínimo de educación en el tema para poder entender cómo va a trabajar tu dinero y tomar tus propias decisiones.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" />Como ya sabes, el dinero en efectivo no es muy seguro y tampoco lo es tenerlo en el banco debido al efecto de la inflación, la cual va haciendo que este vaya perdiendo su valor a medida que va pasando el tiempo.
                        <strong>Con lo cual invertir hoy en día, podría decirse que es una obligación si no quieres que el dinero que ganas pierda su valor.</strong>

                        <strong>Pues, empecemos de lleno con el tema de la inversión. Esto es un pequeño resumen de algunos de los muchos vehículos de inversión que existen y que más te podrían interesar. Recuerda que tienes que entender estos vehículos antes de poner tu dinero en ellos.</strong>
                    </p>
                    <h4>¿Qué es la bolsa?</h4>
                    <p class="text">
                        La bolsa de valores es el mercado en el que se negocian diferentes activos financieros como acciones, bonos, obligaciones o derechos de suscripción.
                        Las empresas salen a bolsa con la intención de encontrar financiación y, nosotros como inversores, les prestamos dinero de diferentes formas con el fin de encontrar una rentabilidad.
                        Las cotizaciones de las acciones en bolsa se rigen por la oferta y la demanda de estas. Así como por el precio que las personas estén dispuestas a comprar o vender.
                        Por eso, el precio o la cotización de una acción cambia constantemente ya que dependerá del último valor negociado.
                        Cuando hay más inversores interesados en comprar una acción que en venderla, su cotización sube, pues los inversores van comprando cada vez a precios más caros. En cambio, si hay muchos vendedores y pocos compradores, la dinámica se invierte.
                    </p>
                    <h4>¿Cómo invertir en bolsa?</h4>
                    <p class="text">
                        Para acceder como inversor a este mercado necesitas contratar a un <strong>bróker - plataforma de inversión</strong> que actuará como intermediario. Este es un paso importante a causa de dos factores.
                        <strong>Comisiones:</strong> Hay grandes diferencias entre las comisiones que te cobran los distintos brókeres.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Cánones de bolsa y custodia:</strong> Comisión por mantener las acciones. Especialmente si inviertes a largo plazo, este tipo de comisión debería ser mínima o gratuita.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Cobro de dividendos:</strong> De nuevo, si tienes muchas acciones a largo plazo que repartan dividendos, te interesa que sea gratuito.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Comisiones por compra o por venta:</strong> Con estas últimas hay que tener muy en cuenta la comisión mínima.
                        Las comisiones suelen ser distintas, según en el mercado en el que operes.

                        <strong>Regulación:</strong> Los brókeres se encuentran regulados por mecanismos oficiales. En España, por ejemplo, los brókeres estarán regulados por la <a href="https://www.cnmv.es/portal/home.aspx" target="_blank">CNMV</a> (Comisión Nacional del Mercado de Valores) y respaldados por <a href="https://www.fogain.com/" target="_blank">FOGAIN</a> (Fondo de Garantía de Inversiones) que garantiza tu capital hasta 100.000€.
                        O bien, regulado por mecanismos reguladores de otros países.
                    </p>
                    <h4>¿Cómo ganar dinero en bolsa?</h4>
                    <p class="text">
                        Hay dos formas que son las más comunes.

                        <strong>Plusvalías:</strong> Se trata de la subida de precio de una acción, es decir, de cuánto se ha revalorizado desde que la compraste.
                        <strong>Por ejemplo:</strong> Imagina que compraste una acción por 30€ y en el momento de venderla estaba a 44€. Bien, pues, la plusvalía de esta acción fue de 14€ por acción.

                        <strong>Dividendos:</strong> Los dividendos son una parte de los beneficios de la empresa que esta decide repartir entre sus accionistas de forma periódica. Suele ser cada 6 meses o de forma anual.
                        No todas las empresas reparten dividendos. Dependerá de la política interna de cada una. Algunas prefieren que ese dinero continúe en la empresa y así hacerlo crecer más rápido.
                        <strong>Por ejemplo:</strong> Si el dividendo es de un 5% por acción y esta cuesta 20€, recibiremos 1€ por cada acción que tengamos.
                        Este método de inversión no es el más lucrativo para el inversor, porque deberá declarar a Hacienda las ganancias obtenidas por estos dividendos. De un 19% a un 26% en España.
                    </p>
                    <hr>
                    <h4>¿Qué son los índices bursátiles?</h4>
                    <p class="text">
                        Seguramente alguna vez has oído hablar del <strong>Ibex-35 o del S&P-500.</strong> Pues bien, estos son dos índices bursátiles.
                        Los índices bursátiles son indicadores que miden la variación de precios globales de un conjunto de acciones u otros valores que cuentan con características en común.

                        <strong>Por ejemplo:</strong> En España tenemos el <a href="https://es.wikipedia.org/wiki/Anexo:Empresas_de_la_Bolsa_de_Madrid#:~:text=3%20Latibex-,Ibex%2035,Acciona%20%2D%20ANA" target="_blank">IBEX-35</a>, conformado por las 35 empresas de mayor capitalización de la bolsa en España. Por tanto, cuando escuchamos que el Ibex ha caído, en realidad lo que ocurre es que la cotización media de las empresas que lo componen ha disminuido.
                        También podemos encontrar índices de determinados sectores, como el caso del <a href="https://www.nasdaq.com/es/market-activity" target="_blank">NASDAQ</a> que recoge las principales empresas tecnológicas de Estados Unidos.
                        Estos índices resultan muy útiles para saber cómo se está comportando un mercado de forma global.

                        <strong>Algunos de los principales son:</strong>
                        <img class="point" src="../static/images/china.png" alt="China" /><strong>El CSI300 Shanghái pertenece a China.</strong>

                        <img class="point" src="../static/images/japon.png" alt="Japón" /><strong>El Nikkei300 a Japón.</strong>

                        <img class="point" src="../static/images/australia.png" alt="Australia" /><strong>El ASX200 a Australia.</strong>

                        <img class="point" src="../static/images/espana.png" alt="España" /><strong>El IBEX35 a España.</strong>

                        <img class="point" src="../static/images/alemania.png" alt="Alemania" /><strong>El DAX30 a Alemania.</strong>

                        <img class="point" src="../static/images/estados-unidos.png" alt="Estados unidos" /><strong>El S&P500 y el Dow Jones a Estados Unidos.</strong>

                        <img class="point" src="../static/images/colombia.png" alt="Colombia" /><strong>El IGBC. A Colombia.</strong>
                    </p>
                    <hr>
                    <h3>Productos financieros</h3>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Hemos aprendido lo que es la bolsa, ahora vamos a ver qué productos o vehículos financieros existen para poner nuestro dinero a trabajar.</strong>
                    </p>
                    <h4>Inversión en Acciones.</h4>
                    <p class="text">
                        El principal motivo por el que las empresas lanzan sus acciones al mercado es para buscar financiación y, así, poder financiar y seguir expandiendo la empresa. También por reputación, puesto que una empresa que cotiza en bolsa es sinónimo de una empresa sólida y fuerte.
                        <strong>Las acciones son las partes en las que se divide el capital de una empresa.</strong> Por ello, cuando se compra una acción, estamos adquiriendo una parte de la empresa. Y así, nos convertimos en una parte de ella.
                        El precio de una acción lo regula el mercado y su precio de compraventa. En él influyen muchas cosas, desde la reputación de esta empresa, sus resultados y sus planes futuros.
                        Las dos formas que hemos visto antes de ganancias en este tipo de inversión son las plusvalías o bien los dividendos.

                        Hay seis tipos de acciones distintas:
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Blue Chips:</strong> Empresas muy grandes y asentadas en su sector. Son una buena opción para el largo plazo y consiguen disminuir el riesgo de nuestra cartera.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Growth:</strong> Empresas con altas expectativas de crecimiento y altos beneficios.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Dividendos:</strong> Empresas con alto reparto de dividendos de forma periódica.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Cíclicas:</strong> Empresas que cuentan con una gran variación de sus beneficios según determinados ciclos o épocas del año.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Defensivas:</strong> Son empresas de sectores imprescindibles como, por ejemplo, la alimentación o la salud. Que se mantienen muy estables ante cualquier situación.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Especulativas:</strong> Empresas con grandes proyectos hacia futuro pero aún sin grandes resultados. Beneficio potencial y también un gran riesgo.

                        Cuando queramos construir nuestra cartera de acciones es importante hacer un análisis de las acciones que la van a componer. Hay dos tipos de análisis:
                        <strong>Análisis fundamental:</strong> Se trata de analizar el valor del activo, teniendo en cuenta los resultados de la empresa, el análisis del sector de esta y las perspectivas de crecimiento a largo plazo. Se trata de identificar cuándo las empresas están infravaloradas o sobrevaloradas. Esto se hace a través de los resultados públicos de las empresas, donde puedes ver ratios, solvencia de la empresa, situación actual etc.
                        <strong>Análisis técnico:</strong> El análisis técnico nos ayuda a intentar predecir o hacer una estimación del precio en función del estudio de los gráficos. Cuando se utiliza para la inversión a largo plazo, nos ayudará a ver cuál es el mejor momento de compra. En el análisis técnico a largo plazo, lo que vamos a tener que aprender a identificar son las tendencias, los soportes y las resistencias.
                        <strong>Las tendencias</strong> son las trayectorias que siguen los precios, si estas caen, será una tendencia bajista. Si esta se mantiene en el tiempo, hablaremos de tendencias laterales. Y si la tendencia sube, se llamará tendencia alcista. Aquí habrá que fijarse en los horizontes temporales de los que estés dispuesto a invertir. Si tu idea es hacer una inversión de 20 años, de nada va a servir que mires la tendencia quincenal.
                        <strong>El soporte</strong> es el límite inferior, un nivel en el que cuando el precio toca, rebota hacia arriba.
                        <strong>La resistencia</strong> por su parte, es el rango superior del precio que cuando se alcanza este suele rebotar hacia abajo.

                    </p>
                    <hr>
                    <h4>Los fondos de inversión</h4>
                    <p class="text">
                        <img class="point" src="../static/images/joya.png" alt="Diamante" /><strong>Este tipo de inversión seguramente sea lo más fácil de entender para cualquier inversor principiante.</strong>

                        Un fondo de inversión es lo que se conoce como un fondo de inversión colectiva. <strong>A grandes rasgos, es un conjunto de inversores que se une para invertir en un grupo de activos.</strong> Esta inversión colectiva permite algunas ventajas fiscales. Y sobre todo aumentar la diversificación, aumentando el conjunto de activos en los que se pueden invertir. Cada inversor ganará de manera proporcional al dinero invertido. Y todo esto controlado por un marco regulatorio.

                        Una de las muchas ventajas es que <strong>son productos líquidos,</strong> es decir, <strong>puedes disponer de tu dinero invertido siempre que lo necesites,</strong> independientemente del momento en que lo compraste. De esta forma, no estás atado a tener que dejar tu dinero un tiempo mínimo determinado en el fondo, siendo tú el que decide en todo momento que hacer con él, como sí que ocurre en otros productos financieros.
                        <img class="point" src="../static/images/si.png" alt="Tick verde" /><strong>Ventajas fiscales:</strong> Podemos traspasar nuestro dinero de un fondo a otro sin tributar las plusvalías. De esta manera, si has estudiado un fondo que se adapta mejor a tus necesidades, puedes cambiarte sin ningún problema.
                        <img class="point" src="../static/images/si.png" alt="Tick verde" /><strong>Diversificación:</strong> Se consigue una diversificación muy buena con este tipo de producto, ya que si, por ejemplo, en este fondo compras el índice S&P500 que replicaría la bolsa de Estados Unidos, estarías invirtiendo en esas quinientas empresas y diversificando muchísimo más. Aunque invirtamos pequeñas cantidades, conseguiremos que nuestro dinero esté bien diversificado.
                        <img class="point" src="../static/images/si.png" alt="Tick verde" /><strong>Ahorro en el cobro de dividendos:</strong> Como ya vimos un poco más arriba, los dividendos que pagan las empresas en este caso se autoinvierten en el fondo, de esta manera, nos ahorraremos una cantidad inmensa de dinero a la hora de tener que pagar impuestos por cada una de las ganancias de estas acciones. Esto a su vez nos ayudará, y mucho, a aprovecharnos del efecto multiplicador del interés compuesto.
                        La mayoría permiten hacer aportaciones periódicas al no tener comisión por compra.

                        <img class="point" src="../static/images/buscar.png" alt="Lupa" /><strong>Hemos visto de forma genérica lo que es un fondo de inversión, pero hay una gran cantidad de tipos de fondos de inversión y no todos son tan recomendables. Por eso vamos a echarles un vistazo a cada uno de ellos para que saques tus propias conclusiones.</strong>
                    </p>
                    <h4>¿Qué tipos de fondos de inversión existen?</h4>
                    <p class="text">
                        <strong>Fondos de renta fija y Fondos de renta variable.</strong>
                        En este caso hay que diferenciar en qué invierte cada uno de ellos.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Fondos de renta fija:</strong> La mayor parte del fondo está compuesto por instrumentos de renta fija, así como: <strong>títulos de bonos, letras del tesoro o deudas de empresas, entre otros.</strong> Son un producto muy conservador, ofreciendo una <strong>alta seguridad en la inversión a medio y largo plazo.</strong> Pero la rentabilidad que se espera es algo baja, a veces incluso inferior a la inflación.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Fondos de renta variable:</strong> La mayor parte de este fondo esta invertido en <strong>instrumentos de renta variable como las acciones.</strong>

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Fondos de renta mixta:</strong> Combinan los dos tipos de inversión tanto la fija como la variable. Con la renta fija contamos con la rentabilidad esperada de antemano. No suele salir muy rentable, ya que la rentabilidad esperada suele ser muy baja, debido a estos instrumentos de renta fija en comparación con los de renta variable.


                        <img class="point" src="../static/images/advertencia.png" alt="Advertencia" /><strong>Gestión activa y gestión pasiva</strong>
                        Si hay algo que marca la diferencia a la hora de gestionar los fondos es el tipo de gestión de esta.
                    </p>
                    <h4>¿Gestión activa o pasiva?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Fondos de gestión activa:</strong> Este tipo de gestión es el más común en los fondos. Estos son administrados por gestores profesionales que eligen de forma activa, los valores que compondrán ese fondo. El objetivo final de estos fondos siempre será batir el Benchmark (índice de referencia).

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Fondos de gestión pasiva:</strong> Estos fondos, por el contrario, se encargan de replicar de forma exacta el comportamiento de un índice. Por ello, los gestores no tendrán que elegir qué tipo de activos formarán la cartera sino comprar los mismos que componen el índice y en su misma proporción.

                        Como hemos visto, el papel de los gestores en estos fondos es muy diferente. Mientras que en la gestión activa su papel es crucial, en la gestión pasiva es algo automático.
                        Por ello, también hay una diferencia abismal en las comisiones que pagas en cada uno de ellos.
                        <strong>Aquí está la clave.</strong> Mientras que los fondos de gestión activa cargan unas comisiones de entre un 1,5% a un 2% anual. La gestión pasiva entorno a un 0,25% a un 0,40%. Aunque estas diferencias no parezcan tan grandes a primera vista, influyen, y mucho, a largo plazo. <strong>Por ejemplo:</strong>

                        Si invertimos 100€ al mes, durante 40 años, a través de dos fondos de inversión distintos. Uno de gestión activa cuyas comisiones son del 1,5% anual. Y el otro es de gestión pasiva y su comisión anual es del 0,30%. Si suponemos la misma rentabilidad de un 1%, estos son los resultados.
                        <img class="point" src="../static/images/cancelar.png" alt="X roja" /><strong>La ganancia en el fondo de gestión activa en el año 40 sería de: 224.457€.</strong>

                        <img class="point" src="../static/images/si.png" alt="Tick verde" /><strong>Y la ganancia en el fondo de gestión pasiva en el año 40 sería de: 309.453€.</strong>
                        <strong>¡Casi 85.000€ de diferencia!</strong>

                        Como se ve ante el mismo plazo temporal <strong>la misma inversión varía muchísimo según las comisiones que se cobren.</strong>
                        Sobre el papel, la gestión activa tiene como objetivo batir a su índice de referencia y podría tener sentido que cobren una comisión más alta ya que su objetivo es conseguir mayor rentabilidad. Pero, sin embargo, cuando vemos históricamente que ocurre con la gestión activa, en comparación con la pasiva, encontramos que la mayoría de las veces esto no se cumple.
                        En realidad, <strong>entre el 85% y el 90% de los gestores de gestión activa no empata con sus índices de referencia.</strong>
                        Grandes inversores como <a href="https://es.wikipedia.org/wiki/Warren_Buffett" target="_blank">Warren Buffet</a> o <a href="https://www.elclubdeinversion.com/john-bogle/" target="_blank">John Bogle</a> entre otros. También sostienen que la gestión pasiva es mejor que la activa. Y se han mostrado partidarios de la gestión pasiva a través de fondos indexados.
                        <strong>La realidad que reflejan varios estudios y las gráficas actuales siguen reflejando que la gestión pasiva es mejor opción para el inversor común a través de carteras de fondos indexados.</strong>
                    </p>
                    <h3>¿Dónde comprar fondos de inversión?</h3>
                    <p class="text">
                        Estos fondos se pueden comprar a través de varias vías.
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Bancos de inversión:</strong> Esto no suele ser lo más recomendable porque casi no los ofrecen ya que, debido a sus bajos costes de mantenimiento, estos bancos no pueden sacar demasiada rentabilidad de ellos.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Roboadvisor y ETF’s:</strong> Estas dos opciones que encontrarás explicadas a continuación van a ser las más rentables para encontrar este tipo de fondos.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Roboadvisor:</strong> Este tipo de método de inversión está ganando mucha popularidad en los últimos años. En definición, se trata de un gestor automatizado. Lo que hacemos a través de este instrumento es crear una cartera de inversión automatizada. Por lo general, estas carteras están formadas por varios fondos de inversión indexados y combinan distintos tipos, renta fija, renta variable, países emergentes, etc. Convirtiéndolos así en productos muy diversificados.
                        Su gran popularidad es fruto de la capacidad que tienen estos instrumentos de crear carteras altamente diversificadas, de forma automatizada y con comisiones menores al 0,5%, cosa que antes era muy complicado.
                        El proceso clásico que utilizan los roboadvisors, es <strong>realizar un perfil de riesgo al inversor</strong> a sus objetivos y se evalúan según el tiempo que este desea invertir en el fondo.
                        El inversor, comienza a hacer aportaciones puntuales o periódicas y el roboadvisor se encarga del resto. Haciendo reajustes y rebalanceos de la cartera mediante diferentes algoritmos. Siempre utilizando instrumentos de gestión pasiva para cobrar el menor número de comisiones posibles.
                    </p>
                    <hr>
                    <h4>¿Qué son los ETF?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>ETF’s:</strong> Según sus siglas en inglés Exchange traded funds. Son instrumentos muy sencillos de usar y con comisiones muy bajas, lo que ha hecho que también sean muy utilizados hoy en día en la gestión pasiva.
                        Los ETF’s cotizan como títulos bursátiles, es decir, como si fueran una acción normal y pueden comprarse y venderse en el mismo momento como las acciones. En cuanto a la fiscalidad, también tributarán de la misma manera que una acción. Por lo cual no cuentan con las ventajas que tienen los fondos de inversión a la hora de traspasarlos de unos a otros ya que tendrás que pagar los impuestos correspondientes como ganancias.
                        Una de las ventajas es que te permiten invertir a la baja o de forma contraria al índice, de tal forma que, si el índice cae, el fondo subirá. <strong>Este tipo de ETF es complejo y no apto para todo tipo de inversores.</strong>
                        ¿Qué ocurre con los dividendos de los ETF’s? <strong>Los ETF’s de acumulación, acumulan los dividendos y los reinvierten automáticamente</strong> a la cartera, así no tenemos que tributar las ganancias.
                        Mientras que <strong>los de distribución reparten los dividendos obtenidos.</strong>
                        Además, como encontrábamos en los fondos de inversión, podemos encontrar todo tipo ETFs <strong>así como de renta fija, variable, materias primas, oro y metales preciosos etc.</strong>

                        <img class="point" src="../static/images/si.png" alt="Tick verde" /><strong>Hay muchísimos ETF’s hoy en el mercado, cada uno de ellos se enfoca en algo en concreto o en varios aspectos, como, por ejemplo, la inversión en productos para la tercera edad o en países emergentes. Podrás encontrarlos a través de una plataforma de inversión, como hemos visto con las acciones y seleccionar el que mejor se adapte a ti.</strong>
                    </p>
                    <hr>
                    <h4>¿Qué son las criptomonedas?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Criptomonedas:</strong> En su origen, Bitcoin fue la primera criptomoneda. La primera vez que se supo de esta moneda fue el 31 de octubre de 2008. El nombre del creador o creadores es <a href="https://es.wikipedia.org/wiki/Satoshi_Nakamoto" target="_blank">“Satoshi Nakamoto”</a>. Este nombre es un seudónimo de quién o quienes inventaron el software de referencia del bitcoin. En el que se hablaba de la política monetaria de esta forma de dinero, definiendo las reglas de creación y distribución de esta.
                        <strong>Las criptomonedas</strong> son un tipo de activo digital que usa un código criptográfico para garantizar su titularidad y asegurar la seguridad de las transacciones. Esta tecnología evita las falsificaciones que se pueden hacer con el dinero físico, ya que se basan en el uso de la tecnología <a href="https://es.wikipedia.org/wiki/Cadena_de_bloques" target="_blank">blockchain</a>.
                        Estas, en comparación con las monedas tradicionales, no existen de forma física, solo en digital y se almacenan en una cartera, monedero digital o wallet.

                        <img class="point" src="../static/images/punto.png" alt="?" /><strong>¿Cómo funcionan?</strong> La principal característica de estas es la descentralización, o lo que es lo mismo, no están controladas ni reguladas por ninguna institución central y no requieren de intermediarios como los bancos tradicionales para realizar sus transacciones.

                        <img class="point" src="../static/images/punto.png" alt="?" /><strong>¿Cómo puedo comprar criptomonedas?</strong> Se compran a través de un Exchange. Estos son plataformas online que te permitirán adquirir y comprar criptomonedas. Es importante saber, que los precios de las criptomonedas se regulan según la ley de la oferta y la demanda, con la particularidad de que se trata de un dinero no regulado.
                        Además, se trata de un mercado continuo que está activo las 24 horas al día durante los 365 días del año.

                        <img class="point" src="../static/images/punto.png" alt="?" /><strong>¿Dónde almacenar mis criptomonedas?</strong> Existen monederos o wallets de dos tipos.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Monederos calientes:</strong>Monederos calientes: Es un software que almacena y guarda las claves digitales necesarias para operar con tus criptomonedas. A través de una aplicación móvil, ordenador o en línea. Por tanto, están conectadas a internet.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Monedero frio:</strong> Es un dispositivo externo muy parecido a un USB. Donde se almacenan las claves sin conexión a internet. Estos otorgan mayor seguridad ante posibles hackeos. También existen la Papper wallets o billeteras de papel, son un software que te permite imprimir las claves y los accesos de tus criptomonedas para guardarlas en formato físico.

                    </p>
                    <hr>
                    <h4>¿Qué son los seguros de ahorro?</h4>
                    <p class="text">
                        Son seguros que actúan como instrumento financiero. <strong>Estos son seguros de vida, los que aseguran un capital o rendimiento a la fecha de vencimiento.</strong> De tal manera que si la persona que lo contrata alcanza dicha edad tendrá derecho a recibir este dinero.
                    </p>

                    <h4>¿Qué son los PIAS?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Plan individual de ahorro sistemático (PIAS):</strong> Son bastante similares a un plan de pensiones ya que su finalidad es ir construyendo un ahorro que sirva como complemento a la pensión y que sirva como forma de renta. Se trata de un tipo de seguro por lo cual durante años irás pagando una prima a una aseguradora, esta puede ser en forma de aportaciones periódicas o puntuales. <strong>Y la aseguradora se compromete a devolverte el dinero con sus correspondientes intereses ya sean positivos o negativos en el momento de tu jubilación.</strong>
                        La principal diferencia con el plan de pensiones original radica en el trato fiscal de estos productos. <strong>Los planes PIAS no ofrecen ventajas para su contratación, pero si en el momento del rescate.</strong>
                        <strong>Características:</strong> Puedes retirar tu dinero desde el primer año con posibles penalizaciones. Pero para aprovecharte de beneficios fiscales deberás hacerlo después de 5 años. Aportación máxima de 8.000€ al año y de 240.000€ en total. Los PIAS no garantizan tu capital ni una renta mínima. Solo aquellos que lo especifiquen y estos lo harán invirtiendo en renta fija.
                        A mayor capital garantizado menor será la rentabilidad.
                        A partir del año 5 podrás retirar el dinero, pero para poder beneficiarte de las ventajas fiscales deberás de retirarlo en forma de renta vitalicia.

                        <img class="point" src="../static/images/si.png" alt="Tick verde" /><strong>Ventajas: </strong>Tributan como rendimiento del capital mobiliario, pero solo lo hacemos con una parte de nuestro dinero. Si retiras el dinero antes de los primeros 5 años puedes estar sujeto a penalizaciones que te hagan perder incluso parte del dinero aportado. Comisiones por gestión, mantenimiento etc. <strong>En torno a un 1% y un 2% anual. Algunos cobran un 0,5%. Pero durante los primeros años se quedan con aproximadamente la mitad de cada una de tus aportaciones.</strong>
                        Por tanto, se trata de un producto en el que vas haciendo una serie de aportaciones que posteriormente, como ocurría con los fondos de gestión activa, un grupo de gestores profesionales invertirá para intentar obtener un beneficio, y, que si acordamos a la hora de retirar el dinero, hacerlo en forma de renta o lo que es lo mismo mes a mes. <strong>Presentan ciertas ventajas fiscales.</strong>

                        <img class="point" src="../static/images/cancelar.png" alt="X roja" /><strong>Desventajas: </strong>El gran problema de estos planes, a parte de la escasa libertad que generan, son las grandes comisiones que cobran, las cuales pueden acabar comiéndose la mayor parte de tu rentabilidad.
                    </p>
                    <h4>¿Qué son los planes de pensiones?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Planes de pensiones:</strong> Como ya hemos visto en puntos anteriores, hay muchas formas de garantizarnos un futuro a largo plazo para nuestra jubilación.
                        Aunque este sea al producto más comercializado por bancos y empresas en España, no tiene por qué ser el más interesante. Veamos por qué.

                        <strong>¿Qué es un plan de pensiones?</strong>
                        Es un producto de ahorro e inversión a largo plazo que como objetivo principal tiene que cuando nos retiremos, podamos tener una renta periódica, que sirva como complemento a la pensión pública. Algo bastante similar a los PIAS.
                        Se construyen haciendo aportaciones puntuales o periódicas, con un máximo de 2.000€ al año en el caso de personas individuales y 8.000€ para empresas. <strong>El dinero se puede recuperar en el momento en el que te jubilas, con algunas excepciones como la incapacidad permanente, enfermedad grave o desempleo de larga duración.</strong>

                        <img class="point" src="../static/images/cancelar.png" alt="X roja" /><strong>Una de las principales desventajas de los planes de pensiones es que te condicionan a recuperar tu dinero en un momento determinado. Si te decides por utilizar esta vía, asegúrate de no invertir un dinero que pudieras necesitar en cualquier momento. Ten en cuenta que este dinero no te servirá como aval a la hora de pedir un préstamo.</strong>

                        <img class="point" src="../static/images/preguntaa.png" alt="?" /><strong>¿De verdad son rentables?</strong>
                        Han sido muy pocos los fondos de pensiones según los últimos estudios realizados <strong>que han conseguido superar la rentabilidad del IBEX35 o de los bonos el estado.</strong>
                        La rentabilidad media de estos 15 planes de pensiones más usados en España es de un <strong>1,33%.</strong> Lo que explica estas patéticas rentabilidades, en parte son sus <strong>comisiones altísimas y de la ineficiencia de la gestión activa.</strong> Aunque esto no ocurre solo en España.

                        <img class="point" src="../static/images/si.png" alt="Tick verde" /><strong>Ventajas fiscales de los planes de pensiones:</strong> En España puedes desgravar la cantidad de la base imponible del IRPF. Por ejemplo, sí realizas una aportación de 1000€ y te retienen un 24% ahorrarás 240€, que te serán devueltos en la declaración de la renta, esta deducción puede ser como máximo de 2000€ o el 30% de las actividades laborales u otras actividades económicas.

                        <img class="point" src="../static/images/cancelar.png" alt="X roja" /><span class="red">En realidad, estas ventajas son solo un caramelo para el corto plazo, ya que en el momento en el que empieces a retirar tu dinero, tendrás que tributarlo en IRPF como rendimientos del trabajo. Por tanto, no existe tal ventaja, ya que lo que no pagas antes, lo acabas pagando años después en esos maravillosos años que deberían de ser los de tu jubilación.</span>
                    </p>
                    <hr>
                    <h4>¿Qué es la renta fija?</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Bonos:</strong> Los bonos son un instrumento financiero de renta fija que emiten los gobiernos y empresas de cada país, es una manera de conseguir financiación, en este caso pidiendo dinero prestado a un particular. Cuando adquirimos este tipo de productos hacemos la misma función que un banco. Este cuando alguien le solicita un préstamo, lo presta con un plazo preacordado y con unos intereses determinados. Por lo general, cuando mayor es el plazo, mayor son los intereses que pagar y cuando mayor es el riesgo de impago por parte del cliente, mayores serán también dichos intereses.
                        Los bonos funcionan igual, pero al revés. Es decir, nosotros como inversores asumimos el papel del banco, prestándole dinero a gobiernos y empresas, estos nos devolverán el dinero y el interés pactado en el plazo acordado. De tal forma que si compras un bono del estado de España, le estás prestando tu dinero al gobierno de España o si lo haces a través de un pagaré de Iberdrola, le estarás haciendo un préstamo a esta compañía.

                        Debemos entender los tres componentes básicos de los bonos antes de hacer una inversión en ellos.
                        <strong>Principal, valor nominal o par:</strong> Es el precio inicial del bono, lo que pagamos por él.
                        <strong>Cupón:</strong> Se trata del interés ofrecido a cambio del bono.
                        <strong>Vencimiento:</strong> Plazo temporal acordado para que el emisor nos devuelva el dinero.

                        <strong>¿Cómo de fija es la renta fija ofrecida por estos bonos?</strong>
                        Con ese nombre “Renta fija” nos hacen pensar que vamos a tener un rendimiento fijo, esto no es del todo cierto. Como decíamos, este tipo de inversión funciona como los préstamos solicitados al banco, pero a la inversa, por ello el tipo de interés que pagan estos productos, <strong>puede ser fijo “lo más común” o variable.</strong> En este último caso el interés estaría compuesto por renta fija más Euribor. <strong>Por ejemplo: Euribor + 1,5%. Siempre es importante entender que la renta fija de los bonos será fija o garantizada, siempre que los mantengamos hasta su vencimiento.</strong>

                        <img class="point" src="../static/images/notas.png" alt="Libreta" /><strong>Compramos un bono por 1000€ un 3% anual y un vencimiento a 2 años.</strong>
                        Si lo mantenemos hasta el final de los dos años, obtendríamos una cantidad de 60€ o lo que es lo mismo, 30€ cada año. Si, por ejemplo, el día 20 me quiero deshacer de él, lo podré vender, pero teniendo claro que los bonos como las acciones varían a lo largo de los días según funcione el mercado, por lo tanto, me tendré que acoger al valor que tenga el bono en ese momento, sea negativo o positivo y, de este modo, ya no será una rentabilidad fija.

                        <strong>Otros productos de renta similar que funcionan de manera parecida a estos, aunque con matices diferentes.</strong>
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Deuda pública:</strong> Bonos del tesoro, obligaciones del estado.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Deuda privada:</strong> Pagarés de empresas o bonos de empresas.

                        <strong>La diferencia principal está en el plazo temporal y en la manera de abonar los intereses.</strong>

                        <img class="point" src="../static/images/notas.png" alt="Libreta" /><strong>En la deuda pública:</strong> Las letras del tesoro tienen un plazo de vencimiento de entre 3 a 18 meses y se pagan al descuento. Esto significa que en el momento de la compra pagaremos un valor inferior al nominal y al vencimiento se nos devuelve el valor nominal completo.<strong> Por ejemplo:</strong> Para comprar una letra del tesoro con valor nominal de 1000€, tendrás que pagar 980€, y al vencimiento te devolverán 1000€.

                        <img class="point" src="../static/images/notas.png" alt="Libreta" /><strong>Los bonos tienen un plazo entre 3 y 5 años.</strong>

                        <img class="point" src="../static/images/notas.png" alt="Libreta" /><strong>Las obligaciones tienen un plazo de 10 a 50 años.</strong>

                        <img class="point" src="../static/images/notas.png" alt="Libreta" /><strong>En la deuda privada:</strong> el pagaré tiene un plazo de 3 a 18 meses y se pagan al descuento. Los pagarés son los equivalentes a los bonos, pero <strong>utilizando deuda privada de empresas.</strong>
                        <span class="grey">Texto sacado de fragmentos del libro de Celia Rubio "Hazlo bien con tu dinero" | Editorial Alienta | 2019</span>
                    </p>
                    <hr>
                    <h4>Activos inmobiliarios (Bienes raíces)</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Activos inmobiliarios (Bienes raíces):</strong> A menudo los inversores principiantes descartan la inversión inmobiliaria debido a la creencia de que se necesita un alto capital inicial para lanzarse a esta inversión. En realidad, existen numerosas técnicas de inversión inmobiliaria.
                        La más conocida, es la compra directa de una vivienda o piso. Ya sea para alquilarlo y recibir cada mes una ganancia extra, para comprarlo y esperar a que suba de valor y así ganar una plusvalía extra o incluso reformarlo y venderlo en ese mismo momento.
                        En estos casos, sí que se suele necesitar un capital elevado al principio, para obtener la financiación o la compra directa.

                        <strong>Pero existen otras fórmulas que requieren un menor capital de inicio.</strong>
                        <strong>Por ejemplo:</strong> Puedes comprar acciones del sector de la construcción, <strong>invertir en REITS o SOCIMIS</strong> que son fondos de inversión del sector inmobiliario que cotizan en bolsa.

                        Otra opción es el <strong>Crowdfunding inmobiliario.</strong> Que se trata de una manera de financiación colectiva, en la que los inversores individuales invierten en sectores inmobiliarios que generan ingresos mensuales y que generan un alto potencial de crecimiento.
                    </p>
                    <hr>
                    <h4>Otros tipos de inversiones interesantes</h4>
                    <p class="text">
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Inversión en materias primas:</strong> Entre estos encontramos productos tales como los productos de energía, de agricultura, de ganadería y de metales preciosos como, por ejemplo, el oro o la plata. Estos últimos, son considerados inversiones refugio en tiempos de incertidumbre en los mercados.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Inversión en Negocios:</strong> Además de la bolsa existen otras formas de invertir en negocios, tanto físicos como online.
                        Algunas opciones son, crear un negocio propio, comprar uno existente o incluso convertirte en franquiciado de una empresa que contemple esta opción, como, por ejemplo, una cadena de comida rápida.
                        Por otro lado, tendríamos la inversión en empresas que no cotizan en bolsa o <strong>Startups.</strong> Hay varias formas de hacerlo, pero si tu capital es limitado, la mejor opción es hacerlo a través de plataformas de for Equity, que te permiten invertir por tan solo 100 euros por proyecto. Cuando inviertes en startups, el retorno de la inversión se produce cuando la empresa sale a bolsa, la adquiere otra compañía o empieza a distribuir dividendos.
                        <strong>Debes tener claro, que este tipo de inversión es a largo plazo y con un riesgo bastante elevado, pero puede ser muy rentable.</strong>

                        <strong>Inversiones Alternativas:</strong>
                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Crowdlending:</strong> Se trata de hacer préstamos a particulares o a Pequeñas y medianas empresas.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Bebidas Alcohólicas:</strong> Vino y whisky. Al ser dos tipos de bebidas que se revalorizan con el tiempo, también es una vía de inversión muy llamativa.

                        <img class="point" src="../static/images/punto.png" alt="Mano señalando" /><strong>Arte:</strong> Las obras de arte bien escogidas, suelen tener tendencia a revalorizarse con el paso del tiempo y, además, ofrecen una baja correlación con el mercado financiero lo que puede ser una manera interesante para afirmar tus inversiones.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>