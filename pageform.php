<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylePageform.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Infotkd</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>

    <?php require ('layout/header.php') ?>
          
    <main class="main container">
        <section class="section">   
                <form class="form" method="POST" id="pageform">
                    <!-- name="form1" action="../php/form.php" -->
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
                                    <input class="input__texto" type="text" name="escuela" placeholder="Escuela">
                                </div>
            
                                <div class="input">
                                    <input class="input__texto" type="text" name="instructor" placeholder="Instructor (Nombre y Apellido)"> 
                                </div>
            
                                <div class="input">
                                    <input class="input__texto" type="text" name="coach" placeholder="Coach (Nombre y Apellido)">
                                </div>
                        
                                <div class="input">
                                    <input class="input__texto" type="text" name="email" placeholder="E-mail: xxxxxxx@gmail.com">
                                </div>
            
                                <div class="input">
                                    <input class="input__texto" type="tel" name="celular" placeholder="Celular/Whatsapp">
                                </div>

                                <div class="input">
                                    <input class="input__texto" type="text" name="othercamp" placeholder="Othercamp">
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
                                        <input class="input__texto" type="text" name="competidor[]" placeholder="Nombre y Apellido del competidor">
                                    </div>
            
                                    <div class="input">
                                        <input class="input__texto" type="tel" name="dni[]" placeholder="DNI (sin puntos ni comas)">
                                    </div>
                                </div>

                                <div class="selectors">
                                    <p class="selectors--label">Género</p>
                                    <select class="selector" name="genero[]">
                                        <option value=""></option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>  
                                </div>
                
                                <div class="selectors">
                                    <p class="selectors--label">Categoría</p>
                                    <select class="selector" name="categoria[]">
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
                                    <select class="selector" name="edad[]">
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
                                    <select class="selector" name="peso[]">
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

    <div class="modal modal--cover modal--cover--disabled" id="modal--cover">
        <div class="modal__window modal__window--disabled" id="modal__window">
            <div class="modal__picture"></div>
            <p class="modal__message" id="modal__message"></p>
            <!-- <i class="close fa-solid fa-circle-xmark" id="close"></i> -->
            <button class="modal__button" id="modal__button">Aceptar</button>
        </div>
    </div>

    <?php require ('layout/footer.php') ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    <script src="js/contClon.js"></script>
    <script src="js/validatorFormPage.js"></script>

</body>
</html>