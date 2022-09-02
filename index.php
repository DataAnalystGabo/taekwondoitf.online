<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Infotkd - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
     
    <?php require ('layout/header.php') ?>

    <main class="main">

        <section class="section section--banner">
            <div class="banner container">

                <div class="banner__titulos">
                    <h1 class="banner__h1"><span class="banner__span1">CAMPEONATO MUNDIAL</span><br/>
                                                                FINLANDIA 2023 <br/>
                                                                <span class="banner__span2">1° RANQUEABLE</span></h1>
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
                    <button class="action__btca" onclick="window.location.href='pageform.php'">
                        <span class="action__label">INSCRIBITE</span>
                        <div class="action__icon">
                            <i class="action__i fa-solid fa-arrow-right-long"></i>
                        </div>
                    </button>
                </div>

            </div>

            
        </section>

        <div class="articles articles--container">
            <article class="article">
                <div class="portada">
                    <img class="portada__img" src="image/card1Optimizado.jpg" alt="" loading="lazy">
                </div>
    
                <div class="resumen container">
    
                    <header class="encabezado">
                        <h2 class="encabezado__titulo">Nuevas actividades en el estadio de Lanús</h2>

                        <div class="data">
                            <div class="data__autor">
                                <img class="data__fotoperfil" src="image/autor1.jfif" alt="Imagen del autor del artículo">
                            </div>
                           
                            <p class="data__nombre">Marcos Galp 
                                <i class="data__i fa-solid fa-calendar-days"></i><time class="date__time" datetime="2022-08-14">12 de Agosto del 2022</time>
                            </p>
                        </div>
                    </header>
        
                    <p class="resumen__p">La Federación Internacional de Taekwon-do logró concensuar un
                        acuerdo con el municipio de la localidad de Lanús para impartir clases de dicho arte marcial,
                        en el polideportivo de Lanús ubicado en Somellera 345.
                        El instructor a cargo será Jorge Bagglieto, cituron negro 5° Dan...
                    </p>
    
                    <div class="actions">
                        <button class="action__btca" onclick="window.location.href='news.php'">
                            <span class="action__label">Leer más</span>
                            <div class="action__icon">
                                <i class="action__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </article>

            <article class="article">
                <div class="portada">
                    <img class="portada__img" src="image/card2Optimizado.jpg" alt="" loading="lazy">
                </div>
    
                <div class="resumen container">
    
                    <header class="encabezado">
                        <h2 class="encabezado__titulo">La neurociencia y el Taekwon-do</h2>

                        <div class="data">
                            <div class="data__autor">
                                <img class="data__fotoperfil" src="image/autor2.jfif" alt="Imagen del autor del artículo">
                            </div>
                           
                            <p class="data__nombre">Ricardo López
                                <i class="data__i fa-solid fa-calendar-days"></i><time class="date__time" datetime="2022-08-14">12 de Agosto del 2022</time>
                            </p>
                        </div>
                    </header>
        
                    <p class="resumen__p">Cada vez se recurre más a las neurociencias dentro 
                        del proceso de educación y enseñanza de los alumnos, sin importar la materia 
                        que corresponda. Esa es una decisión muy acertada, por cuanto, al ser el cerebro 
                        (con sus funciones corticales) el órgano encargado de controlar todo el...</p>
    
                    <div class="actions">
                        <button class="action__btca" onclick="window.location.href='news.php'">
                            <span class="action__label">Leer más</span>
                            <div class="action__icon">
                                <i class="action__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </article>

            <article class="article">
                <div class="portada">
                    <img class="portada__img" src="image/card3Optimizado.jpg" alt="" loading="lazy">
                </div>
    
                <div class="resumen container">
    
                    <header class="encabezado">
                        <h2 class="encabezado__titulo">Torneo Nacional | Mar del Plata 2023</h2>

                        <div class="data">
                            <div class="data__autor">
                                <img class="data__fotoperfil" src="image/autor3.jfif" alt="Imagen del autor del artículo">
                            </div>
                           
                            <p class="data__nombre">Julio López
                                <i class="data__i fa-solid fa-calendar-days"></i><time class="date__time" datetime="2022-08-14">14 de Agosto del 2022</time>
                            </p>
                        </div>
                    </header>
        
                    <p class="resumen__p">Este domingo se realizará el tercer y último Selectivo Nacional de 
                        Taekwondo ITF clasificatorio al Mundial Netherlands 2022. Desde las 19 en el canal público 
                        de deportes. El Tercer Selectivo Nacional de Taekwondo ITF clasificatorio al Mundial Netherlands 
                        2022 se desarrollará el próximo domingo 10 de abril y se podrá ver a través de la pantalla y...
                    </p>
    
                    <div class="actions">
                        <button class="action__btca" onclick="window.location.href='news.php'">
                            <span class="action__label">Leer más</span>
                            <div class="action__icon">
                                <i class="action__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </article>
        </div>

        <hr class="divisor"/>

        <section class="bbl container">
            <div class="bbl__banner">
                <img class="bbl__banner__img" src="image/card3Optimizado.jpg" alt="Imagen banner de la seccion BBL">
            </div>

            <h3 class="bbl__h3">¡Próximamente BBL!</h3>

            <section class="questionfreq">

                <div class="questionfreq__cont">
                    <h2 class="questionfreq__h2">¿Qué es BBL?</h2>
                    <p class="questionfreq__p"><strong>Black Belt List</strong> (Lista de cinturones negros) es un proyecto
                        que pretende reunir a todos los cinturones negros de la República Argentina
                        en una base de datos abierta a todo el público. 
                    </p>
                </div>

                <div class="questionfreq__cont">
                    <h2 class="questionfreq__h2">¿Cómo puede ayudarme BBL?</h2>
                    <p class="questionfreq__p">Podrás registrarte en <strong>Black Belt List</strong> y 
                        de esta forma, cualquier persona podrá encontrarte en línea y verificar
                        tus credenciales como cinturón negro de Taekwon-do ITF.
                    </p>
                </div>
            
                <div class="questionfreq__cont">
                    <h2 class="questionfreq__h2">¿Cuánto va a costarme?</h2>
                    <p class="questionfreq__p">Será <strong>¡totalmente gratis!</strong> Habrán requisitos 
                        que tendrás que cumplir para validar tus documentos pero
                        no te costará nada.
                    </p>
                </div>
                
            </section>                    
            
            <form class="form">
                <div class="form__cont">

                    <picture class="calendar">
                        <img class="calendar__img" src="image/calendarOptimizado.png" alt="Imagen de calendario sección BBL">
                    </picture>
                    
                    <div class="form__group">
                        <h2 for="email" class="form__tittle">¡Subscribite a las novedades de BBL!</h2>
                        <p class="form__p">Te estaremos avisando sobre la fecha de lanzamiento de <strong>Black Belt List.</strong></p>
                        <div class="form__group--input">
                            <input type="email" class="form__input" name="email" id="form__input" placeholder="ejemplo@gmail.com">
                            <i class="form__i fa-solid fa-circle-xmark" id="form__i"></i>
                        </div>

                        <div class="notification" id="notification">
                            <p class="notification__p"><strong>El e-mail debe contener :</strong> letras, puntos, arrobas y números.</p>
                        </div>

                        <div class="alert" id="alert"><strong></strong></div>
                        <div class="confirmation" id="confirmation"><strong></strong></div>

                        <button class="action__btca action__btca--form" id="submit">
                            <span class="action__label action__label--form">Subscribirme</span>
                            <div class="action__icon">
                                <i class="action__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>    
                </div>

        </section>
    </main>

    <?php require ('layout/footer.php') ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    <script src="js/validatorEmail.js"></script>
</body>
</html>