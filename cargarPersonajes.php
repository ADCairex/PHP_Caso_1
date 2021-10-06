<?php
    $string = file_get_contents("jsonFiles/personajes.json", true);
    $personajesJson = json_decode($string, true);
?>