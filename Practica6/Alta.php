<html>
<head>
<title>Alta Capital</title>
</head>
<body>
<?php
include("conexion.inc");
$capital = $_POST['capital'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['super'];
$tienemetro = $_POST['tmetro'];
$id =$_POST['Id'];
$vSql = "SELECT Count(dni) as canti FROM capitales WHERE id='$Id'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantciudades = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantciudades ['canti']!=0){
 echo ("La ciudad ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO capitales (capital, pais, habitantes, super ,tmetro, id)
values ('$capital','$pais', '$habitantes', '$suprficie', '$tienemetro', '$id')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("La capital fue Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a
nuestra pagina<br>"); echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>