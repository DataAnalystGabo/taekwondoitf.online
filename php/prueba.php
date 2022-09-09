<?php 

include('conexion.php');

$escuela    = '';
$instructor = '';
$coach      = '';
$email      = '';
$celular    = '';
$othercamp  = '';
$competidor = '';
$dni        = '';
$genero     = '';
$categoria  = '';
$edad       = '';
$peso       = '';


if($_POST){
    $escuela    = (isset($_POST['escuela']))?$_POST['escuela']:'';
    $instructor = (isset($_POST['instructor']))?$_POST['instructor']:'';
    $coach      = (isset($_POST['coach']))?$_POST['coach']:'';
    $email      = (isset($_POST['email']))?$_POST['email']:'';
    $celular    = (isset($_POST['celular']))?$_POST['celular']:'';
    $othercamp  = (isset($_POST['othercamp']))?$_POST['othercamp']:'';
    $competidor = (isset($_POST['competidor']))?$_POST['competidor']:'';
    $dni        = (isset($_POST['dni']))?$_POST['dni']:'';
    $genero     = (isset($_POST['genero']))?$_POST['genero']:'';
    $categoria  = (isset($_POST['categoria']))?$_POST['categoria']:'';
    $edad       = (isset($_POST['edad']))?$_POST['edad']:'';
    $peso       = (isset($_POST['peso']))?$_POST['peso']:'';

    $insertData = ("INSERT INTO competidores (escuela, instructor, coach, email, celular, othercamp,
    competidor, dni, genero, categoria, edad, peso) VALUES ('".$escuela."', '".$instructor."', '".$coach."',
    '".$email."', '".$celular."', '".$othercamp."', '".$competidor."', '".$dni."', '".$genero."',
    '".$categoria."', '".$edad."', '".$peso."')");

    $validatorDni = mysqli_query($con, " SELECT * FROM competidores WHERE dni='".$dni."' ");

        if(mysqli_num_rows($validatorDni) > 0){   

            echo '2';

            mysqli_close($con);

            exit();
        }else{

            $ejecutar = mysqli_query($con, $insertData);

            echo'1';
        }

    mysqli_close($con);

    exit();
    
    
    /*else(mysqli_num_rows($validatorDni) === 0){

        $ejecutar = mysqli_query($con, $insertData)

       //mysqli_close($con);

        //echo '1';

       //exit();

    };else{

        echo '3';

        mysqli_close($con);

        exit();
    }; */
};


/*
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
    
mysqli_close($con); */

?>