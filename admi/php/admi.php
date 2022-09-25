<?php

include('../../php/conexion.php');

if($_POST){

    $title                = (isset($_POST['title']))?$_POST['title']:'';
    $subtitle             = (isset($_POST['subtitle']))?$_POST['subtitle']:'';
    $author               = (isset($_POST['author']))?$_POST['author']:'';
    $ImageAuthor          = (isset($_FILES['image_author']['name']))?$_FILES['image_author']['name']:'';
    $new                  = (isset($_POST['new']))?$_POST['new']:'';
    $ImageNew             = (isset($_FILES['image_new']['name']))?$_FILES['image_new']['name']:'';

    $fecha                = new DateTime();
    $random               = $fecha->getTimestamp();

    $nameImageAuthor      = $random.'_'.$_FILES['image_author']['name'];
    $nameImageNew         = $random.'_'.$_FILES['image_new']['name'];

    $tmpImageAuthor       = $_FILES['image_author']['tmp_name'];
    $tmpImageNew          = $_FILES['image_new']['tmp_name'];

    move_uploaded_file($tmpImageAuthor, '../images/'.$nameImageAuthor);
    move_uploaded_file($tmpImageNew, '../images/'.$nameImageNew);

    $insertData = ("INSERT INTO noticias (title, subtitle, author, image_author, new, image_new) VALUES ('".$title."', '".$subtitle."', '".$author."', '".$nameImageAuthor."', '".$new."', '".$nameImageNew."')");
    $execute    = mysqli_query($con, $insertData);
    mysqli_close($con);

    header('location:../index.php');

}



?>