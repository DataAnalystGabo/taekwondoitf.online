
<?php 

include('php/conexion.php');

$statementSQL = $con->query("SELECT * FROM noticias ORDER BY id DESC LIMIT 3");
$statementSQL->setFetchMode(PDO::FETCH_ASSOC);
  
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>▷ Taekwondo ITF - ¡Todo lo que tenés que saber está aquí!</title>
        <meta name="description" content="Leé noticias, Enterate de los eventos deportivos, Descargá teoría en pdf, Verificá si un instructor está afederado y mucho más.">
        <meta name="keyword" content="Taekwondo, ITF, Eventos, Cinturon negro, Dobok">
        
        <script defer src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
        <script type="module" src="js/index.js"></script>
        <script defer src="https://www.googletagmanager.com/gtag/js?id=G-0PWZ0SZ5KK"></script>
        <script defer> 
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-0PWZ0SZ5KK');
        </script>
        
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/root.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/footer.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700;1,900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    </head>

    <body>  
        <header class="header">
            <nav class="nav container">
                <a class="nav__logo" href="index.php">
                    <img loading='lazy' class="nav__img" src="image/taekwondoitfonline.svg" alt="Logotipo de taekwondoitf.online">
                </a>

                <div class="menu" id="menu">
                    <div class="menu__contenedor">
                        <ul class="menu__links">
                            <li class="menu__li">
                                <a href="./index.php" class="menu__a">HOME</a>
                            </li>

                            <li class="menu__li">
                                <a href="pages/news.php" class="menu__a">NOTICIAS</a>
                            </li>

                            <li class="menu__li">
                                <a href="pages/404.html" target="_blank" class="menu__a">EVENTOS</a>
                            </li>

                            <li class="menu__li">
                                <a href="pages/teoria.php" class="menu__a">TEORIA</a>
                            </li>
                            
                            <li class="menu__li">
                                <a href="pages/404.html" target="_blank" class="menu__a">BLACK BELT LIST</a>
                            </li>

                            <li class="menu__li">
                                <a href="pages/contact.php" class="menu__a">CONTACTO</a>
                            </li>
                        </ul>
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

            <section class="prime">
                <picture class="prime__cover">                    
                    <img class="prime__img" 
                        srcset="image/cover-prime-480x1000.webp 480w,
                                image/cover-prime-1200x700.webp 1200w,
                                image/cover-prime-1319x879.webp 1319w"

                        sizes="(max-width : 500px) 480px,
                               (max-width : 1200px) 1200px,
                               (min-width : 1201px) 1319px"

                        src="image/cover-prime-480x1000.webp" 
                        alt="Taekwondista ejecutando una forma en un Campeonato Mundial de Taekwondo">
                </picture>

                <div class="prime__filter"></div>

                <div class="prime__info container">
                    <h1 class="prime__h1">
                        CAMPEONATO NACIONAL DE TAEKWONDO ITF 2023
                    </h1>
                    <div class="prime__spans">
                        <span class="prime__8y9">8 y 9</span>
                        <span class="prime__nov">NOV</span>
                    </div>

                    <div class="actions actions--inscription">
                        <a class="actions__link" href="pages/ranqueableFinlandia2023.php">
                            <div class="actions__btca" >
                                <span class="actions__label">INSCRIPCION</span>
                                <div class="actions__icon actions__icon--inscription">
                                    <i class="actions__i fa-solid fa-arrow-right-long"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="prime__data">
                        <span class="prime__location">
                            <i class="prime__icon fa-solid fa-compass"></i>
                            Microestadio de Los Pasteleros, Monte Grande.
                        </span>

                        <span class="prime__organize">
                            <i class="prime__icon fa-solid fa-gear"></i>
                            Organiza Taekwondoitf.online.
                        </span>

                        <span class="prime__graduations">
                            <i class="prime__icon fa-solid fa-circle-user"></i>
                            Categorías Danes y Gups.
                        </span>

                        <span class="prime__ph">
                            <i class="prime__icon fa-solid fa-camera-retro"></i>
                            Imagen cortesía de Raimon Bjørndalen
                        </span>
                    </div>
                </div>
            </section>

            <div class="articles">

                <?php foreach($statementSQL as $n){?>
                    <article class="article">
                        <picture class="article__cover">  
                            <img loading='lazy' class="article__img" 

                            srcset="admi/images/<?php echo $n['image_new_mobile'];?> 483w,
                                    admi/images/<?php echo $n['image_new'];?>"
                            sizes="(max-width : 500px) 483px"
                            src="admi/images/<?php echo $n['image_new_mobile'];?>" alt="<?php echo $n['title']; ?>">
                        </picture>
            
                        <div class="resumen container">
            
                            <header class="resumen__header">

                                <h2 class="resumen__title"> <?php echo $n['title']; ?> </h2>

                                <div class="resumen__box">
                                    <div class="picture">
                                        <img loading='lazy' class="picture__img" src="admi/images/<?php echo $n['image_author'];?>" alt="Imagen del autor del artículo">
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
                            
                            <div class="actions">
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

            </div>

            <section class="bbl" id="bbl">
                <div class="container">
                    <h2 class="bbl__title">BLACK BELT LIST</h2>
                    <span class="bbl__subtitle">¡Próximamente!</span>
                    
                    <section class="questionfreq">
                    
                        <div class="questionfreq__group">
                            <div class="questionfreq__picture">
                                <img loading='lazy' class="questionfreq__img" src="image/bolt-144x144.webp" alt="Icono 3d de Rayo Dorado">
                            </div>
                            <h3 class="questionfreq__title">¿Qué es BBL?</h3>
                            <p class="questionfreq__resumen"><strong>Black Belt List</strong> (Lista de cinturones negros) es un proyecto
                                que pretende reunir a todos los cinturones negros de la República Argentina
                                en una base de datos abierta a todo el público. 
                            </p>
                        </div>
                    
                        <div class="questionfreq__group">
                            <div class="questionfreq__picture">
                                <img loading='lazy' class="questionfreq__img" src="image/target-144x144.webp" alt="Icono 3d de Blanco con flecha clavada">
                            </div>
                            <h3 class="questionfreq__title">¿Cómo puede ayudarme?</h3>
                            <p class="questionfreq__resumen">Podrás registrarte en <strong>Black Belt List</strong> y 
                                de esta forma, cualquier persona podrá encontrarte en línea y verificar
                                tus credenciales como cinturón negro de Taekwon-do ITF.
                            </p>
                        </div>
                    
                        <div class="questionfreq__group">
                            <div class="questionfreq__picture">
                                <img loading='lazy' class="questionfreq__img" src="image/gift-144x144.webp" alt="Icono 3d de Regalo color rojo">
                            </div>
                            <h3 class="questionfreq__title">¿Cuánto va a costarme?</h3>
                            <p class="questionfreq__resumen">Será <strong>¡totalmente gratis!</strong> Habrán requisitos 
                                que tendrás que cumplir para validar tus documentos pero
                                no te costará nada.
                            </p>
                        </div>    
                    </section>   
                    
                    
                    <form class="form container" id="form">
                        <picture class="form__icon">

                            <img loading='lazy' class="form__img" 
                            srcset="image/calendar-160x160.webp 160w,
                                    image/calendar-240x240.webp 240w"
                            sizes="(max-width : 500px) 160px,
                                  (min-width : 501px) 240px"
                            src="image/calendar-240x240.webp" alt="Icono con forma de calendario con el numero 26 en el centro">

                        </picture>
                    
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
                </div>
            </section>
        </main>

        <footer class="footer">

            <div class="footer__elements container">

                <div class="footer__hero">
                    <a class="footer__logo" href="index.php">
                        <img loading='lazy' class="footer__img" src="image/taekwondoitfonline-grey.svg" alt="Logotipo de taekwondoitf.online">
                    </a>
                    
                    <div class="footer__icons">
                        <a href="#" title="Facebook" class="footer__a"><i class="footer__i fa-brands fa-facebook"></i></a>
                        <a href="#" title="Instagram" class="footer__a"><i class="footer__i fa-brands fa-instagram"></i></a>
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

        <?php $con = null; ?>
        <?php $statementSQL = null; ?>
    </body>
</html>