<h2 class="tituloTable">EQUIPAMIENTO</h2>
<div class="sectionPersonajes">
    <!-- Aquí hay que hacer un bucle para crear los personajes -->
    <?php
        include 'src/cargarPersonajes.php';

        for ($i = 0; $i < count($arrayObjetosEquipamiento); $i++) {
            echo '<div class="containerPersonajes">
                    <div class="containerPersonajesBox">
                        <div class="row">
                        <div class="image">
                            <a href="#"><img src="' . $arrayObjetosEquipamiento[$i]->imagen . '" width="auto" height="100%"></a>
                        </div>
                        <div class="data">
                            <div class="dataName">
                                <h2>' . $arrayObjetosEquipamiento[$i]->nombre . ' , ' . $arrayObjetosEquipamiento[$i]->calcularEdad() . ' años</h2>
                                <i class="' . $arrayObjetosEquipamiento[$i]->icono . '"></i>
                            </div>
                            <div class="dataTable">
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Largo</p>
                                    </div>
                                    <div class="valor">
                                        <p>' . $arrayObjetosEquipamiento[$i]->dimensionLargo . '</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                <div class="caracteristica">
                                    <p>Ancho</p>
                                </div>
                                <div class="valor">
                                    <p>' . $arrayObjetosEquipamiento[$i]->dimensionAncho . '</p>
                                </div>
                            </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                            <p>Peso</p>
                                    </div>
                                    <div class="valor">
                                        <p>' . $arrayObjetosEquipamiento[$i]->peso . '</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Tipo</p>
                                    </div>
                                    <div class="valor">
                                        <p>' . get_class($arrayObjetosEquipamiento[$i]) . '</p>
                                    </div>
                                </div>';
                                if (get_class($arrayObjetosEquipamiento[$i])  == 'Espada') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Hoja</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->materialHoja . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Mango</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->materialMango . '</p>
                                            </div>
                                          </div>
                                    ';
                                } elseif (get_class($arrayObjetosEquipamiento[$i])  == 'Arco') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Cuerpo</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->materialCuerpo . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Cuerda</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->materialCuerda . '</p>
                                            </div>
                                          </div>
                                    ';
                                } elseif (get_class($arrayObjetosEquipamiento[$i])  == 'Casco') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Material</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->material . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Resistencia</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->resistencia . '</p>
                                            </div>
                                          </div>
                                    ';
                                } elseif (get_class($arrayObjetosEquipamiento[$i])  == 'Hacha') {
                                    echo '<div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Hoja</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->materialHojaH . '</p>
                                            </div>
                                            </div>
                                          <div class="rowPersonajes">
                                            <div class="caracteristica">
                                                <p>Mango</p>
                                            </div>
                                            <div class="valor">
                                                <p>' . $arrayObjetosEquipamiento[$i]->materialMangoH . '</p>
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
                         ' . $arrayObjetosEquipamiento[$i]->descripcion . '
                        </p>
                    </div>
                </div>                
            </div>';
            $arrayObjetosEquipamiento[$i];
        }
    ?>
</div>