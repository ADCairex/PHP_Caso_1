<?php

    class Equipamiento {
        public $id;
        public $nombre;
        public $antiguedad;
        public $dimension_largo;
        public $dimension_ancho;
        public $peso;
        public $imagen;
        public $icono;
        public $descripcion;
    }

    class Espada extends Equipamiento {
        public $material_hoja;
        public $material_mango;

    }
    
    class Arco extends Equipamiento {
        public $material_cuerpo;
        public $material_cuerda;
    }

    class Casco extends Equipamiento {
        public $material;
        public $resistencia;
    }

    class Hacha extends Equipamiento {
        public $material_hoja;
        public $material_mango;
       
    }

?>