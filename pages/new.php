<?php 
include('../php/conexion.php');

if(!isset($_GET['id'])){

    header('location:page404.html');

} else {

    $id = $_GET['id'] ;
    $statementSQL = $con->query("SELECT * FROM noticias WHERE id = '".$id."'");
    $newPrimary   = $statementSQL->fetchAll(PDO::FETCH_ASSOC);
    
}

$newsRelated = $con->query("SELECT * FROM noticias LIMIT 6");
$newsRelated->setFetchMode(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>▷ Taekwondo ITF - Noticia</title>
        <meta name="description" content="Leé noticias, Enterate de los eventos deportivos, 
        Descargá la teoría en pdf, Verificá si un instructor está afederado y mucho más.">
        <meta name="keyword" content="Taekwondo, ITF, Eventos, Cinturon negro, Dobok">
        
        <script defer src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script>
        <script type="module">
            import { menu } from '../js/modules/menu.js';
        </script>
        <script defer src="https://www.googletagmanager.com/gtag/js?id=G-0PWZ0SZ5KK"></script>
        <script defer> 
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-0PWZ0SZ5KK');
        </script>

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/root.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/new.css">
        <link rel="stylesheet" href="../css/footer.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700;1,900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    </head>

<body>

    <?php require ('../layout/header.php'); ?>

    <main class="main">
        <div class="box container">
            <article class="article">
                <header class="article__header">
                    <h2 class="article__title"><?php echo $newPrimary[0]['title']; ?></h2>

                    <div class="article__section">

                        <div class="resumen">
                            <div class="resumen__profile">
                                <img class="resumen__img" src="../admi/images/<?php echo $newPrimary[0]['image_author']; ?>" alt="Imagen sobre el autor del articulo Taekwondo">
                            </div>
                            <span class="resumen__author"><?php echo $newPrimary[0]['author']; ?></span>
                            <i class="resumen__icon fa-solid fa-calendar-days"></i>
                            <time class="resumen__time"><?php echo $newPrimary[0]['publication_date']; ?></time>
                        </div>

                        <div class="article__barshare">
                            <div class="barshare__container barshare__container--facebook" id="barshare__facebook" title="Facebook">
                                <i class="barshare__i fa-brands fa-facebook-f"></i>
                            </div>
                            <div class="barshare__container" id="barshare__twitter" title="Twitter">
                                <i class="barshare__i fa-brands fa-twitter"></i>
                            </div>
                            <div class="barshare__container" id="barshare__telegram" title="Telegram">
                                <i class="barshare__i fa-solid fa-paper-plane"></i>
                            </div>
                            <div class="barshare__container" id="barshare__whatsapp" title="Whatsapp">
                                <i class="barshare__i fa-solid fa-phone"></i>
                            </div>
                            <div class="barshare__container" id="barshare__email" title="E-mail">
                                <i class="barshare__i fa-solid fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="divisor"></div>

                <picture class="article__banner">  
                    <img loading='lazy' class="article__img" 

                    srcset="../admi/images/<?php echo $newPrimary[0]['image_new_mobile'];?> 483w,
                            ../admi/images/<?php echo $newPrimary[0]['image_new'];?>"
                    sizes="(max-width : 500px) 483px"
                    src="../admi/images/<?php echo $newPrimary[0]['image_new_mobile'];?>" alt="<?php echo $newPrimary[0]['title']; ?>">
                </picture>
     
                <div class="article__paragraph">
                    <p> 
                        <?php echo $newPrimary[0]['new']; ?>
                    </p>
                <div/>

                <div class="divisor"></div>
            </article>

            <div class="advertising">
                <h2 class="advertising__title">¡Publicite aquí con nosotros!</h2>
            </div>

            <div class="aside">
                <header class="aside__header">
                    <h2 class="aside__tittle">MÁS NOTICIAS</h2>
                </header>

                <?php foreach ($newsRelated as $r) { ?>
                    <a class="aside__link" href="new.php?id=<?php echo $r['id']; ?>">
                        <div class="aside__relatednews">
                            <div class="relatednews__banner">
                                <img class="relatednews__img" src="../admi/images/<?php echo $r['image_new']; ?>">
                            </div>
                            
                            <h2 class="relatednews__tittle"> <?php echo $r['title']; ?> </h2>
                            <p class="relatednews__p"> <?php echo $r['subtitle']; ?> </p>
                        </div>
                    </a>  
                <?php } ?>
            </div>
        </div>
    </main>


    <?php require ('../layout/footer.php'); ?>

   <!-- <script src="../js/menu.js"></script> -->
    <script src="../js/modules/shareNews.js"></script>
    

</body>
</html>