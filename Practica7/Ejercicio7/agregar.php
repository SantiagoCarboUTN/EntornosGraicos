<?php
session_start();
if(isset($_GET['id'])){
    $Id = $_GET['id'];
    $_SESSION['carrito'] = $Id;
    echo "Se ha agregado el producto ";
}