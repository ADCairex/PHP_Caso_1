<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Inicio PHP Caso 1</title>
        <?php
            include 'css/styles.php';
        ?>
    </head>
    <body>
        <?php


            include 'templates/header.php';
            include 'templates/personajes.php';

            $rutaActual = getcwd();
echo $rutaActual;
$rutaActualModificada = $rutaActual.DIRECTORY_SEPARATOR.'src';
 
//sacamos por pantalla la ruta final
echo $rutaActualModificada;


$rutaActual = getcwd();
$rutaActualModificada = str_replace("/", $rutaActual);
 
//sacamos por pantalla la ruta final
echo $rutaActualModificada;
            include 'templates/equipamiento.php';


            include 'templates/footer.php';
            include 'scripts.php';
        ?>
    </body>
</html>