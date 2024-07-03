<?php 
if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    setcookie("cooknom",$nombre,time()+ (60* 60 * 24 *90));
}else{
    if(isset($_COOKIE["cooknom"])){
        $nombre= $_COOKIE["cooknom"];
    }
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <?php 
    if(isset($_COOKIE["cooknom"])){
        echo 'Su nombre de usuario es: ' . htmlspecialchars($_COOKIE["cooknom"]);
    }
    
    ?>
</head>
<body>
    <form  action ="formularioINSC.php" method= "post" >
        Ingrese su nuevo nombre de usuario:
        <br>
        

    <input  type="text" placeholder="Ingrese su nombre" name="nombre">
    </form>
</body>
</html>