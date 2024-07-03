<?php
session_start();
$conexion=mysqli_connect("localhost", "id22398566_santiago27", "Password123-") or die ("Problemas de
conexion a la base de datos");

if(isset($_POST['mail'])){
    $mail= $_POST['mail'];
    $sql="SELECT nombre FROM alumnos WHERE mail ='$mail'";
    $result = $conexion->query($sql);
    if($result->num_rows > 0 ){
        $row =$result->fetch_assoc();
        $_SESSION['nombre'] = $row['nombre'];
        header("Location: bienvenida.php");
    }else{
        echo "Mail inexistente";
    }
}
$conexion ->close();