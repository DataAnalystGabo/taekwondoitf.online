<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>▷ Taekwondo ITF - Envianos un mensaje</title>
    <meta name="description" content="Contactate directamente con el equipo de
    taekwondoitf.online y en la brevedad recibirás una respuesta. No dejes de visitar nuestra
    Home en www.taekwondoitf.online">

    <script async src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script>
    <script type="module">
        import { menu } from '../js/modules/menu.js';
        import { sendContact } from '../js/modules/contact.js'
    </script>

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
</head>


<body>
    <?php require ('../layout/header.php') ?>

    <main class="main">
        <div class="hero">

            <picture class="hero__cover">                    
                <img class="hero__img" 
                    srcset="../image/lyliandoulay40-mobile.webp 500w,
                            ../image/lyliandoulay40.webp 1286w"

                    sizes="(max-width : 500px) 500px
                           (min-width : 501px) 1286px"

                    src="../image/lyliandoulay40-mobile.webp" 
                    alt="Lylian Doulay ejecutando una forma en un Campeonato Mundial de Taekwondo ITF">
            </picture>

            <form class="form container" id="form">
                <span class="form__title">Contacto</span>

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

                <div class="actions" id="btca-submit">
                    <div class="actions__btca">
                        <span class="actions__label">ENVIAR</span>
                        <div class="actions__icon">
                            <i class="actions__i fa-solid fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>

                <div class="form__alerts" id="box-alerts">
                    <p class="form__alert" id="alert"></p>
                </div>
                
            </form>
        </div>
    </main>

    <?php require ('../layout/footer.php') ?>
 
</body>
</html>