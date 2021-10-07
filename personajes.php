<h2 class="tituloTable">PERSONAJES</h2>
<div class="sectionPersonajes">
    <!-- Aquí hay que hacer un bucle para crear los personajes -->
    <?php
        include 'cargarPersonajes.php';

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
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Rapidez</p>
                                    </div>
                                    <div class="valor">
                                        <p>Muy rápido</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Rapidez</p>
                                    </div>
                                    <div class="valor">
                                        <p>Muy rápido</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Rapidez</p>
                                    </div>
                                    <div class="valor">
                                        <p>Muy rápido</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Rapidez</p>
                                    </div>
                                    <div class="valor">
                                        <p>Muy rápido</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Rapidez</p>
                                    </div>
                                    <div class="valor">
                                        <p>Muy rápido</p>
                                    </div>
                                </div>
                                <div class="rowPersonajes">
                                    <div class="caracteristica">
                                        <p>Rapidez</p>
                                    </div>
                                    <div class="valor">
                                        <p>Muy rápido</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            $arrayObjetosPersonajes[$i];
        }
    ?>

    //<div class="containerPersonajes">        
        //<div class="containerPersonajesBox">
            //<div class="row">
                //<div class="image">
                    //<a href="#"><img src="imagenes/tittleImage.png" width="auto" height="100%"></a>
                //</div>
                //<div class="data">
                    //<div class="dataName">
                    //<h2>Nombre , 37 años</h2>
                    //<i class="fas fa-basketball-ball"></i>
                    //</div>
                    //<div class="dataTable">

                        <!-- Aquí hay que hacer un bucle para crear las características -->
                        //<div class="rowPersonajes">
                            //<div class="caracteristica">
                                //<p>Altura</p>
                            //</div>
                            //<div class="valor">
                                //<p>1.62</p>
                            //</div>
                        </div>
                        <div class="rowPersonajes">
                            <div class="caracteristica">
                                <p>Peso</p>
                            </div>
                            <div class="valor">
                                <p>62</p>
                            </div>
                        </div>
                        <div class="rowPersonajes">
                            <div class="caracteristica">
                                <p>Dureza</p>
                            </div>
                            <div class="valor">
                                <p>5</p>
                            </div>
                        </div>
                        <div class="rowPersonajes">
                            <div class="caracteristica">
                                <p>Rapidez</p>
                            </div>
                            <div class="valor">
                                <p>Muy rápido</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="descripcion"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida massa
                    eu
                    magna varius, ac dignissim metus luctus. Pellentesque vel imperdiet turpis. Mauris venenatis quam
                    sit
                    amet ullamcorper mollis. Nulla facilisi. Donec libero augue, egestas nec eros id, pretium euismod
                    sem.
                    Morbi consequat massa orci, sed facilisis sapien suscipit vitae. Sed finibus nec metus fringilla
                    luctus.
                </p>
            </div>
        </div>
    </div>
</div>