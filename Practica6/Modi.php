<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$capital = $_POST['capital'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['super'];
$tienemetro = $_POST['tmetro'];
$id =$_POST['Id'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE capitales set capital='$capital', apel_nom='$vUsuario', habitantes='$habitantes', super = '$superficie', tmetro = '$tienemetro' where
dni='$vDNI'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("El Usuario fue Modificado<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>