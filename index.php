
<?php include('php/news.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>Infotkd - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
     
    <header class="header">
        <nav class="nav container">
            <figure class="nav__logo">
                <img class="nav__logo__img" src="image/infotkd-logo.png" alt="Logotipo de infotkd.online">
            </figure>

            <div class="menu" id="menu">
                <div class="menu__contenedor">
                    <h3 class="menu__titulo">infotkd</h3>
                    <ul class="menu__links">
                        <li class="menu__li">
                            <a href="./index.php" class="menu__a">Home<i class="menu__i fa-solid fa-house"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pages/pageSectionNews.php" class="menu__a">Noticias<i class="menu__i fa-solid fa-newspaper"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pages/page404.html" target="_blank" class="menu__a">Eventos<i class="menu__i fa-solid fa-calendar-check"></i></a>
                        </li>
                        
                        <li class="menu__li">
                            <a href="pages/page404.html" target="_blank" class="menu__a">BBL<i class="menu__i fa-solid fa-barcode"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pages/pageContact.php" class="menu__a">Contacto<i class="menu__i fa-solid fa-paper-plane"></i></a>
                        </li>
                    </ul>
                    <div class="menu__redes">
                        <a class="menu__redes__link" href="#" title="Facebook"><i class="menu__redes__i fa-brands fa-facebook"></i></a>
                        <a class="menu__redes__link" href="#" title="Instagram"><i class="menu__redes__i fa-brands fa-instagram"></i></a>
                        <a class="menu__redes__link" href="#" title="Twitter"><i class="menu__redes__i fa-brands fa-twitter"></i></a>
                    </div>
                </div> 
            </div>  

            <div class="menu__hamb" id="menu__hamb">
                <span class="menu__hamb--line" id="line--top"></span>
                <span class="menu__hamb--line" id="line--middle"></span>
                <span class="menu__hamb--line" id="line--bottom"></span>
            </div>
            
        </nav>
    </header>

    <main class="main">

        <section class="front-page">
            <div class="banner container">

                <div class="banner__title">
                   <img class="banner__img" src="image/finlandia2023Optimizado.png" alt="Banner Primer Ranqueable al Campeonato Mundial Finlandia 2023">
                </div>

                <div class="sponsors">
                    <h3 class="sponsors__h3">AUSPICIA</h3>
                    <div class="sponsors__logos">
                        <div class="sponsor__logo sponsor__logo--1"></div>
                        <div class="sponsor__logo sponsor__logo--2"></div>
                        <div class="sponsor__logo sponsor__logo--3"></div>
                    </div>
                </div>

               
                <div class="actions actions--inscription">
                    <button class="actions__btca" onclick="window.location.href='pages/pageForm.php'">
                        <span class="actions__label">INSCRIBITE</span>
                        <div class="actions__icon">
                            <i class="actions__i fa-solid fa-arrow-right-long"></i>
                        </div>
                    </button>
                </div>

            </div>        
        </section>

        <div class="article__box container">
            <h1 class="articles__title"><strong>Taekwondo ITF</strong> - Noticias</h1>
        </div>

        <section class="articles">

            <?php foreach($news as $n){?>
                <article class="article">
                    <div class="cover">
                        <img class="cover__img" src="image/card1Optimizado.jpg" alt="" loading="lazy">
                    </div>
        
                    <div class="resumen container">
        
                        <header class="resumen__header">

                            <h2 class="resumen__title">

                                <?php 
                                for($i=0; $i<40; $i++)
                                    echo $n['title'][$i];
                                    echo '...'; 
                                ?>
                            
                            </h2>

                            <div class="hashtags">
                                <p class="hashtag">#Taekwondo</p>
                                <p class="hashtag">#Niños</p>
                                <p class="hashtag">#ITF</p>
                                <p class="hashtag">#Beneficios</p>
                                <p class="hashtag">#Cinturones</p>
                            </div>

                            <div class="resumen__box">
                                <div class="picture">
                                    <img class="picture__img" src="image/autor1.jfif" alt="Imagen del autor del artículo">
                                </div>
                            
                                <div class="data">
                                    <p class="data__name"><?php echo $n['author']; ?></p>
                                    <i class="data__icon fa-solid fa-calendar-days"></i>
                                    <time class="data__datetime" datetime="2022-08-14">2022-08-14</time>
                                </div>
                            </div>

                        </header>

                        <div class="resumen__preview">
                            <p class="resumen__preview__p">
                                
                                <?php 
                                for($i = 0; $i < 500; $i++)
                                    echo $n['new'][$i];
                                    echo '...';

                                ?>

                            </p>
                        </div>
                        
        
                        <div class="actions">
                            <button class="actions__btca" onclick="window.location.href='pageNew.php'">
                                <span class="actions__label">Leer más</span>
                                <div class="actions__icon">
                                    <i class="actions__i fa-solid fa-arrow-right-long"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </article>
            <?php }?>

        </section>

        <hr class="divisor"/>

        <section class="bbl container" id="bbl">

            <h2 class="bbl__title">BLACK BELT LIST</h2>
            <h3 class="bbl__subtitle">¡Próximamente!</h3>

            <section class="questionfreq">

                <div class="questionfreq__group">
                    <div class="questionfreq__picture">
                        <img class="questionfreq__picture__img" src="image/boltOptimizado.png" alt="Icono 3d de Rayo Dorado">
                    </div>
                    <h2 class="questionfreq__title">¿Qué es BBL?</h2>
                    <p class="questionfreq__resumen"><strong>Black Belt List</strong> (Lista de cinturones negros) es un proyecto
                        que pretende reunir a todos los cinturones negros de la República Argentina
                        en una base de datos abierta a todo el público. 
                    </p>
                </div>

                <div class="questionfreq__group">
                    <div class="questionfreq__picture">
                        <img class="questionfreq__picture__img" src="image/targetOptimizado.png" alt="Icono 3d de Blanco con flecha clavada">
                    </div>
                    <h2 class="questionfreq__title">¿Cómo puede ayudarme BBL?</h2>
                    <p class="questionfreq__resumen">Podrás registrarte en <strong>Black Belt List</strong> y 
                        de esta forma, cualquier persona podrá encontrarte en línea y verificar
                        tus credenciales como cinturón negro de Taekwon-do ITF.
                    </p>
                </div>
            
                <div class="questionfreq__group">
                    <div class="questionfreq__picture">
                        <img class="questionfreq__picture__img" src="image/presentOptimizado.png" alt="Icono 3d de Regalo color rojo">
                    </div>
                    <h2 class="questionfreq__title">¿Cuánto va a costarme?</h2>
                    <p class="questionfreq__resumen">Será <strong>¡totalmente gratis!</strong> Habrán requisitos 
                        que tendrás que cumplir para validar tus documentos pero
                        no te costará nada.
                    </p>
                </div>    
            </section>                    
            
            <form class="form">
                <div class="form__group">

                    <div class="form__icon">
                        <img class="form__icon__img" src="image/calendarOptimizado.png" alt="Icono 3d de Calendario">
                    </div>
                    
                    <div class="form__area">
                        <h3 class="form__title">¡Subscribite a las novedades de BBL!</h3>
                        <p class="form__resumen">Te estaremos avisando sobre la fecha de lanzamiento de <strong>Black Belt List.</strong></p>

                        <div class="form__inputs form__input--group">
                            <input type="email" class="form__input" name="email" id="form__input" placeholder="ejemplo@gmail.com">
                            <i class="form__i fa-solid fa-circle-xmark" id="form__i"></i>
                        </div>

                        <div class="form__notification" id="form__notification">
                            <p class="form__notification__resumen"><strong>Formato inválido </strong>(example@email.com)</p>
                        </div>

                        <div class="form__confirmation" id="form__confirmation"><strong></strong></div>

                        <button class="actions__btca actions__btca--form" id="form__submit">
                            <span class="actions__label actions__label--form">Subscribirme</span>
                            <div class="actions__icon">
                                <i class="actions__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>
                </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__contenedor">

            <div class="footer__box footer__box--cabecera">
                <h2 class="footer__logo">infotkd</h2>
                <div class="footer__iconos">
                    <a href="#" title="Facebook" class="footer__a"><i class="footer__i fa-brands fa-facebook"></i></a>
                    <a href="#"title="Instagram" class="footer__a"><i class="footer__i fa-brands fa-instagram"></i></a>
                    <a href="#" title="Twitter" class="footer__a"><i class="footer__i fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <div class="footer__box footer__box--links">
                <ul class="footer__menu">
                    <li class="footer__menu__li"><a class="footer__menu__a" href="index.php">Home</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Contacto</a></li> 
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Seguridad</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Promoción</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Ayuda</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Cookies</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Eventos</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Terminos</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pages/page404.html" target="_blank">Servicios</a></li>
                </ul>
            </div>  
            
            <div class="footer__box footer__box--copy">
                <p class="footer__copyright">&copy; Gonzalo Ramirez - Todos los derechos reservados, bitch.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    <script src="js/validatorEmail.js"></script>
</body>
</html>