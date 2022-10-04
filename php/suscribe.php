<?php
include('conexion.php');

$email = isset($_POST['email'])?$_POST['email']:'';

if(empty($email)){

    echo '3';

}else{

    $insertData = $con->prepare("INSERT INTO dbemails (email) VALUES (:email)");
    $insertData->bindParam(':email', $email);
    $insertData->execute();
}

if($insertData->execute()){

    echo '1';

}else{
    
    echo '2';
}

$con = null;
$insertData = null;

?>