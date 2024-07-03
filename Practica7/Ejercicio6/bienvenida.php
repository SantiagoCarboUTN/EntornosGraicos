<?php
session_start();
if(isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
    echo "Bienvenido " . $nombre;
}else{
    echo "No puedes visitar esta pagina";
}