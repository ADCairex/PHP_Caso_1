<?php

    class Personaje {

        public $id;
        public $dni;
        public $edad;
        public $altura;
        public $peso;
        public $imagen;
        public $icono;
        public $descripcion;

        function __construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->dni = $dni;
            $this->edad = $edad;
            $this->altura = $altura;
            $this->peso = $peso;
            $this->imagen = $imagen;
            $this->icono = $icono;
            $this->descripcion = $descripcion;
        }

        function calcularEdad() {
            $actualDate = getdate();
            $this->edad = explode('/', $this->edad);
            $year = $this->edad[2];
            $month = $this->edad[1];
            $day = $this->edad[0];
            $edad = $actualDate['year'] - $year;
            if ($month > $actualDate['mon'] || ($month = $actualDate['mon'] && $day > $actualDate['mday'])) {
                $edad = $edad - 1;
            }

            $this->edad = $edad;
            return $edad;
        }
    }

    class Orco extends Personaje {

        public $colmillos;
        public $raza;

        function __construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion, $colmillos, $raza) {
            parent::__construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion);

            $this->colmillos = $colmillos;
            $this->raza = $raza;
        }
    }
    
    class Elfo extends Personaje {

        public $orejas;
        public $clan;

        function __construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion, $orejas, $clan) {
            parent::__construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion);

            $this->orejas = $orejas;
            $this->clan = $clan;
        }
    }

    class Hombre extends Personaje {

        public $raza;
        public $familia;

        function __construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion, $raza, $familia) {
            parent::__construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion);

            $this->raza = $raza;
            $this->familia = $familia;
        }
    }

    class Enano extends Personaje {

        public $barba;
        public $herrero;

        function __construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion, $barba, $herrero) {
            parent::__construct($id, $nombre, $dni, $edad, $altura, $peso, $imagen, $icono, $descripcion);

            $this->barba = $barba;
            $this->herrero = $herrero;
        }
    }
?>