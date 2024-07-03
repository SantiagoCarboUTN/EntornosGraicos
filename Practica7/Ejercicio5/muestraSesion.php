<?php
session_start();

if(isset($_SESSION['nombreUsuario']) && isset($_SESSION['contraUsuario'])){
    $nombre = $_SESSION['nombreUsuario'] ;
    $contra = $_SESSION['contraUsuario'] ;

    echo 'Nombre almacenado en la sesion: ' . $nombre . '<br>';
    echo 'Contaseña almacenada en la sesion: ' . $contra;
    

}
