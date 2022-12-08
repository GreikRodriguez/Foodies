<?php

function runValidations($request = []): bool {
    if (!isset($_POST["nombre"])) return false; 
    if (!isset($_POST["preparacion"])) return false; 
    if (!isset($_POST["complejidad"])) return false; 
    if (!isset($_POST["ingredientes"])) return false; 
    return true;
}

function insertRecipe($request = []) {
    $isValid = runValidations($request);
    if ($isValid) {
        include "DB.php";

        extract($request);
        $file_url = insertFile($picture);

        $database->exec("
        INSERT INTO Recetas (nombre, tiempo, imagen_url, instrucciones, likes, porciones, dificultad_id, ingredientes) VALUES (
          '$nombre',
          10,
          '$file_url',
          '$preparacion',
          0,
          0,
          '$complejidad',
          '$ingredientes'
        )
      ");
    } else echo "FALTAN VALORES";
    
}

function insertFile($File = []): string {
    $target_dir = "./imgs/";
    $target_file = $target_dir . basename($File["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($File["tmp_name"]);
        if ($check == false) return null;
    }

    /* $name = $File["name"];
    return "imgs/$name"; */
    return $target_file;
}

