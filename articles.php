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
        <section id="articles" class="grey screen-size">
        <h1 class="h1">Articles</h1>
        <div class="article-list">
            <a class="article" href="article.php">
                <div class="header">
                    <img src="assets/img/articles/usabilidad.jpg" alt="Usabilidad UX" />
                </div>
                <div class="content featured type1">
                    <h2 class="h2">Porque la usabilidad no se mide en numero de clicks y otros mitos</h2>
                    <p>
                    Cuando hay que tomar decisiones en torno a la usabilidad o UX de nuestra aplicación es bueno saber como medir este parametro.
                    </p>
                </div>
            </a>
        </div>
        
        <div class="pagination">
            <ul>
                <li>
                    <a href="#" class="prev-page"><<</a>
                </li>
                <li>
                    <a href="#" class="page current">1</a>
                </li>
                <li>
                    <a href="#" class="page">2</a>
                </li>
                <li>
                    <a href="#" class="page">3</a>
                </li>
                <li>        
                    <a href="#" class="next-page">>></a>
                </li>
            </ul>
        </div>
    </section>

    <script src="assets/js/main.js"></script>
</body>

</html>