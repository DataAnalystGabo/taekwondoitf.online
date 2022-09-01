<?php 

include('conexion.php');

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


if(empty($escuela) or empty($instructor) or empty($coach) or empty($email) or empty ($celular)
or empty($competidor) or empty($dni) or empty($genero) or empty($categoria) or empty($edad)
or empty($peso)){

    echo '1';

}else{

    for ($i=0; $i < count($competidor); $i++){

        $insertData =("INSERT INTO competidores (escuela, instructor, coach, email, celular, othercamp,
        competidor, dni, genero, categoria, edad, peso) VALUES ('".$escuela."','".$instructor."','".$coach."','".$email."','".$celular."',
        '".$othercamp."','".$competidor[$i]."','".$dni[$i]."','".$genero[$i]."','".$categoria[$i]."','".$edad[$i]."','".$peso[$i]."')");
        
        
        //verificamos que el dni ingresado no haya sido ingresado//
        //creamos la variable que hara la consulta en la base de datos//
        //si el dni se repite, este se omite y se continua con la carga de datos//
        
        $verificador_dni = mysqli_query($con, "SELECT * FROM competidores WHERE dni='".$dni[$i]."' ");
        
        if(mysqli_num_rows($verificador_dni) > 0){   

            echo '2';

        }else{
            $ejecutar = mysqli_query($con, $insertData);    

            echo '3';
        };
    };
};
    
mysqli_close($con);


?>