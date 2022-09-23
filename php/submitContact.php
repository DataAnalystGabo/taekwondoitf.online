<?php 

if(isset($_POST)){
    $destinatario = 'gonzaloramirez.sagitario@gmail.com';
    $name         = $_POST['name'];
    $email        = $_POST['email'];
    $message      = $_POST['message'];
    $asunto       = 'Contacto de infotkd.online';
    $header       = 'Enviado desde la website infotkd.online';
    $messageFull  = $message . '\nAtentamente: ' . $name ;

    mail($destinatario, $messageFull, $header);

    echo '1';
} else {
    echo '2';
}

?>