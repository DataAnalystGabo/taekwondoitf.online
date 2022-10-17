<?php 

if(isset($_POST)){
    $destinatario = 'gonzaloramirez.sagitario@gmail.com';
    $name         = $_POST['name'];
    $email        = $_POST['email'];
    $message      = $_POST['message'];
    $asunto       = 'Enviado desde la website taekwondoitf.online';
    $header       = 'Taekwondoitf.online';
    $messageFull  = $message . '\n Atentamente: ' . $name ;

    mail($destinatario, $header, $asunto, $messageFull);

    echo json_encode('1');
} else {
    echo json_encode('2');
}

?>