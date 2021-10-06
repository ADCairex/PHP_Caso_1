<?php
// Create an array that contains another
// array with key value pair
$arr = array (
     
    // Every array will be converted
    // to an object
    array(
        "id" => 1,
        "name" => "Pankaj Singh",
        "birthDate" => "01/01/1992",
        "height" => 20,
        "weight" => 20,

    ),
    array(
        "name" => "Arun Yadav",
        "age" => "21"
    ),
    array(
        "name" => "Apeksha Jaiswal",
        "age" => "20"
    )
);
 
// Function to convert array into JSON
echo json_encode($arr);
?>