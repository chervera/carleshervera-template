<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Carles Hervera Website</title>
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500|Roboto+Condensed:300,400,700|Roboto:300,400,400i"
        rel="stylesheet">

    <link rel="stylesheet" href="./node_modules/normalize.css/normalize.css">

    <link rel="stylesheet" href="./assets/css/main.css">

</head>

<body>
    <?php 
    $inside = true;
    include 'includes/menu.php' 
    ?>
    <article id="article">
        <section id="header">
            <h1 class="h1">Porque la usabilidad no se mide en número de clicks y otros mitos.</h1>
        </section>
        <section id="subheader">
            <span>Vestibulum ante ipsum primis in faucibus orci luctus et ultries pueser cubila curae.</span>
        </section>
        <section id="content">
            <p>
                Al hablar de <strong>usabilidad / UX</strong> se suelen escuchar ciertas pautas que nos ayudan a saber
                que es usable y que no. Por
                ejemplo:
            </p>
            <ul>
                <li>Cuantos menos <i>clicks</i> tenga que hacer el usuario, más usable es nuestra aplicación.</li>
                <li>Los botones deben tener texto, no solo iconos.</li>
                <li>Hay que poner en pantalla el menor número de elementos para no perder al usuario.</li>
                <li>Es mejor utilizar algún framework como Bootstrap o Material, ellos ya lo tienen resuelto.</li>
                <li>Hay que poner <i>breadcrumbs</i> ("migas de pan") para que el usuario siempre sepa donde está.</li>
                <li>Un texto aclarativo modo de ayuda facilita encontrar lo que se busca aunque no se necesite.</li>
            </ul>

            <p>
                Ninguna es falsa, pero ninguna es cierta al mismo tiempo. Son acciones que suelen ayudarnos a ganar
                <strong>usabilidad</strong> en nuestra aplicación aunque hay que vigilar con aplicarlas al 100% de los
                casos.
            </p>

            <p>
                Si solo aplicamos <strong>pautas de usabilidad</strong> más, nos podemos encontrar con <u>ciertas
                    contradicciones</u> que
                haran que consigamos lo contrario a lo que queriamos en un principio. Por ejemplo:
            </p>

            <div class="extended-list">
                <div class="item">
                    <span>
                        Reduzco tanto el numero de clicks que el usuario se pierde
                    </span>
                    <p>
                        Es posible que aunque aumentemos el numero de clicks lo compensemos con creces si la aplicación
                        está bien organizada y las pantallas tengan un y solo un propósito.
                    </p>
                </div>
                <div class="item">
                    <span>
                        Pongo tantos textos aclarativos que lo importante se difumina
                    </span>
                    <p>
                        Hay que diferenciar una aclaración necesaria de una aclaración irrelevante. <u>Cuando todo es
                            relevante, todo se convierte en irrelevante</u>.
                    </p>
                </div>
                <div class="item">
                    <span>
                        Es tan sencillo todo que un usuario experto pierde tiempo en aclaraciones superfluas
                    </span>
                    <p>
                        No solo hay que tener en cuenta al usuario que entra por primera vez, tambié al que utiliza la
                        aplicación a diario, los gestos y atajos de teclado son algunas de las acciones que nos ayudan
                        en este sentido</u>.
                    </p>
                </div>
            </div>

            <p>
                Para evitar caer en estas contradicciones, cuando quiero analizar y tomar una decisión en el proyecto
                que estoy trabajando, me guío por la
                siguiente definición de usabilidad:
            </p>

            <h2 class="h2">La usabilidad se mide por el tiempo que tarda el usuario desde que se le ocurre lo que
                quiere hacer, hasta que termina de hacerlo.
            </h2>
            <p>
                TODO: falta el grafic d'estats
            </p>

            <p>
                Por lo tanto, solo aplicaré según que norma si ella me acerca mas a rebajar a mínimos ese lapso de
                tiempo.

            </p>

            <p>
                En resumen, cuidado con las <strong>"pautas de usabilidad"</strong> hay que aplicarlas cuando las
                necesitemos o
                podemos conseguir justo lo contrario.
            </p>

        </section>
        <section id="footer" class="dark">
            <div class="category featured">
                <span>Categoría:</span> <a href="#">Usabilidad / UX</a>
            </div>
            <div class="tags-list featured type2">
                <span>Etiquetas:</span><br/>
                <a href="#">Usabilidad</a>
            </div>
        </section>

        <section id="comments">
            TODO: comments
        </section>

    </article>

    <script src="assets/js/main.js"></script>
</body>

</html>