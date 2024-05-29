<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$texto = $_POST["comentarios"];
$destinatario = $_POST["email"];
$asunto = $_POST["asunto"];
$headers = "MIME-version: 1.0\r\n";
$headers.="Content-type: text/html; charset=utf-8\r\n";
$headers.='From:santiagodavor05@gmail.com';

if(mail($destinatario,$asunto,$texto,$headers)){
    echo $_POST["nombre"]; 
    echo ", su correo ha sido enviado a $destinatario";
}else{
    echo "error";
}