<?php 
include('../php/conexion.php');

if(!isset($_GET['id'])){

    header('location:page404.html');

} else {

    $id = $_GET['id'] ;
    $sentencesSQL = ("SELECT * FROM noticias WHERE id = '".$id."'");
    $newPrimarySQL   = mysqli_query($con, $sentencesSQL);
    $newPrimary      = mysqli_fetch_array($newPrimarySQL);
}

$sentencesSQL   = ("SELECT * FROM noticias LIMIT 6");
$relatedNews    = mysqli_query($con, $sentencesSQL);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/new.css">
    
    <title>Infotkd</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
    
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

    <?php require ('../layout/header.php'); ?>

    <main class="main">

        <div class="main__container">
            <article class="article">
                <header class="article__header">
                    <h1 class="article__tittle"><?php echo $newPrimary['title']; ?></h1>

                    <div class="article__section">
                        <time class="article__time" datetime="2014-10-05"><?php echo $newPrimary['publication_date']; ?></time>

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

                <div class="article__banner">
                    <img class="banner__img" src="../admi/images/<?php echo $newPrimary['image_new']; ?>" alt="Imagen del articulo">
                </div>
                <p class="banner__footer"><?php echo $newPrimary['subtitle']; ?></p>
            
                <div class="article__paragraph">
                    <p> <?php echo $newPrimary['new']; ?>
                        <br><br>
                        <strong>Fuente: <?php echo $newPrimary['author']; ?></strong>
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

                <?php foreach ($relatedNews as $r) { ?>
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

    <script src="../js/menu.js"></script>
    <script src="../js/shareNews.js"></script>
    

</body>
</html>