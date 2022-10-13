<?php

include('../../php/conexion.php');

if($_POST){

    $title                = (isset($_POST['title']))?$_POST['title']:'';
    $subtitle             = (isset($_POST['subtitle']))?$_POST['subtitle']:'';
    $author               = (isset($_POST['author']))?$_POST['author']:'';
    $imageAuthor          = (isset($_FILES['image_author']['name']))?$_FILES['image_author']['name']:'';
    $new                  = (isset($_POST['new']))?$_POST['new']:'';
    $imageNew             = (isset($_FILES['image_new']['name']))?$_FILES['image_new']['name']:'';
    $imageNewMobile       = (isset($_FILES['image_new_mobile']))?$_FILES['image_new_mobile']['name']:'';

    $fecha                = new DateTime();
    $randomName           = $fecha->getTimestamp();

    $nameImageAuthor      = ($imageAuthor=!'')?$randomName.'_'.$_FILES['image_author']['name']:'image.jpg';
    $nameImageNew         = ($imageNew=!'')?$randomName.'_'.$_FILES['image_new']['name']:'image.jpg';
    $nameImageNewMobile   = ($imageNewMobile=!'')?$randomName.'_'.$_FILES['image_new_mobile']['name']:'image.jpg';

    $tmpImageAuthor       = $_FILES['image_author']['tmp_name'];
    $tmpImageNew          = $_FILES['image_new']['tmp_name'];
    $tmpImageNewMobile    = $_FILES['image_new_mobile']['tmp_name'];

    if($tmpImageAuthor!='' && $tmpImageNew!=''){
        move_uploaded_file($tmpImageAuthor, '../images/'.$nameImageAuthor);
        move_uploaded_file($tmpImageNew, '../images/'.$nameImageNew);
        move_uploaded_file($tmpImageNewMobile, '../images/'.$nameImageNewMobile);
    }

    $insertData = $con->prepare("INSERT INTO noticias (title, subtitle, author, image_author, new, image_new, image_new_mobile) VALUES (:title, :subtitle, :author, :nameImageAuthor, :new, :nameImageNew, :nameImageNewMobile)"); 
    $insertData->bindParam(':title', $title);
    $insertData->bindParam(':subtitle', $subtitle);
    $insertData->bindParam(':author', $author);
    $insertData->bindParam(':nameImageAuthor', $nameImageAuthor);
    $insertData->bindParam(':new', $new);
    $insertData->bindParam(':nameImageNew', $nameImageNew);
    $insertData->bindParam(':nameImageNewMobile', $nameImageNewMobile);
    $insertData->execute();

    header('location:../index.php');

}

$con = null;
$insertData = null;

?>