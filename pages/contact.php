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
    <link rel="stylesheet" href="../css/contact.css">
    
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
    <?php require ('../layout/header.php') ?>

    <main class="main">
        <div class="hero container">

            <h1 class="hero__title">Contacto</h1>

            <div class="contact">
                <form class="form" action="" id="form">

                    <div class="form__inputs">
                        <div class="form__box">
                            <input class="form__input" id="form__input--name" type="text" name="name" placeholder=" ">
                            <label class="form__label" for="name">Nombre</label>
                        </div>

                        <div class="alerts alerts--name" id="alerts--name">
                            <i class="alerts__i fa-solid fa-circle-xmark" id="alerts__i--name"></i>
                            <p class="alerts__error" id="alerts__error--name">Sólo se permite letras y espacios</p>
                            <p class="alerts__checked" id="alerts__checked--name">¡Válido!</p>
                        </div>
                    </div>

                    <div class="form__inputs">
                        <div class="form__box">
                            <input class="form__input" id="form__input--email" type="text" name="email" placeholder=" ">
                            <label class="form__label" for="name">Email</label>
                        </div>

                        <div class="alerts alerts--email" id="alerts--email">
                            <i class="alerts__i fa-solid fa-circle-xmark" id="alerts__i--email"></i>
                            <p class="alerts__error" id="alerts__error--email">Formato válido example@email.com</p>
                            <p class="alerts__checked" id="alerts__checked--email">¡Válido!</p>
                        </div>
                    </div>
                    
                    <div class="form__inputs">
                        <div class="form__box">
                            <textarea style="resize : none" class="form__input" id="form__input--message" name="message" placeholder=" "cols="30" rows="10"></textarea>
                            <label class="form__label" for="message">Mensaje</label>
                        </div>     
                    </div>
                    
                    <div class="actions">
                        <button class="actions__btca" id="submit">
                            <span class="actions__label">ENVIAR</span>
                            <div class="actions__icon">
                                <i class="actions__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>

                    <div class="form__alerts" id="box-alerts">
                        <p class="form__alerts__p" id="alert"></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </main>

    <?php require ('../layout/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/contact.js"></script>
</body>
</html>