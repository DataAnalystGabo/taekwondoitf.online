<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/stylePageform.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Infotkd</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="nav container">

            <figure class="nav__logo">
                <img class="nav__logo__img" src="../image/infotkd-logo.png" href="../html/index.html">
            </figure>

            <div class="menu" id="menu">
                <div class="menu__contenedor">
                    <h3 class="menu__titulo">infotkd</h3>
                    <ul class="menu__links">
                        <li class="menu__li">
                            <a href="../index.html" class="menu__a" title="Home">Home<i class="menu__i fa-solid fa-house"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pageConstruccion.html" class="menu__a" title="Noticias">Noticias<i class="menu__i fa-solid fa-newspaper"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pageConstruccion.html" class="menu__a" title="Eventos">Eventos<i class="menu__i fa-solid fa-calendar-check"></i></a>
                        </li>
                        
                        <li class="menu__li">
                            <a href="pageConstruccion.html" class="menu__a" title="Base de datos">BBL<i class="menu__i fa-solid fa-barcode"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="pageConstruccion.html" class="menu__a" title="Contacto">Contacto<i class="menu__i fa-solid fa-paper-plane"></i></a>
                        </li>
                    </ul>
                    <div class="menu__redes">
                        <a class="menu__redes__link" href="#" title="Facebook"><i class="redes__i fa-brands fa-facebook"></i></a>
                        <a class="menu__redes__link" href="#" title="Instagram"><i class="redes__i fa-brands fa-instagram"></i></a>
                        <a class="menu__redes__link" href="#" title="Twitter"><i class="redes__i fa-brands fa-twitter"></i></a>
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

    <div class="alertas">
        <?php if(!empty($error)): ?>
            <div class="modal" id="cont_modal">
                <div class="modal__ventana">
                    <div class="modal__mensaje">
                        <i class="modal__i fa-solid fa-triangle-exclamation"></i>
                        <?php echo $error; ?>
                    </div>
                    <div class="modal__contenedor__botones"><button class="modal__boton" id="modal__boton">Aceptar</button></div>
                </div>    
            </div>
        <?php endif; ?>

        <?php if(!empty($exitoso)): ?>
            <div class="modal" id="cont_modal">
                <div class="modal__ventana">
                    <div class="modal__mensaje">
                        <i class="modal__i modal__i--exitoso fa-solid fa-circle-check"></i>
                        <?php echo $exitoso; ?>
                    </div>
                    <div class="modal__contenedor__botones"><button class="modal__boton" id="modal__boton">Aceptar</button></div>
                </div>    
            </div>
        <?php endif; ?>
                
        <?php if(!empty($alerta_dni)): ?>
            <div class="modal" id="cont_modal">
                <div class="modal__ventana">
                    <div class="modal__mensaje">
                        <i class="modal__i fa-solid fa-triangle-exclamation"></i>
                        <?php echo $alerta_dni; ?>
                    </div>
                    <div class="modal__contenedor__botones"><button class="modal__boton" id="modal__boton">Aceptar</button></div>
                </div>    
            </div>
        <?php endif; ?>
    </div>

                
    <main class="main container">
        <section class="section">   
                <form class="form" name="form1" action="../php/form.php" method="POST">
                    <div class="form__header">
                        <h1 class="header__tittle header__tittle--primary">Torneo Nacional</h1>
                        <h2 class="header__tittle header__tittle--second">¡Inscribite ya!</h2>
                    </div>

                    <div class="row row--coach">
                            <div class="row__header row__header--coach">
                                <h3 class="row__tittle">Datos del Coach/Instructor</h3>
                            </div>

                            <div class="row__inputs">

                                <div class="input">
                                    <input class="input__texto" type="text" name="escuela" id="" placeholder="Escuela" require>
                                </div>
            
                                <div class="input">
                                    <input class="input__texto" type="text" name="instructor" id="" placeholder="Instructor (Nombre y Apellido)" require> 
                                </div>
            
                                <div class="input">
                                    <input class="input__texto" type="text" name="coach" id="" placeholder="Coach (Nombre y Apellido)" require>
                                </div>
                        
                                <div class="input">
                                    <input class="input__texto" type="text" name="email" id="" placeholder="E-mail: xxxxxxx@gmail.com" require>
                                </div>
            
                                <div class="input">
                                    <input class="input__texto" type="tel" name="celular" id="" placeholder="Celular/Whatsapp" require>
                                </div>

                                <div class="input">
                                    <input class="input__texto" type="text" name="othercamp" id="" placeholder="Othercamp">
                                </div>  
                            </div>

                            
                    </div>
                        
                    <div class="row row--competitor row--toclone">

                            <div class="row__header row__header--competitor">
                                <h3 class="tittle tittle--competitor">Datos del competidor </h3>
                                <span class="pointer pointer--hidden">Eliminar</span>
                            </div>

                            <div class="row__selectors">
                
                                <div class="inputs inputs--row2">
                                    <div class="input">
                                        <input class="input__texto" type="text" name="competidor[]" id="" placeholder="Nombre y Apellido del competidor" require>
                                    </div>
            
                                    <div class="input">
                                        <input class="input__texto" type="tel" name="dni[]" id="" placeholder="DNI (sin puntos ni comas)" require>
                                    </div>
                                </div>

                                <div class="selectors">
                                    <p class="selectors--label">Género</p>
                                    <select class="selector" name="genero[]" id="">
                                        <option value="Seleccione una opción"></option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>  
                                </div>
                
                                <div class="selectors">
                                    <p class="selectors--label">Categoría</p>
                                    <select class="selector" name="categoria[]" id="">
                                        <option value="Seleccione una opción"></option>
                                        <option value="Blanco - Blanco P. Amarilla">Blanco - Blanco P. Amarilla</option>
                                        <option value="Verde - Verde P. Azul">Verde - Verde P. Azul</option>  
                                        <option value="Amarillo - Amarillo P. Verde">Amarillo - Amarillo P. Verde</option>
                                        <option value="Azul - Azul P. Roja">Azul - Azul P. Roja</option>
                                        <option value="Rojo - Rojo P. Negra">Rojo - Rojo P. Negra</option>
                                        <option value="1° Dan">1° Dan</option>
                                        <option value="2° Dan">2° Dan</option>
                                        <option value="3° Dan">3° Dan</option>
                                        <option value="4° Dan">4° Dan</option>
                                        <option value="5° Dan">5° Dan</option>
                                        <option value="6° Dan">6° Dan</option>
                                        <option value="7° Dan">7° Dan</option>
                                        <option value="8° Dan">8° Dan</option>
                                        <option value="9° Dan">9° Dan</option>
                                    </select>
                                </div> 
                            
                                <div class="selectors">
                                <p class="selectors--label">Edad</p>
                                    <select class="selector" name="edad[]" id="inputEdad">
                                        <option value="Seleccione una opción"></option>
                                        <option value="2-5 años">2 a 5 años</option>
                                        <option value="6-9 años">6 a 9 años</option>
                                        <option value="10-13 años">10 a 13 años</option>
                                        <option value="14-17 años">14 a 17 años</option>
                                        <option value="18-35 años">18 a 35 años</option>
                                        <option value="+35 años">+35 años</option>
                                    </select>                        
                                </div>
                
                                <div class="selectors">
                                    <p class="selectors--label">Peso*</p>
                                    <select class="selector" name="peso[]" id="">
                                        <option value="Seleccione una opción"></option>
                                        <option value="hasta 45kg">hasta 45kg</option>
                                        <option value="hasta 50kg">hasta 50kg</option>
                                        <option value="hasta 55kg">hasta 55kg</option>
                                        <option value="hasta 60kg">hasta 60kg</option>
                                        <option value="hasta 70kg">hasta 70kg</option>
                                        <option value="hasta 80kg">hasta 80kg</option>
                                        <option value="+80kg">+ 80kg</option>
                                        <option value="No Aplica">No Aplica</option>
                                    </select>
                                </div> 
                                <div class="aclaration"><p class="aclaration__p">*Aquellos competidores menores a 13 años
                                    deben elegir la opción 'No Aplica' para su peso.
                                </p></div>
                            </div>
                    </div>

                    <div class="containerCloned" id="containerCloned"></div>

                    <div class="form__buttons">
                        <div class="buttons__container">
                            <button class="button" id="add">Agregar competidor</button>
                            <button class="button" id="submit" name="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__contenedor">

            <div class="footer__box footer__box--cabecera">
                <h2 class="footer__logo">infotkd</h2>
                <div class="footer__iconos">
                    <a href="#" title="Facebook" class="footer__a"><i class="footer__i fa-brands fa-facebook"></i></a>
                    <a href="#"title="Instagram" class="footer__a"><i class="footer__i fa-brands fa-instagram"></i></a>
                    <a href="#" title="Twitter" class="footer__a"><i class="footer__i fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <div class="footer__box footer__box--links">
                <ul class="footer__menu">
                    <li class="footer__menu__li"><a class="footer__menu__a" href="../index.html">Home</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Contacto</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Seguridad</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Promoción</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Ayuda</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Cookies</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Eventos</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Terminos</a></li>
                    <li class="footer__menu__li"><a class="footer__menu__a" href="pageConstruccion.html" target="_blank">Servicios</a></li>
                </ul>
            </div>  
            
            <div class="footer__box footer__box--copy">
                <p class="footer__copyright">&copy; Gonzalo Ramirez - Todos los derechos reservados, bitch.</p>
            </div>
        </div>
    </footer>
    
    <script src="../js/menu.js"></script>
    <script src="../js/ventanaModal.js"></script>
    <script src="../js/contClon.js"></script>

</body>
</html>