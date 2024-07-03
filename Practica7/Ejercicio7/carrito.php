<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h3> Carrito </h3>
    <table>
    <tr>
        <td width="170"><strong>Producto</strong></td>
        <td width="77"><strong>Precio</strong></td>
        <td width="77"><strong>Subtotal</strong></td>
    </tr>
    <?php 
    $precioTotal= 0;
    $conex = mysqli_connect("localhost", "id22398566_santiago27", "Contra123-") or die ("Problemas de
    conexión a la base de datos");
    $productos_carr = $_SESSION['carrito'];
    foreach($productos_carr as $id){
        $vsql="SELECT producto, precio FROM catalogo WHERE id = $id";
        $result= $conex->query($vsql);
        if ($result->num_rows>0 ){
            $row= $result->fetch_assoc();
            $precioTotal += $row['precio'];
            echo "<tr>
            <td>{$row['producto']} </td>
            <td>$ {$row['precio']} </td>
            <td>$ $precioTotal</td>
            </tr>";
            
        }
    }$conn ->close();
    ?>
    </table>
    <?php 
     echo "El total a pagar  es: $". $precioTotal;
    ?>
    </body>
    </html>