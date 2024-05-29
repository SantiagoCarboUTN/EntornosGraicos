<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Nombre = $_POST['Nombre'];
        $Email = $_POST['Email'];
        $nombreAmigo = $_POST['nombreAmigo'];
        $emailAmigo = $_POST['emailAmigo'];
        $mensaje = $_POST['mensaje'];
        $asunto = "Recomendación sitio web";
        $mensajeEmail = "Tu amigo $Nombre te 
        recomienda visitar este sitio web: https://sitiorecomendable.000webhostapp.com/;
        $mensaje\n";
        $headers ="From: $Email";

        if (mail($emailAmigo, $asunto, $mensajeEmail, $headers)) {
            echo "El correo ha sido enviado con éxito a $emailAmigo";
        } else {
             echo "error ";
        }
        }
    