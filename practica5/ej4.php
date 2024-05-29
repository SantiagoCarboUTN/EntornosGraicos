<?php
    session_start();
?>
<html>
    <body>
        <a href="cantidadvisitas.php"></a>
        <?php
            if (!isset($_SESSION["contador"])){
                $_SESSION["contador"] = 1;
            }
            else{
                $_SESSION["contador"]++;
            } 
            echo "Visitaste un total de " . ($_SESSION["contador"]) . " páginas";
        ?>
        <br>
        <br>
        <a href="cantidadvisitas.php">Otra página</a>
    </body>
</html>