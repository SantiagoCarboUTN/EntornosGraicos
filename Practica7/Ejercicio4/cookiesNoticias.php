<?php
if(isset($_POST['noticia'])){
    $tiponoticia= $_POST['noticia'];
    setcookie('tiponoticia',$tiponoticia,time()+ (60 *60 * 24));
}
header("Location: periodico.php");