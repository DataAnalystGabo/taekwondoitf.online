<?php 

include('conexion.php');

$escuela    = $_POST['escuela'];
$instructor = $_POST['instructor'];
$coach      = $_POST['coach'];
$email      = $_POST['email'];
$celular    = $_POST['celular'];
$othercamp  = $_POST['othercamp'];
$competidor = $_POST['competidor'];
$dni        = $_POST['dni'];
$genero     = $_POST['genero'];
$categoria  = $_POST['categoria'];
$edad       = $_POST['edad'];
$peso       = $_POST['peso'];


if(empty($escuela) 
|| empty($instructor) 
|| empty($coach) 
|| empty($email) 
|| empty($celular) 
|| empty($othercamp)
|| empty($competidor) 
|| empty($dni) 
|| empty($genero) 
|| empty($categoria) 
|| empty($edad)
|| empty($peso)){

    echo '1';

}else{

    for ($i=0; $i < count($competidor); $i++){

        $insertData = ("INSERT INTO competidores (escuela, instructor, coach, email, celular, othercamp,
        competidor, dni, genero, categoria, edad, peso) VALUES ('".$escuela."','".$instructor."','".$coach."','".$email."','".$celular."',
        '".$othercamp."','".$competidor[$i]."','".$dni[$i]."','".$genero[$i]."','".$categoria[$i]."','".$edad[$i]."','".$peso[$i]."')");
        
        
        //verificamos que el dni ingresado no haya sido ingresado//
        //creamos la variable que hara la consulta en la base de datos//
        //si el dni se repite, este se omite y se continua con la carga de datos//
        
        $verificador_dni = mysqli_query($con, "SELECT * FROM competidores WHERE dni='".$dni[$i]."' ");
        
        if(mysqli_num_rows($verificador_dni) > 0){   

            echo '2';

            mysqli_close($con);

            exit();

        }else{
            $ejecutar = mysqli_query($con, $insertData);    
        };
    };

    if($ejecutar){
        echo '3';
    }else{
        echo 'error';
    }
};
    
mysqli_close($con);

?>