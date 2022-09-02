<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/news.css">

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css"/>
    <link rel="stylesheet" href="css/jssocials-theme-plain.css">

    <title>Infotkd</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>

    <?php require ('layout/header.php'); ?>


    <main class="main container">

        <div class="blog">
            <section class="new">
                <article class="article">
                    <header class="article__header">
                        <h1 class="article__tittle">Nuevas actividades en el estadio de Lanús</h1>

                        <div class="article__section">
                            <time class="article__time" datetime="2014-10-05">12 de Agosto del 2022</time>
                            <div class="article__barshare" id="barshare"></div>
                        </div>

                        <div class="divisor"></div>
                    </header>

                    <div class="article__banner">
                        <img class="banner__img" src="image/card4Optimizado.jpg" alt="Imagen del articulo">
                    </div>
                    <p class="banner__footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vitae adipisci vero nostrum.</p>

                    
                    
                </article>
            </section>


            <section class="aside">

            </section>
        </div>
        

    </main>


    <?php require ('layout/footer.php'); ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/shareNews.js"></script>
    

</body>
</html>