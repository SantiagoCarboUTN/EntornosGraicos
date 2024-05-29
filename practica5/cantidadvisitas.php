<?php
    session_start();
?>
<html>
    <body>
        <a href="ej4.php"></a>
        <?php
            echo "Visitaste un total de " . ($_SESSION["contador"]) . " páginas";
        ?>
        <br>
        <br>
        <a href="ej4.php">Otra página</a>
    </body>
</html>