<?php
    include 'clasesEquipamiento.php';
    $string = file_get_contents("jsonFiles/equipamiento.json", true);
    $equipamientoJson = json_decode($string, true);

    $arrayObjetosEquipamiento = array();

    foreach ($equipamientoJson as $i) {
        $idPj = $i['id'];
        $nombrePj = $i['nombre'];
        $antiguedad = $i['antiguedad'];
        $dimensionLargoPj = $i['dimensionLargo'];
        $dimensionAnchoPj = $i['dimensionAncho'];
        $pesoPj = $i['peso'];
        $imagenPj = $i['imagen'];
        $iconoPj = $i['icono'];
        $descripcionPj = $i['descripcion'];
        $tipoPj = $i['tipo'];

        if ($tipoPj == 'Espada') {
            $materialHojaPj = $i['materialHoja'];
            $materialMangoPj = $i['materialMango'];
            array_push($arrayObjetosEquipamiento, new Espada(
                $idPj,
                $nombrePj,
                $antiguedad,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $materialHojaPj,
                $materialMangoPj
            ));
        } elseif ($tipoPj == 'Arco') {
            $materialCuerpoPj = $i['materialCuerpo'];
            $materialCuerdaPj = $i['materialCuerda'];
            array_push($arrayObjetosEquipamiento, new Arco(
                $idPj,
                $nombrePj,
                $antiguedad,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $materialCuerpoPj,
                $materialCuerdaPj
            ));
        } elseif ($tipoPj == 'Casco') {
            $materialPj = $i['material'];
            $resistenciaPj = $i['resistencia'];
            array_push($arrayObjetosEquipamiento, new Casco(
                $idPj,
                $nombrePj,
                $antiguedad,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $materialPj,
                $resistenciaPj
            ));
        } elseif ($tipoPj == 'Hacha') {
            $materialHojaHPj = $i['materialHojaH'];
            $materialMangoHPj = $i['materialMangoH'];
            array_push($arrayObjetosEquipamiento, new Hacha(
                $idPj,
                $nombrePj,
                $antiguedad,
                $alturaPj,
                $pesoPj,
                $imagenPj,
                $iconoPj,
                $descripcionPj,
                $materialHojaHPj,
                $materialMangoH
            ));
        }
    }
?>