<?php 

include('conexion.php');

if(!$con){
    die('La conexión ha fallado: ' . mysqli_connect_error());
}


$sql = "SELECT * FROM noticias";
$query = mysqli_query($con, $sql); 

?>