<?php

    class Personaje {
        public $id;
        public $nombre;
        public $dni;
        public $edad;
        public $altura;
        public $peso;
        public $imagen;
        public $icono;
        public $descripcion;

        function calcularEdad() {
            
        }
    }

    class Orco extends Personaje {
        public $colmillos;
        public $raza;
    }
    
    class Elfo extends Personaje {
        public $orejas;
        public $clan;
    }

    class Hombre extends Personaje {
        public $raza;
        public $familia;
    }

    class Enano extends Personaje {
        public $barba;
        public $herrero;
    }

?>