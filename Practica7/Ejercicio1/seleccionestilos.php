<?php
if(isset($_POST["estilos"])){
    $estilo = $_POST["estilos"];
    setcookie("cookestilo",$estilo,time() + (60 * 60 *24 *90));
}else{
   if(isset($_COOKIE["cookestilo"])){
    $estilo = $_COOKIE["cookestilo"];
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if(isset($estilo)){
        echo ' <link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css"  ';
    } 
    ?>
</head>
<body>
    <form action="seleccionaestilos.php" method="post">
        Selecciona el estilo de la pagina:
        <br>
        <select name = "estilos">
            <option value="rojo"> Rojo
            <option value="verde"> Verde
            <option value="azul"> Azul
        </select>
        <input type="submit" value ="Cambiar">
    </form>
</body>
</html>