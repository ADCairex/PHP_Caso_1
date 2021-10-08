<header>
    <div class="container_header">
        <div class="logo"><a href="index.php"><img src="imagenes/tittleImage.png" onerror="this.src='../imagenes/tittleImage.png';" width="50px" height="50px"></a></div>
        <div class="menu">
        
            <ul>
            
                <li><a href="
                            <?php
                                $x = $_SERVER['SCRIPT_NAME'];
                                $x = explode('/', $x);
                                if (in_array('index.php', $x)) {
                                    echo 'index.php';
                                } else {
                                    echo '../index.php';
                                }
                            ?>
                            ">Inicio</a></li>
                <li><a href="
                            <?php
                                $x = $_SERVER['SCRIPT_NAME'];
                                $x = explode('/', $x);
                                if (in_array('index.php', $x)) {
                                    echo 'templates/preguntasFrecuentes.php';
                                } else {
                                    echo 'preguntasFrecuentes.php';
                                }
                            ?>
                            ">Preguentas Frecuentes</a></li>
                <li><a href="
                            <?php
                                $x = $_SERVER['SCRIPT_NAME'];
                                $x = explode('/', $x);
                                if (in_array('index.php', $x)) {
                                    echo 'templates/login.php';
                                } else {
                                    echo 'login.php';
                                }
                            ?>  
                            ">Cerrar sesion</a></li>
            </ul>
        </div>
    </div>
    
</header>

