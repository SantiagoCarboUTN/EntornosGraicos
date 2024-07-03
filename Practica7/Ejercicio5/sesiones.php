<?php
session_start();
if(isset($_POST['Nombre']) && isset($_POST['Contra'])){
    $nombre = $_POST['Nombre'];
    $contra = $_POST['Contra'];
    $_SESSION['nombreUsuario'] = $nombre;
    $_SESSION['contraUsuario'] = $contra;
    header("Location: muestraSesion.php");


}
