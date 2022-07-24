<?php
$usuario        = "root";
$password       = "";
$servidor       = "localhost";
$basededatos    = "circuitofschool";
$con            = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db             = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

$escuela = $_POST['escuela'];
$instructor = $_POST['instructor'];
$coach = $_POST['coach'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$othercamp = $_POST['othercamp'];
$competidor = $_POST['competidor'];
$dni = $_POST['dni'];
$genero = $_POST['genero'];
$categoria = $_POST['categoria'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$error = '';
$exitoso = '';
$alerta_dni = '';

if(empty($escuela) or empty($instructor) or empty($coach) or empty($email) or empty ($celular)
or empty($competidor) or empty($dni) or empty($genero) or empty($categoria) or empty($edad)
or empty($peso)){

    $error .= '<p>¡Se deben completar todos los campos!</p>';
    require '../../infotkd_web_site/html/pageform.php';

}else{

    for ($i=0; $i < count($competidor); $i++){

        $InserData =("INSERT INTO competidores (escuela, instructor, coach, email, celular, othercamp,
        competidor, dni, genero, categoria, edad, peso) VALUES ('".$escuela."','".$instructor."','".$coach."','".$email."','".$celular."',
        '".$othercamp."','".$competidor[$i]."','".$dni[$i]."','".$genero[$i]."','".$categoria[$i]."','".$edad[$i]."','".$peso[$i]."')");
        
        
        //verificamos que el dni ingresado no haya sido ingresado//
        //creamos la variable que hara la consulta en la base de datos//
        //si el dni se repite, este se omite y se continua con la carga de datos//
        
        $verificador_dni = mysqli_query($con, "SELECT * FROM competidores WHERE dni='".$dni[$i]."' ");
        
        if(mysqli_num_rows($verificador_dni) > 0){   
            $alerta_dni .= '<p>Error: ¡El dni '.$dni[$i].' ya se encuentra registrado! Contáctese a infotkd@gmail.com</p>';
            require '../../infotkd_web_site/html/pageform.php';
            exit();
            mysqli_close($con);
        }else{
            $ejecutar = mysqli_query($con, $InserData);    
        };
    };
     
    if($ejecutar){
        $exitoso .= '<p>¡Todos los datos se han enviado exitosamente!</p>';
        require '../../infotkd_web_site/html/pageform.php';
    };
        
    mysqli_close($con);
};














/*Validación: verificamos que $ejecutar se haya ejecutado y enviado los datos*/
/*if($ejecutar){
    echo '
        <script>
            alert("¡Los datos han sido enviados con éxito!");
            window.location = "../../infotkd_web_site/html/pageform.html";
        </script>
    ';
}else{
    echo '
        <script>
            alert("¡Inténtalo de nuevo, algo ha fallado!");
            window.location = "../../infotkd_web_site/html/pageform.html";
        </script>
    ';
}*/

/*header('Location: ./');*/
?>