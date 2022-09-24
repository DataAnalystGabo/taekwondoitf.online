<?php 

include('conexion.php');

if(!$con){
    die('La conexión ha fallado: ' . mysqli_connect_error());
}


$sentencesSQL = ("SELECT * FROM noticias LIMIT 3");
$news= mysqli_query($con, $sentencesSQL);
?>