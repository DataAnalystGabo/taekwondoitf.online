<?php

include('../php/conexion.php');

$statementSQL1    = $con->query("SELECT * FROM noticias LIMIT 1");
$newPrincipal     = $statementSQL1->fetchAll(PDO::FETCH_ASSOC);


$statementSQL2    = $con->query("SELECT * FROM  noticias WHERE id != '".$newPrincipal[0]['id']."' LIMIT 2");
$newsColumn       = $statementSQL2->fetchAll(PDO::FETCH_ASSOC);


$statementSQL3    = $con->query("SELECT * FROM noticias");
$newsRow          = $statementSQL3->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>▷ Taekwondo ITF - ¡Todo lo que tenés que saber está aquí!</title>

    <meta name="description" content="Noticias actualizadas todos los días, si hay una novedad seguro esta aquí.">
    <meta name="keyword" content="taekwondo, taekwondo ITF, que significa taekwondo, axel vargas, aristides palopoli, dobok">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <script defer src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    <script type="module" src="../js/main.js"></script>

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W0SEL162DE"></script>
    <!-- Google tag (gtag.js) -->
</head>

    <body>
        <?php require ('../layout/header.php'); ?>
<!--
        <main class="main">
            <section class="news container">
                <div class="aside">
                    <div class="new-principal">
                        <div class="new">
                            <a  class="new__link" href="new.php?id=<?php echo $newPrincipal[0]['id']; ?>">
                                <article class="article">
        
                                    <h2 class="article__title article__title--principal"> <?php echo $newPrincipal[0]['title']; ?> </h2>
                                    <p class="article__subtitle"> <?php echo $newPrincipal[0]['subtitle']; ?> </p>
        
                                    <div class="summary">
                                        <div class="summary__profile">
                                            <img class="summary__img" src="../admi/images/<?php echo $newPrincipal[0]['image_author']; ?>" alt="">
                                        </div>
                                        <span class="summary__authorname"> <?php echo $newPrincipal[0]['author']; ?> </span>
                                        <i class="summary__icon fa-solid fa-calendar-days"></i>
                                        <span class="summary__date"> <?php echo $newPrincipal[0]['publication_date']; ?> </span>
                                    </div>

                                    <picture class="article__portada article__portada--princ">  
                                        <img loading='lazy' class="article__img" 

                                        srcset="../admi/images/<?php echo $newPrincipal[0]['image_new_mobile'];?> 483w,
                                                ../admi/images/<?php echo $newPrincipal[0]['image_new'];?>"
                                        sizes="(max-width : 500px) 483px"
                                        src="../admi/images/<?php echo $newPrincipal[0]['image_new_mobile'];?>" alt="<?php echo $newPrincipal[0]['title']; ?>">
                                    </picture>
                                </article>
                            </a>
                        </div>
                    </div>
                    
                    <div class="ads">
    
        
                    </div>
        
                    <div class="news-row">
        
                        <?php foreach ($newsRow as $row) { ?>
                            <a class="new__link" href="new.php?id=<?php echo $row['id']; ?>">
                                <div class="new new--row">
                                    <article class="article">
                                        <h2 class="article__title"><?php echo $row['title']; ?></h2>
                                        <p class="article__subtitle article__subtitle--row"><?php echo $row['subtitle']; ?></p>
                                        <div class="article__portada article__portada--row">
                                            <img class="article__img" src="../admi/images/<?php echo $row['image_new']; ?>" alt="Portada de noticia">
                                        </div>
                                    </article>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
            </section>
        </main> -->

        <main class="main">
            <div class="hero container">
                
                <a class="newprimary" href="../pages/404.html">
                    <article class="newprimary__article">
                        <h2 class="newprimary__title"> <?php echo $newPrincipal[0]['title']; ?> </h2>
                        <p class="newprimary__subtitle"> <?php echo $newPrincipal[0]['subtitle']; ?> </p>

                        <div class="newprimary__summary summary">
                            <picture class="summary__author">
                                <img class="summary__img" src="../admi/images/<?php echo $newPrincipal[0]['image_author']; ?>" alt=" <?php echo $newPrincipal[0]['subtitle']; ?> ">
                            </picture>
                            <span class="summary__name"> <?php echo $newPrincipal[0]['author']; ?> </span>
                            <i class="summary__icon fa-solid fa-calendar-days"></i>
                            <span class="summary__date"> <?php echo $newPrincipal[0]['publication_date']; ?> </span>

                            <i class="summary__icon fa-sharp fa-solid fa-camera-retro"></i>
                            
                            <span class="summary__ph">Borkja</span>
                            
                        </div>

                        <picture class="newprimary__cover">  
                            <img class="newprimary__img" 

                            srcset="../admi/images/<?php echo $newPrincipal[0]['image_new_mobile'];?> 483w,
                                    ../admi/images/<?php echo $newPrincipal[0]['image_new'];?>"
                            sizes="(max-width : 500px) 483px"
                            src="../admi/images/<?php echo $newPrincipal[0]['image_new_mobile'];?>" alt="<?php echo $newPrincipal[0]['title']; ?>">
                        </picture>
                    </article>
                </a>
                
                <aside class="aside">
                    <picture class="aside__cover">
                        <img class="aside__img" 
                            src="../image/cabezal-topten.webp" 
                            alt="">
                    </picture>

                    <div class="aside__ads">
                        <span class="aside__span">Ads</span>
                    </div>

                    <div class="aside__info">
                        <span class="aside__description">Cabezal Fight - Top Ten</span>
                        <div class="aside__price">
                            <span class="aside__value">$48.300</span>
                            <div class="aside__shipping">
                                <i class="aside__icon fa-solid fa-truck"></i>
                                <span class="aside__sendfree">Envío gratis</span>
                            </div>
                        </div>
                        
                        <a class="aside__btca" href="">
                            <div class="aside__button button">
                                <i class="button__icon aside__icon--btca fa-solid fa-store"></i>
                                <span class="button__label">Visitar tienda</span>
                            </div>
                        </a>
                    </div>
                    
                </aside>

                <div class="grid">
                    <?php foreach ($newsRow as $row) { ?>
                        <a class="new" href="new.php?id=<?php echo $row['id']; ?>">
                            <article class="new__article">
                                <h2 class="new__title"> <?php echo $row['title']; ?> </h2>
                                <picture class="new__cover">
                                    <img class="new__img" src="../admi/images/<?php echo $row['image_new_mobile']; ?>" alt="<?php echo $row['title']; ?>">
                                </picture>
                            </article>
                        </a>
                    <?php } ?>

            <!--        <a class="new" href="">
                        <article class="new__article">
                            <h2 class="new__title"></h2>
                            <picture class="new__cover">
                                <img class="new__img" src="" alt="">
                            </picture>
                        </article>
                    </a>

                    <a class="new" href="">
                        <article class="new__article">
                            <h2 class="new__title"></h2>
                            <picture class="new__cover">
                                <img class="new__img" src="" alt="">
                            </picture>
                        </article>
                    </a> -->
                </div>
            </div>
        </main>

        <?php require ('../layout/footer.php'); ?>

    </body>
</html>