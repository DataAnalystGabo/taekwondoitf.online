<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <title>Taekwondo ITF</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
     
</head>



<body>

    <?php require ('../layout/header.php') ?>
          
    <main class="main container">
        <section class="section">   
                <form class="form" method="POST" id="form">
                    <div class="banner__title">
                        <img class="banner__img" src="../image/finlandia2023.webp" alt="Banner Primer Ranqueable al Campeonato Mundial Finlandia 2023">
                    </div>
               
                    <div class="row row--coach">
                            <div class="row__header row__header--coach">
                                <h3 class="row__tittle">Datos del Coach/Instructor</h3>
                            </div>

                            <div class="row__inputs">

                                <div class="input">

                                    <div class="input__box">
                                        <input class="input__text" type="text" name="escuela" placeholder=" " id="input__escuela" >
                                        <label class="input__label" for="escuela" id="input__label--escuela">Escuela</label>
                                    </div>

                                    <div class="input__alerts" id="input__alerts--escuela">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--escuela"></i>
                                        <p class="input__error" id="input__error--escuela">Sólo se permite letras y espacios</p>
                                        <p class="input__checked" id="input__checked--escuela">¡Válido!</p>
                                    </div>  
                                </div>
            
                                <div class="input">
                                    <div class="input__box">
                                        <input class="input__text" type="text" name="instructor" placeholder=" " id="input__instructor" >
                                        <label class="input__label" for="instructor" id="input__label--instructor">Instructor (Nombre y Apellido)</label>
                                    </div>
 
                                    <div class="input__alerts" id="input__alerts--instructor">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--instructor"></i>
                                        <p class="input__error" id="input__error--instructor">Sólo se permite letras y espacios</p>
                                        <p class="input__checked" id="input__checked--instructor">¡Válido!</p>
                                    </div>
                                </div>
            
                                <div class="input">
                                    <div class="input__box">
                                        <input class="input__text" type="text" name="coach" placeholder=" " id="input__coach" >
                                        <label class="input__label" for="coach" id="input__label--coach">Coach (Nombre y Apellido)</label>
                                    </div>

                                    <div class="input__alerts" id="input__alerts--coach">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--coach"></i>
                                        <p class="input__error" id="input__error--coach">Sólo se permite letras y espacios</p>
                                        <p class="input__checked" id="input__checked--coach">¡Válido!</p>
                                    </div>
                                </div>
                        
                                <div class="input">
                                    <div class="input__box">
                                        <input class="input__text" type="text" name="email" placeholder=" " id="input__email" >
                                        <label class="input__label" for="email" id="input__label--email">E-mail: xxxxxxx@gmail.com</label>
                                    </div>

                                    <div class="input__alerts" id="input__alerts--email">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--email"></i>
                                        <p class="input__error" id="input__error--email">Formato permitido: example@correo.com</p>
                                        <p class="input__checked" id="input__checked--email">¡Válido!</p>
                                    </div>
                                </div>
            
                                <div class="input">
                                    <div class="input__box">
                                        <input class="input__text" type="tel" name="celular" placeholder=" " id="input__celular" >
                                        <label class="input__label" for="celular" id="input__label--celular">Celular/Whatsapp</label>
                                    </div>

                                    <div class="input__alerts" id="input__alerts--celular">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--celular"></i>
                                        <p class="input__error" id="input__error--celular">Sólo se permiten números (de 7 a 14 números)</p>
                                        <p class="input__checked" id="input__checked--celular">¡Válido!</p>
                                    </div>
                                </div>

                                <div class="input">
                                    <div class="input__box">
                                        <input class="input__text" type="text" name="othercamp" placeholder=" " id="input__othercamp" >
                                        <label class="input__label" for="othercamp" id="input__label--othercamp">Otro campo</label>
                                    </div>

                                    <div class="input__alerts" id="input__alerts--othercamp">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--othercamp"></i>
                                        <p class="input__error" id="input__error--othercamp">Sólo se permiten números (de 7 a 14 números)</p>
                                        <p class="input__checked" id="input__checked--othercamp">¡Válido!</p>
                                    </div>
                                </div>  
                            </div>

                            
                    </div>
                        
                    <div class="row row--competitor">

                        <div class="row__header row__header--competitor">
                            <h3 class="tittle tittle--competitor">Datos del competidor </h3>
                            <span class="pointer pointer--hidden">Eliminar</span>
                        </div>

                        <div class="row__selectors">
            
                            <div class="inputs inputs--row2">
                                <div class="input">
                                    <div class="input__box">
                                        <input class="input__text" type="text" name="competidor" placeholder=" " id="input__competidor" >
                                        <label class="input__label" for="competidor" id="input__label--competidor">Nombre y Apellido del competidor</label>
                                    </div>

                                    <div class="input__alerts" id="input__alerts--competidor">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--competidor"></i>
                                        <p class="input__error" id="input__error--competidor">Sólo se permite letras y espacios</p>
                                        <p class="input__checked" id="input__checked--competidor">¡Válido!</p>
                                    </div>
                                </div>
        
                                <div class="input">
                                    <div class="input__box">
                                        <input class="input__text" type="tel" name="dni" placeholder=" " id="input__dni" >
                                        <label class="input__label" for="dni" id="input__label--dni">DNI (sin puntos ni comas)</label>
                                    </div>

                                    <div class="input__alerts" id="input__alerts--dni">
                                        <i class="input__i fa-solid fa-circle-xmark" id="input__i--dni"></i>
                                        <p class="input__error" id="input__error--dni">¡Ingrese 7 u 8 números sin puntos!</p>
                                        <p class="input__checked" id="input__checked--dni">¡Válido!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="selectors">
                                <p class="selectors--label">Género</p>
                                <select class="selector" name="genero" id="select__genero">
                                    <option value=""></option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>  
                            </div>
            
                            <div class="selectors">
                                <p class="selectors--label">Categoría</p>
                                <select class="selector" name="categoria" id="select__categoria">
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
                        
                            <div class="selectors">
                            <p class="selectors--label">Edad</p>
                                <select class="selector" name="edad" id="select__edad">
                                    <option value=""></option>
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
                                <select class="selector" name="peso" id="select__peso">
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
                            <div class="aclaration"><p class="aclaration__p">*Aquellos competidores menores a 13 años
                                deben elegir la opción 'No Aplica' para su peso.
                            </p></div>
                        </div>
                    </div>

                    <div class="actions">
                        <button class="actions__btca" id="submit" name="enviar">
                            <span class="actions__label">ENVIAR</span>
                            <div class="actions__icon">
                                <i class="actions__i fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>

                    <div class="messages" id="messages">
                        <p class="messages__p" id="messages__p"></p>
                    </div>

                </form>
        </section>
    </main>

    <?php require ('../layout/footer.php') ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/ranqueableFinlandia2023.js"></script>

</body>
</html>