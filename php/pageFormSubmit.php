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

   // $insertData = ("INSERT INTO competidores (escuela, instructor, coach, email, celular, othercamp,
   // competidor, dni, genero, categoria, edad, peso) VALUES ('".$escuela."', '".$instructor."', '".$coach."',
   // '".$email."', '".$celular."', '".$othercamp."', '".$competidor."', '".$dni."', '".$genero."',
   // '".$categoria."', '".$edad."', '".$peso."')");

   $insertData = $con->prepare("INSERT INTO competidores (escuela, instructor, coach, email, celular, othercamp, competidor,
   dni, genero, categoria, edad, peso) VALUES (:escuela, :instructor, :coach, :email, :celular, :othercamp, :competidor,
   :dni, :genero)");
   $insertData->bindParam(':escuela', $escuela);
   $insertData->bindParam(':instructor', $instructor);
   $insertData->bindParam(':coach', $coach);
   $insertData->bindParam(':email', $email);
   $insertData->bindParam(':celular', $celular);
   $insertData->bindParam(':othercamp', $othercamp);
   $insertData->bindParam(':dni', $dni);
   $insertData->bindParam(':genero', $genero);
   $insertData->bindParam(':categoria', $categoria);
   $insertData->bindParam(':edad', $edad);
   $insertData->bindParam(':peso', $peso);

   $validatorDNI = $con->query("SELECT * FROM competidores WHERE dni ='".$dni."' ");

   if($validatorDNI->fetchColumn() > 0){

        echo 2;

   } else{

    $insertData->execute();
    echo 1;

    $con = null;
    $insertData = null;

   }


   // $validatorDni = mysqli_query($con, " SELECT * FROM competidores WHERE dni='".$dni."' ");

     //   if(mysqli_num_rows($validatorDni) > 0){   

       //     echo '2';

         //   mysqli_close($con);

           // exit();
        //}else{

          //  $ejecutar = mysqli_query($con, $insertData);

            //echo'1';
        //};

    //mysqli_close($con);

    //exit();
}
?>