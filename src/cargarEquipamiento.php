<?php
    include 'clasesEquipamiento.php';
    $string = file_get_contents("jsonFiles/equipamiento.json", true);
    $equipamientoJson = json_decode($string, true);

    $arrayObjetosEquipamiento = array();

    foreach ($equipamientoJson as $i) {
        $idPj = $i['id'];
        $nombrePj = $i['nombre'];
        $dniPj = $i['dni'];
        $fechaNacimiento = $i['fecha_de_nacimiento'];
        $alturaPj = $i['altura'];
        $pesoPj = $i['peso'];
        $imagenPj = $i['imagen'];
        $iconoPj = $i['icono'];
        $descripcionPj = $i['descripcion'];
        $tipoPj = $i['tipo'];

        if ($tipoPj == 'Espada') {
            $razaPj = $i['raza'];
            $familiaPj = $i['familia'];
            array_push($arrayObjetosEquipamiento, new Espada(
                $idPj,
                $nombrePj,
                $dniPj,
                $fechaNacimiento,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $razaPj,
                $familiaPj
            ));
        } elseif ($tipoPj == 'Arco') {
            $orejasPj = $i['orejas'];
            $clanPj = $i['clan'];
            array_push($arrayObjetosEquipamiento, new Arco(
                $idPj,
                $nombrePj,
                $dniPj,
                $fechaNacimiento,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $orejasPj,
                $clanPj
            ));
        } elseif ($tipoPj == 'Casco') {
            $colmillosPj = $i['colmillos'];
            $razaPj = $i['raza'];
            array_push($arrayObjetosEquipamiento, new Casco(
                $idPj,
                $nombrePj,
                $dniPj,
                $fechaNacimiento,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $colmillosPj,
                $razaPj
            ));
        } elseif ($tipoPj == 'Hacha') {
            $barbaPj = $i['barba'];
            $herreroPj = $i['herrero'];
            array_push($arrayObjetosEquipamiento, new Hacha(
                $idPj,
                $nombrePj,
                $dniPj,
                $fechaNacimiento,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $barbaPj,
                $herreroPj
            ));
        }
    }
?>