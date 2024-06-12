<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.inc");
$id = $_POST ['id'];
$vSql = "SELECT * FROM capitales WHERE id='$id' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
 {
 echo ("Capital Inexistente...!!! <br>");
 echo ("<A href='FormBajaIni.html'>Continuar</A>");
}
else{
$vSql= "DELETE FROM capitales WHERE id = '$id' ";
mysqli_query($link, $vSql);
 echo("La ciudad fue Borrado<br>");
 echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>