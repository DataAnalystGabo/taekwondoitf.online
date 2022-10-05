
<?php 

include('php/conexion.php');

$statementSQL = $con->query("SELECT * FROM noticias ORDER BY id DESC LIMIT 3");
$statementSQL->setFetchMode(PDO::FETCH_ASSOC);
  
?>

<strong></strong>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 

    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    

    <title>Taekwondo ITF</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W0SEL162DE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-W0SEL162DE');
    </script>
</head>


<body>  
    <header class="header">
        <nav class="nav container">
            <a class="nav__logo" href="index.php">
                <img class="nav__img" src="image/taekwondoitfonline.webp" alt="Logotipo de taekwondoitf.online">
            </a>

            <div class="menu" id="menu">
                <div class="menu__contenedor">
                    <h3 class="menu__titulo">infotkd</h3>
                    <ul class="menu__links">
                        <li class="menu__li">
                            <a href="./index.php" class="menu__a">Home<i class="menu__i fa-solid fa-house"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pages/news.php" class="menu__a">Noticias<i class="menu__i fa-solid fa-newspaper"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pages/404.html" target="_blank" class="menu__a">Eventos<i class="menu__i fa-solid fa-calendar-check"></i></a>
                        </li>
                        
                        <li class="menu__li">
                            <a href="pages/404.html" target="_blank" class="menu__a">BBL<i class="menu__i fa-solid fa-barcode"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pages/contact.php" class="menu__a">Contacto<i class="menu__i fa-solid fa-paper-plane"></i></a>
                        </li>
                    </ul>
                    <div class="redes">
                        <a class="redes__link" href="#" title="Facebook"><i class="redes__i fa-brands fa-facebook"></i></a>
                        <a class="redes__link" href="#" title="Instagram"><i class="redes__i fa-brands fa-instagram"></i></a>
                        <a class="redes__link" href="#" title="Twitter"><i class="redes__i fa-brands fa-twitter"></i></a>
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
            <div class="banner">

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
                    <a class="actions__link" href="pages/form.php">
                        <div class="actions__btca" >
                            <span class="actions__label">INSCRIPCION</span>
                            <div class="actions__icon actions__icon--inscription">
                                <i class="actions__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </div>
                    </a>
                </div>

            </div>        
        </section>


        <h1 class="title">NOTICIAS TAEKWONDO ITF</h1> <!-- Posicionar keywords con SEO -->


        <section class="articles">

            <?php foreach($statementSQL as $n){?>
                <article class="article">

                    <div class="cover">
                        <img class="cover__img" src="admi/images/<?php echo $n['image_new'];?>" alt="<?php echo $n['title']; ?>" loading="lazy">
                    </div>
        
                    <div class="resumen container">
        
                        <header class="resumen__header">

                            <h2 class="resumen__title"> <?php echo $n['title']; ?> </h2>

                            <ul class="hashtags">
                                <li class="hashtag">#Taekwondo</li>
                                <li class="hashtag">#Niños</li>
                                <li class="hashtag">#ITF</li>
                                <li class="hashtag">#Beneficios</li>
                                <li class="hashtag">#Cinturones</li>
                            </ul>

                            <div class="resumen__box">
                                <div class="picture">
                                    <img class="picture__img" src="admi/images/<?php echo $n['image_author'];?>" alt="Imagen del autor del artículo">
                                </div>
                            
                                <div class="data">
                                    <p class="data__name"><?php echo $n['author']; ?></p>
                                    <i class="data__icon fa-solid fa-calendar-days"></i>
                                    <time class="data__datetime"><?php echo $n['publication_date']; ?></time>
                                </div>
                            </div>

                        </header>

                        <div class="resumen__preview">
                            <p class="resumen__p"> <?php echo $n['new']; ?> </p>
                        </div>
                        
                        <div class="actions actions--readmore">
                            <a class="actions__link" href="pages/new.php?id=<?php echo $n['id']; ?>">
                                <div class="actions__btca" >
                                    <span class="actions__label actions__label--readmore">LEER MAS</span>
                                    <div class="actions__icon actions__icon--readmore">
                                        <i class="actions__i fa-solid fa-arrow-right-long"></i>
                                    </div>
                                </div>
                            </a>
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
                        <img class="questionfreq__img" src="image/boltOptimizado.png" alt="Icono 3d de Rayo Dorado">
                    </div>
                    <h2 class="questionfreq__title">¿Qué es BBL?</h2>
                    <p class="questionfreq__resumen"><strong>Black Belt List</strong> (Lista de cinturones negros) es un proyecto
                        que pretende reunir a todos los cinturones negros de la República Argentina
                        en una base de datos abierta a todo el público. 
                    </p>
                </div>

                <div class="questionfreq__group">
                    <div class="questionfreq__picture">
                        <img class="questionfreq__img" src="image/targetOptimizado.png" alt="Icono 3d de Blanco con flecha clavada">
                    </div>
                    <h2 class="questionfreq__title">¿Cómo puede ayudarme BBL?</h2>
                    <p class="questionfreq__resumen">Podrás registrarte en <strong>Black Belt List</strong> y 
                        de esta forma, cualquier persona podrá encontrarte en línea y verificar
                        tus credenciales como cinturón negro de Taekwon-do ITF.
                    </p>
                </div>
            
                <div class="questionfreq__group">
                    <div class="questionfreq__picture">
                        <img class="questionfreq__img" src="image/presentOptimizado.png" alt="Icono 3d de Regalo color rojo">
                    </div>
                    <h2 class="questionfreq__title">¿Cuánto va a costarme?</h2>
                    <p class="questionfreq__resumen">Será <strong>¡totalmente gratis!</strong> Habrán requisitos 
                        que tendrás que cumplir para validar tus documentos pero
                        no te costará nada.
                    </p>
                </div>    
            </section>   
            

            <form class="form container">
                <div class="form__icon">
                    <img class="form__img" src="image/calendarOptimizado.png" alt="Icono 3d de Calendario">
                </div>

                <div class="form__group">
                    <h3 class="form__title">¡Subscribite a las novedades de Black Belt List!</h3>
                    <span class="form__resum">Te estaremos avisando sobre la fecha de lanzamiento</span>
                    
                    <div class="form__inputs form__input--group">
                        <input type="email" class="form__input" name="email" id="form__input" placeholder="example@gmail.com">
                        <i class="form__i fa-solid fa-circle-xmark" id="form__i"></i>
                    </div>
                        
                    <span class="alert alert--error">
                        <strong class="alert__strong">
                            El formato válido de e-mail es: example@email.com
                        </strong>
                    </span>

                    <span class="alert alert--check">
                        <strong class="alert__strong">
                            ¡E-mail válido!
                        </strong>
                    </span>

                    <span class="alert alert--notification">
                    </span>

                    <div class="form__notification" id="notification"><strong></strong></div>

                    <div class="actions actions--bbl">
                        <a class="actions__link" id="submit">
                            <div class="actions__btca">
                                <span class="actions__label actions__label--bbl">ENVIAR</span>
                                <div class="actions__icon actions__icon--bbl">
                                    <i class="actions__i fa-solid fa-arrow-right-long"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </form>
        </section>
    </main>

    <footer class="footer">

        <div class="footer__elements container">

            <div class="footer__hero">
                <a class="footer__logo" href="index.php">
                    <img class="footer__img" src="image/taekwondoitfonline-grey.webp" alt="Logotipo de taekwondoitf.online">
                </a>
                
                <div class="footer__icons">
                    <a href="#" title="Facebook" class="footer__a"><i class="footer__i fa-brands fa-facebook"></i></a>
                    <a href="#"title="Instagram" class="footer__a"><i class="footer__i fa-brands fa-instagram"></i></a>
                    <a href="#" title="Twitter" class="footer__a"><i class="footer__i fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <div class="links">
                <ul class="links__ul">
                    <li class="links__li"><a class="links__a" href="index.php">Home</a></li>
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Contacto</a></li> 
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Seguridad</a></li>
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Promoción</a></li>
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Ayuda</a></li>
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Cookies</a></li>
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Eventos</a></li>
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Terminos</a></li>
                    <li class="links__li"><a class="links__a" href="pages/404.html" target="_blank">Servicios</a></li>
                </ul>
            </div>  
            
            <div class="copyright">
                <span class="copyright__span">&copy; Gonzalo Ramirez - Todos los derechos reservados, bitch.</span>
            </div>
        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    <script src="js/validatorEmail.js"></script>
</body>

<?php $con = null; ?>
<?php $statementSQL = null; ?>

</html>