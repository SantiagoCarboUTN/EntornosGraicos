<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <td width="170"><strong>Producto</strong></td>
        <td width="77"><strong>Precio</strong></td>
        <td width = "25"><a href="vercarrito.php?<?php echo SID ?>"
        title="Ver el contenido del carrito"><img src="fotocarrito.png"
        width="25" height="21"></a></td>
    </tr>
    <?php 
    $conexion = mysqli_connect("localhost", "id22398566_santiago27", "Contra123-") or die ("Problemas de
    conexión a la base de datos");
    $vsql ="SELECT id , producto ,precio FROM catalogo";
    $result = $conexion-> query($vsql);
    if($result -> num_rows >0){
        while($row = $result->fetch_assoc()){
            echo "<tr> 
            <td>{$row['producto']}</td>
            <td>Precio: {$row['precio']}</td>
            <td><a href ='agregar.php' id={$row['id']}> Agegar al carrito </a></td>
            </tr>";
        }
    }else{
        echo "El catalogo no se encuentra disponible aun ";
    }
    $conexion -> close();
    ?>
    
    </table>
</body>
</html>