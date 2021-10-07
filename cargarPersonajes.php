<?php
    include 'clasesPersonajes.php';
    $string = file_get_contents("jsonFiles/personajes.json", true);
    $personajesJson = json_decode($string, true);

    $arrayObjetosPersonajes = array();

    foreach ($personajesJson as $i) {
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

        if ($tipoPj == 'Hombre') {
            $razaPj = $i['raza'];
            $familiaPj = $i['familia'];
            array_push($arrayObjetosPersonajes, new Hombre(
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
        } elseif ($tipoPj == 'Elfo') {
            $orejasPj = $i['orejas'];
            $clanPj = $i['clan'];
            array_push($arrayObjetosPersonajes, new Elfo(
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
        } elseif ($tipoPj == 'Orco') {
            $colmillosPj = $i['colmillos'];
            $razaPj = $i['raza'];
            array_push($arrayObjetosPersonajes, new Orco(
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
        } elseif ($tipoPj == 'Enano') {
            $barbaPj = $i['barba'];
            $herreroPj = $i['herrero'];
            array_push($arrayObjetosPersonajes, new Enano(
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