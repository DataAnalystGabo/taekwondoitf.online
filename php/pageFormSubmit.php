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
        };

    mysqli_close($con);

    exit();
}
?>