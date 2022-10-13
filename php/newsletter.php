<?php
include('conexion.php');

$email = isset($_POST['email'])?$_POST['email']:'';

if(empty($email)){

    echo json_encode('3');

}else{

    $insertData = $con->prepare("INSERT INTO dbemails (email) VALUES (:email)");
    $insertData->bindParam(':email', $email);
    $insertData->execute();
}

if($insertData){

    echo json_encode('1');

}else{
    
    echo json_encode('2');
}

$con = null;
$insertData = null;

?>