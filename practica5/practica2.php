<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");

$destinatario="santiagodavor05@gmail.com";
$asunto="Consultas";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .='From:' .$_POST['email'];

$nom =$_POST['nombre'];
$consulta = $_POST["texto"];

$texto= " \n Nombre: $nom \n
Enviado: $fecha a las $hora\n
Consulta: $consulta \n
\n";

if (mail($destinatario, $asunto, $texto, $headers)) {
    echo 'Su consulta ha sido enviada';
} else {
    echo 'error';
}

