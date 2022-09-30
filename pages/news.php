<?php

include('../php/conexion.php');

$sentencesSQL    = ("SELECT * FROM noticias LIMIT 1");
$newPrincipalSQL = mysqli_query($con, $sentencesSQL);
$newPrincipal    = mysqli_fetch_array($newPrincipalSQL);

$sentencesSQL    = ("SELECT * FROM  noticias WHERE id != '".$newPrincipal['id']."' LIMIT 2");
$newsColumn      = mysqli_query($con, $sentencesSQL);

$sentencesSQL    = ("SELECT * FROM noticias");
$newsRow         = mysqli_query($con, $sentencesSQL);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/news.css">
    
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

    <section class="news container">

        <div class="aside">

            <div class="new-principal">
                <div class="new">
                    <a  class="new__link">
                        <article class="article">
                            <h2 class="article__title"> <?php echo $newPrincipal['title']; ?> </h2>
                            <p class="article__resum"> <?php echo $newPrincipal['subtitle']; ?> </p>
                            <div class="article__portada">
                                <img class="article__img" src="../admi/images/<?php echo $newPrincipal['image_new']; ?>" alt="Portada de noticia">
                            </div>
                        </article>
                    </a>
                </div>
            </div>
            
            <div class="news-column">

                <?php foreach ($newsColumn as $col) {?>
                    <div class="new">
                        <a class="new__link" href="new.php?id=<?php echo $col['id']; ?>">
                            <article class="article">
                                <h2 class="article__title"> <?php echo $col['title']; ?> </h2>
                                <p class="article__resum article__resum--column"> <?php echo $col['subtitle']; ?> </p>
                                <div class="article__portada">
                                    <img class="article__img" src="../admi/images/<?php echo $col['image_new']; ?>" alt="Portada de noticia">
                                </div>
                            </article>
                        </a>
                    </div>
                <?php  } ?>

            </div>

            <div class="news-row">

                <?php foreach ($newsRow as $row) { ?>
                    <a class="new__link" href="new.php?id=<?php echo $row['id']; ?>">
                        <div class="new new--row">
                            <article class="article">
                                <h2 class="article__title"><?php echo $row['title']; ?></h2>
                                <p class="article__resum article__resum--row"><?php echo $row['subtitle']; ?></p>
                                <div class="article__portada article__portada--row">
                                    <img class="article__img" src="../admi/images/<?php echo $row['image_new']; ?>" alt="Portada de noticia">
                                </div>
                            </article>
                        </div>
                    </a>
                <?php } ?>

            </div>
    </section>

    <?php require ('../layout/footer.php'); ?>
    <script src="../js/menu.js"></script>
</body>
</html>