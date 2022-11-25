<?php
include "DB.php";



//          0   1  2    
$numeros = [3, 5, 6];

$numeros[0]; //6
















$numeros = [[3, 5, 6], [1, 3, 4], [6, 4, 8], [4, 5, 2], [7, 3, 5], [6, 9, 8]];
//   0  1  2 
$dato = $numeros[2]; // [6, 4, 8]
$dato = $numeros[0]; // [3, 5, 6]
$dato = $numeros[4][2]; // 5
$dato = $numeros[2][1];


















$resultado_DB = $database->select("Recetas", "*");

$resultado_DB[0];

$resultado_DB[0]["nombre"];


//echo $resultado_DB[0]["nombre"];




for ($indice = 0; $indice < count($resultado_DB); $indice++) {

    echo "<h1 style='color:red '>" . $resultado_DB[$indice]["nombre"] . "</h1>";
    echo "<br/>";
}
