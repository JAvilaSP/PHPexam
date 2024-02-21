<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "secreto.php";
require 'vendor/autoload.php';


$mail = new PHPMailer(true);
// CAMBIAR AQUI EL CORREO A ENVIAR


try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = HOST_PROFE;                
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = CORREO_PROFE;                 
    $mail->Password   = CONTRA_PROFE;                         
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 587;                                    

    $mail->setFrom(CORREO_PROFE);
    $mail->addAddress(CORREO);     

    $mail->Subject = 'Examen de PHP';
    $mail->Body    = 'Lo siento pero has <h4>SUSPENDIDO</h4> <br>
                      <a href="localhost/lastexam/?email='.CORREO.'">Haga click en este enlace para VOTAR </a>';
    $mail->AltBody = 'Si ves esto me debes un 10 profe >:(';

    $mail->send();
    echo 'Correo enviado épicamente';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}