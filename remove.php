<?php 
    require 'DB.php';

    // Reference: https://medoo.in/api/delete
    $database->delete("Recetas",[
        "id"=>$_POST["id"]
    ]);

    header("location: recipes.php");
?>