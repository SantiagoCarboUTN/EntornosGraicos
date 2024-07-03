<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conexion = mysqli_connect("localhost", "id22398566_santiago27", "Santi123-") or die ("Problemas de
conexion a la base de datos");
$cancion = $_POST['cancion'];
$vsql="SELECT canciones FROM buscador WHERE canciones LIKE '%".$cancion."%'";
$result = $conexion->query($vsql);
$contResult = 0;
if($result->num_rows > 0){
    echo "<tr>";
    while ($row = $result->fetch_assoc()) {
        $contResult += 1;
        echo "
        <td>{$contresult})</td>
        <td>{$row['canciones']}</td>";
    }
    echo "</tr>";
}else{
    echo "No se ha encontrado la cancion";
}
$conexion->close();
?>





</body>
</html>