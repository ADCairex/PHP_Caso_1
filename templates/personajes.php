<h2 class="tituloTable">PERSONAJES</h2>
<div class="sectionPersonajes">
    <!-- Aquí hay que hacer un bucle para crear los personajes -->
    <?php
        include 'src/cargarPersonajes.php';

        for ($i = 0; $i < count($arrayObjetosPersonajes); $i++) {
            echo '<div class="containerPersonajes">
                    <div class="containerPersonajesBox">
                        <div class="row">
                        <div class="image">
                            <a href="#"><img src="' . $arrayObjetosPersonajes[$i]->imagen . '" width="auto" height="100%"></a>
                        </div>
                        <div class="data">
                            <div class="dataName">
                                <h2>' . $arrayObjetosPersonajes[$i]->nombre . ' , ' . $arrayObjetosPersonajes[$i]->calcularEdad() . ' años</h2>
                                <i class="' . $arrayObjetosPersonajes[$i]->icono . '"></i>
                            </div>
                            <div class="dataTable">
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Altura</p>
                                    </div>
                                    <div class="valor">
                                        <p>' . $arrayObjetosPersonajes[$i]->altura . '</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                            <p>Peso</p>
                                    </div>
                                    <div class="valor">
                                        <p>' . $arrayObjetosPersonajes[$i]->peso . '</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Tipo</p>
                                    </div>
                                    <div class="valor">
                                        <p>' . get_class($arrayObjetosPersonajes[$i]) . '</p>
                                    </div>
                                </div>';
                                if (get_class($arrayObjetosPersonajes[$i])  == 'Hombre') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Raza</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->raza . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Familia</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->familia . '</p>
                                            </div>
                                          </div>
                                    ';
                                } elseif (get_class($arrayObjetosPersonajes[$i])  == 'Elfo') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Orejas</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->orejas . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Clan</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->clan . '</p>
                                            </div>
                                          </div>
                                    ';
                                } elseif (get_class($arrayObjetosPersonajes[$i])  == 'Enano') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Barba</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->barba . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Herrero</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->herrero . '</p>
                                            </div>
                                          </div>
                                    ';
                                } elseif (get_class($arrayObjetosPersonajes[$i])  == 'Orco') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Colmillos</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->colmillos . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Raza</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosPersonajes[$i]->raza . '</p>
                                            </div>
                                          </div>
                                    ';
                                }
                            echo '
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p class="descripcion"> 
                         ' . $arrayObjetosPersonajes[$i]->descripcion . '
                        </p>
                    </div>
                </div>                
            </div>';
            $arrayObjetosPersonajes[$i];
        }
    ?>
</div>