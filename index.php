
<?php include('php/news.php'); ?>


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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
     
    <?php require ('layout/header.php') ?>

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
                    <button class="actions__btca" onclick="window.location.href='pageform.php'">
                        <span class="actions__label">INSCRIBITE</span>
                        <div class="actions__icon">
                            <i class="actions__i fa-solid fa-arrow-right-long"></i>
                        </div>
                    </button>
                </div>

            </div>        
        </section>

        <section class="articles">

            <?php foreach($query as $q){?>
                <article class="article">
                    <div class="cover">
                        <img class="cover__img" src="image/card1Optimizado.jpg" alt="" loading="lazy">
                    </div>
        
                    <div class="resumen container">
        
                        <header class="resumen__header">

                            <h2 class="resumen__title">

                                <?php 
                                for($i=0; $i<40; $i++)
                                    echo $q['titulo'][$i];
                                    echo '...'; 
                                ?>
                            
                            </h2>

                            <div class="autor">
                                <div class="autor__profile-picture">
                                    <img class="autor__profile-picture__img" src="image/autor1.jfif" alt="Imagen del autor del artículo">
                                </div>
                            
                                <p class="autor__name"><?php echo $q['autor']; ?>
                                    <i class="autor__icon fa-solid fa-calendar-days"></i><time class="date__time" datetime="2022-08-14"><?php echo $q['fecha_publicacion']; ?></time>
                                </p>
                            </div>

                        </header>

                        <div class="resumen__preview">
                            <p class="resumen__preview__p">
                                
                                <?php 
                                for($i = 0; $i < 500; $i++)
                                    echo $q['contenido'][$i];
                                    echo '...';

                                ?>

                            </p>
                        </div>
                        
        
                        <div class="actions">
                            <button class="actions__btca" onclick="window.location.href='pageNews.php'">
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

            <h1 class="bbl__title">BLACK BELT LIST</h1>
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
                            <p class="form__notification__resumen"><strong>El e-mail debe contener :</strong> letras, puntos, arrobas y números.</p>
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

    <?php require ('layout/footer.php') ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    <script src="js/validatorEmail.js"></script>
</body>
</html>