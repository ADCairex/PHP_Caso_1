<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Inicio PHP Caso 1</title>
        <link rel="stylesheet" href="css/styleIndex.css">
    </head>
    <body>
        <div class="header">
            <div class="iconTittle">
                <div>
                    <img src="imagenes/tittleImage.png" width="50px" height="50px">
                </div>
                <div>
                    <h1 class="headerTittle">Pagina de inicio de PHP Caso 1</h1>
                </div>
            </div>
            <div class="navDiv">
                <ul class="nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="preguntasFrecuentes.php">Preguentas Frecuentes</a></li>
                    <li><a href="login.php">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
                include 'cargarPersonajes.php';
                echo '<table>';
                    foreach ($personajesJson as $i) {
                        echo '<tr>';
                            foreach ($i as $j) {
                                echo '<td>';
                                    echo $j . ' ';
                                echo '</td>';
                            }
                        echo '</tr>';
                    }
                echo '</table>';
            ?>
        </div>
    </body>
</html>