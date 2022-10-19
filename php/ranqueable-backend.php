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

   $validatorDNI = $con->query("SELECT * FROM competidores WHERE dni ='".$dni."' ");

   if($validatorDNI->fetchColumn() > 0){

        echo json_encode(2);

   } else{

   $insertData = $con->prepare("INSERT INTO competidores (escuela, instructor, coach, email, celular, othercamp, competidor,
   dni, genero, categoria, edad, peso) VALUES (:escuela, :instructor, :coach, :email, :celular, :othercamp, :competidor,
   :dni, :genero, :categoria, :edad, :peso)");
   $insertData->bindParam(':escuela', $escuela);
   $insertData->bindParam(':instructor', $instructor);
   $insertData->bindParam(':coach', $coach);
   $insertData->bindParam(':email', $email);
   $insertData->bindParam(':celular', $celular);
   $insertData->bindParam(':competidor', $competidor);
   $insertData->bindParam(':othercamp', $othercamp);
   $insertData->bindParam(':dni', $dni);
   $insertData->bindParam(':genero', $genero);
   $insertData->bindParam(':categoria', $categoria);
   $insertData->bindParam(':edad', $edad);
   $insertData->bindParam(':peso', $peso);

   if($insertData->execute()){
    echo json_encode(1);
   }

    $con = null;
    $insertData = null;

  }

}
?>