<html>
<head>
<title> Listado completo </title>
</head>
<body>
<?php
include("conexion.inc");
$vSql = "SELECT * FROM capitales";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
<table border=1>
<tr>
<td><b>Ciudad</b></td>
<td><b>Pais</b></td>
<td><b>Habitantes</b></td>
<td><b>Superficie</b></td>
<td><b>Tiene metro?</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
    <td><?php echo ($fila['capital']); ?></td>
    <td><?php echo ($fila['pais']); ?></td>
    <td><?php echo ($fila['habitantes']); ?></td>
    <td><?php echo ($fila['super']); ?></td>
    <td><?php echo ($fila['tmetro']); ?></td>
</tr>
<tr>
    <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
    </td>
</tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="Menu.html">Volver al menu; del ABM</a></p>
</body>
</html>