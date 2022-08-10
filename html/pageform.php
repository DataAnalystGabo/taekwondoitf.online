<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../../infotkd_web_site/css/normalize.css">
    <link rel="stylesheet" href="../../infotkd_web_site/css/stylepageform.css">
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
                <img class="nav__logo__img" src="../../infotkd_web_site/image/infotkd-logo.png" href="../../infotkd_web_site/html/index.html">
            </figure>

            <div class="menu" id="menu">
                <div class="menu__contenedor">
                    <h3 class="menu__titulo">infotkd</h3>
                    <ul class="menu__links">
                        <li class="menu__li">
                            <a href="../../infotkd_web_site/html/index.html" class="menu__a" title="Home">Home<i class="menu__i fa-solid fa-house"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="menu__a" title="Noticias">Noticias<i class="menu__i fa-solid fa-newspaper"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="menu__a" title="Eventos">Eventos<i class="menu__i fa-solid fa-calendar-check"></i></a>
                        </li>
                        
                        <li class="menu__li">
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="menu__a" title="Base de datos">BBL<i class="menu__i fa-solid fa-barcode"></i></a>
                        </li>

                        <li class="menu__li">
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="menu__a" title="Contacto">Contacto<i class="menu__i fa-solid fa-paper-plane"></i></a>
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
                <form class="form" name="form1" action="../../infotkd_web_site/php/form.php" method="POST">
                    <div class="form__titulos">
                        <h1 class="titulo__primario">Torneo Nacional</h1>
                        <h2 class="titulo_secundario">¡Inscribite ya!</h2>
                    </div>

                    <div class="fila1">
                            <div class="fila1__titulos">
                                <h3 class="fila1_titulo_princ">Datos del Coach/Instructor</h3>
                            </div>

                            <div class="fila1__inputs__cont">
                                <div class="fila1__inputs">
                                    <input class="inputs__texto" type="text" name="escuela" id="" placeholder="Escuela" require>
                                </div>
            
                                <div class="fila1__inputs">
                                    <input class="inputs__texto" type="text" name="instructor" id="" placeholder="Instructor (Nombre y Apellido)" require> 
                                </div>
            
                                <div class="fila1__inputs">
                                    <input class="inputs__texto" type="text" name="coach" id="" placeholder="Coach (Nombre y Apellido)" require>
                                </div>
                        
                                <div class="fila1__inputs">
                                    <input class="inputs__texto" type="text" name="email" id="" placeholder="E-mail: xxxxxxx@gmail.com" require>
                                </div>
            
                                <div class="fila1__inputs">
                                    <input class="inputs__texto" type="tel" name="celular" id="" placeholder="Celular/Whatsapp" require>
                                </div>

                                <div class="fila1__inputs">
                                    <input class="inputs__texto" type="text" name="othercamp" id="" placeholder="Othercamp">
                                </div>  
                            </div>

                            
                    </div>
                        
                    <div class="fila2 clonar">

                            <div class="fila2__titulos">
                                <h3 class="fila2__titulo_principal">Datos del competidor </h3>
                                <span class="fila2__puntero puntero--ocultar">Eliminar</span>
                            </div>

                            <div class="fila2__columna">
                
                                <div class="fila2__inputs__cont">
                                    <div class="fila2__inputs">
                                        <input class="inputs__texto" type="text" name="competidor[]" id="" placeholder="Nombre y Apellido del competidor" require>
                                    </div>
            
                                    <div class="fila2__inputs">
                                        <input class="inputs__texto" type="tel" name="dni[]" id="" placeholder="DNI (sin puntos ni comas)" require>
                                    </div>
                                </div>

                                <div class="fila2__selectores">
                                    <p class="fila2__selector_titulo">Género</p>
                                    <select class="fila2__selector" name="genero[]" id="">
                                        <option value=""></option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>  
                                </div>
                
                                <div class="fila2__selectores">
                                    <p class="fila2__selector_titulo">Categoría</p>
                                    <select class="fila2__selector" name="categoria[]" id="">
                                        <option value=""></option>
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
                            
                                <div class="fila2__selectores">
                                <p class="fila2__selector_titulo">Edad</p>
                                    <select class="fila2__selector" name="edad[]" id="inputEdad">
                                        <option value=""></option>
                                        <option value="2-5 años">2 a 5 años</option>
                                        <option value="6-9 años">6 a 9 años</option>
                                        <option value="10-13 años">10 a 13 años</option>
                                        <option value="14-17 años">14 a 17 años</option>
                                        <option value="18-35 años">18 a 35 años</option>
                                        <option value="+35 años">+35 años</option>
                                    </select>                        
                                </div>
                
                                <div class="fila2__selectores">
                                    <p class="fila2__selector_titulo">Peso*</p>
                                    <select class="fila2__selector" name="peso[]" id="">
                                        <option value=""></option>
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
                                <div class="fila2__aclaracion"><p class="aclaracion__p">*Tenga en cuenta que aquellos competidores menores a 13 años
                                    deben elegir la opción 'No Aplica' para su peso.
                                </p></div>
                            </div>
                    </div>

                    <div class="contenedorClonado" id="contenedorClonado"></div>

                    <div class="form__botones">
                        <div class="botones__contenedor">
                            <button class="botones__accion" id="agregar">Agregar competidor</button>
                            <button class="botones__accion" id="enviar" name="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
        </section>
    </main>

    <footer class="footer__cover">
        <div class="footer">
            <div class="footer__cabecera">
                <h2 class="footer__logo">infotkd</h2>
                <div class="footer__iconos">
                    <a href="#" title="Facebook" class="footer__a"><i class="footer__i fa-brands fa-facebook"></i></a>
                    <a href="#"title="Instagram" class="footer__a"><i class="footer__i fa-brands fa-instagram"></i></a>
                    <a href="#" title="Twitter" class="footer__a"><i class="footer__i fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer__conten__links">
                <div class="footer__links">
                    <ul class="footer__menu">
                        <li class="footer__menu__li">Home</li>
                        <li class="footer__menu__li">Contacto</li>   
                    </ul>

                    <ul class="footer__menu">
                        <li class="footer__menu__li">Seguridad</li>
                        <li class="footer__menu__li">Promoción</li>
                    </ul>

                    <ul class="footer__menu">
                        <li class="footer__menu__li">Ayuda</li>
                        <li class="footer__menu__li">Cookies</li>
                    </ul>

                    <ul class="footer__menu">
                        <li class="footer__menu__li">Eventos</li>
                        <li class="footer__menu__li">Terminos</li>
                    </ul>
                </div>
                <div class="footer__copyright__cont">
                    <p class="footer__copyright">&copy; Gonzalo Ramirez - Todos los derechos reservados, bitch.</p>
                </div>
            </div>

            
            
        </div>
    </footer>
    
    <script src="../js/appForm.js"></script>

</body>
</html>