<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Carles Hervera Website</title>
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500|Roboto+Condensed:300,400,700|Roboto:300,400,400i,500"
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
        <section id="header-img" style="background-image: url(assets/img/articles/usabilidad.jpg);"></section>
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
                haran que consigamos lo contrario a lo que queriamos en un principio. Algunos ejemplos:
            </p>

            <div class="extended-list">
                <div class="item">
                    <span>
                        Reduzco tanto el numero de clicks que el usuario se pierde
                    </span>
                    <p>
                        Es posible que aunque aumentemos el numero de clicks lo compensemos con creces si la aplicación
                        está bien organizada y las pantallas tienen un y solo un propósito.
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
                        No solo hay que tener en cuenta al usuario que entra por primera vez, también al que utiliza la
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
                Por lo tanto, solo aplicaré según que norma de usabilidad si ella me acerca mas a rebajar a mínimos ese lapso de
                tiempo.
            </p>

            <p>
                En resumen, cuidado con las <strong>"pautas de usabilidad"</strong> hay que aplicarlas cuando las
                necesitemos o
                podemos conseguir justo lo contrario.
            </p>

            <div class="fotoby">
                <span>Fotografía de portada de:</span>
                <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@medbadrc?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Med Badr  Chemmaoui"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Med Badr  Chemmaoui</span></a>
            </div>

        </section>
        <section id="footer" class="dark">
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