<?php

include('../../php/conexion.php');

if($_POST){

    $title                = (isset($_POST['title']))?$_POST['title']:'';
    $subtitle             = (isset($_POST['subtitle']))?$_POST['subtitle']:'';
    $author               = (isset($_POST['author']))?$_POST['author']:'';
    $imageAuthor          = (isset($_FILES['image_author']['name']))?$_FILES['image_author']['name']:'';
    $new                  = (isset($_POST['new']))?$_POST['new']:'';
    $imageNew             = (isset($_FILES['image_new']['name']))?$_FILES['image_new']['name']:'';

    $fecha                = new DateTime();
    $randomName           = $fecha->getTimestamp();

    $nameImageAuthor      = ($imageAuthor=!'')?$randomName.'_'.$_FILES['image_author']['name']:'image.jpg';
    $nameImageNew         = ($imageNew=!'')?$randomName.'_'.$_FILES['image_new']['name']:'image.jpg';

    $tmpImageAuthor       = $_FILES['image_author']['tmp_name'];
    $tmpImageNew          = $_FILES['image_new']['tmp_name'];

    if($tmpImageAuthor!='' && $tmpImageNew!=''){
        move_uploaded_file($tmpImageAuthor, '../images/'.$nameImageAuthor);
        move_uploaded_file($tmpImageNew, '../images/'.$nameImageNew);
    }

    $insertData = $con->prepare("INSERT INTO noticias (title, subtitle, author, image_author, new, image_new) VALUES (:title, :subtitle, :author, :nameImageAuthor, :new, :nameImageNew)"); 
    $insertData->bindParam(':title', $title);
    $insertData->bindParam(':subtitle', $subtitle);
    $insertData->bindParam(':author', $author);
    $insertData->bindParam(':nameImageAuthor', $nameImageAuthor);
    $insertData->bindParam(':new', $new);
    $insertData->bindParam(':nameImageNew', $nameImageNew);
    $insertData->execute();

    header('location:../index.php');

}

$con = null;
$insertData = null;

?>