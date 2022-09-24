<?php

include('../../php/conexion.php');

$title             = (isset($_POST['title']))?$_POST['title']:'';
$subtitle          = (isset($_POST['subtitle']))?$_POST['subtitle']:'';
$author            = (isset($_POST['author']))?$_POST['author']:'';
$author_picture    = (isset($_FILES['author_picture']['name']))?$_FILES['author_picture']['name']:'';
$new               = (isset($_POST['new']))?$_POST['new']:'';
$frontpage_picture = (isset($_FILES['frontpage_picture']['name']))?$_FILES['frontpage_picture']['name']:'';

$insertData = ("INSERT INTO noticias (title, subtitle, author, author_picture, new, frontpage_picture) VALUES ('".$title."', '".$subtitle."', '".$author."', '".$author_picture."', '".$new."', '".$frontpage_picture."')");
$execute    = mysqli_query($con, $insertData);

mysqli_close($con);

?>