<?php
$cont_visitas = 0;
if(isset($_COOKIE['visitas'])){
    $cont_visitas = $_COOKIE['visitas']+ 1;
    setcookie('visitas',$cont_visitas,time() + (3600 * 24 *365));

}else{
 $cont_visitas = 1;
 setcookie('visitas',$cont_visitas,time() + (3600 * 24 *365));

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($cont_visitas != 0){
    echo 'Esta es la  ' . $_COOKIE['visitas'] . " vez que visita";
    }else{
    echo 'Esta es su primera vez aqui, felicitaciones!';


    }

    
    ?>
</body>
</html>