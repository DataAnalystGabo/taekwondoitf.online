
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    
    <title>Administrador de noticias</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="../css/root.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="hero container">

        <div class="box">
            <h1 class="box__title">Sistema de carga de noticias</h1>
        </div class="box">

        <form class="form" method="POST" id="form" enctype="multipart/form-data" action="php/admi.php">
            
            <input class="form__input" type="text" name="title" placeholder="Título">

            <input class="form__input" type="text" name="subtitle" placeholder="Subítulo">

            <input class="form__input" type="text" name="author" placeholder="Autor">

            <label class="form__label" for="image_author">Selecciona una imagen para el perfil del autor</label>
            <input class="form__input form__input--file" type="file" name="image_author">
            
            <textarea class="form__input form__input--textarea" name="new" id="" cols="30" rows="40" placeholder="Noticia"></textarea>

            <label class="form__label" for="image_new">Selecciona una imagen para la portada</label>
            <input class="form__input form__input--file" type="file" name="image_new">
        
            <button class="form__btn" type="submit">Enviar</button>
        </form>
    
    </div>

</body>
</html>