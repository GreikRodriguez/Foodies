<?php
    require 'DB.php';

    //$data = $database->select("tb_recipes", "*");
    
    // Reference: https://medoo.in/api/select
    // Note: don't delete the [>] 
        $data = $database->select("Recetas",[
            "[><]Categorias"=>["id" => "id"],
            "[><]dificultad"=>["id" => "id"],
            "[><]festividades"=>["id" => "id"]
        ],[
            "Recetas.id",
            "Recetas.nombre",
            "Recetas.tiempo",
            "Recetas.imagen_url",
            "Recetas.instrucciones",
            "Recetas.likes",
            "Recetas.porciones",
            "Recetas.dificultad_id",
            "Recetas.ingredientes",
            "Categorias.categoria",
            "Recetas.festividades_id",
            "Recetas.categorias_id"
        ]);
        
    

    //https://pastebin.com/raw/uWE7jAqt
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .thumb{
            width:15%;
        }
    </style>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <!-- AOS animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <link rel="stylesheet" href="/foodiesv2/css/main.css">
</head>
<body>
    
<?php include "header.php" ?>

<div class="container-fluid me-5 mb-3 ps-5 pe-5 color-green">
    <h1 class="margin-text">Tabla de Recetas</h1>
    <table class="table table-bordered table-hover color-table">
    <thead class="color-table">
        <tr>
            <td>Imagen</td>
            <td>Nombre</td>
            <td>Instrucciones</td>
            <td>Ingredientes</td>
            <td>Dificultad</td>
            <td>Tiempo</td>
            <td>Likes</td>
            <td>Porciones</td>
            <td>Porciones</td>
            <td>Festividades</td>
            <td>Categorias</td> 
        </tr>
        </thead>
        <?php

            $len = count($data);
    
            for($i=0; $i<$len; $i++){
                echo "<tr>";
                echo "<td><img src='./imgs/".$data[$i]["imagen_url"]."' class='thumb'></td>";
                echo "<td>".$data[$i]["nombre"]."</td>";
                echo "<td>".$data[$i]["instrucciones"]."</td>";
                echo "<td>".$data[$i]["ingredientes"]."</td>";
                echo "<td>".$data[$i]["dificultad_id"]."</td>";
                echo "<td>".$data[$i]["tiempo"]."</td>";
                echo "<td>".$data[$i]["likes"]."</td>";
                echo "<td>".$data[$i]["porciones"]."</td>";
                echo "<td>".$data[$i]["festividades_id"]."</td>";
                echo "<td>".$data[$i]["categorias_id"]."</td>";
                echo "<td><a href='edit.php?id=".$data[$i]["id"]."'>Edit</a> <a href='delete.php?id=".$data[$i]["id"]."'>Delete</a></td>";
                echo "</tr>";
            }
            //https://bit.ly/3TacdAZ
            //https://bit.ly/3Uia6f1

            //https://pastebin.com/raw/YpKLTgai
        ?>
    </table>
</div>
</body>
</html>