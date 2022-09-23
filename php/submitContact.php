<?php 

if(isset($_POST)){
    $destinatario = 'support@infotkd.online';
    $name         = $_POST['name'];
    $email        = $_POST['email'];
    $message      = $_POST['message'];
    $asunto       = 'Enviado desde la website infotkd.online';
    $header       = 'Enviado desde la website infotkd.online';
    $messageFull  = $message . '\n Atentamente: ' . $name ;

    mail($destinatario, $header, $asunto, $messageFull, );

    echo '1';
} else {
    echo '2';
}

?>