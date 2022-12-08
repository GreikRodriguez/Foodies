<?php
   
    require 'DB.php';

    $categories = $database->select("Categorias","*");
    $complexitie = $database->select("dificultad","*");
    $occacion = $database->select("festividades","*");

    if(isset($_GET)){
        $data = $database->select("Recetas", "*", [
            "id" => $_GET["id"]
        ]);
    }
    //var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
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
    
    <h1>Editar Receta</h1>
    <form action="update.php" method="post" enctype="multipart/form-data">

        <label for="nombre">nombre</label>
        <input type="text" name="nombre" value="<?php echo $data[0]["nombre"]; ?>">
        <br>
        <label for="complejidad">complejidad</label>
        <select name="complejidad" id="complejidad">
            <?php 
                $len = count($complexitie);
                for($i=0; $i < $len; $i++) {
                    if($data[0]["id"] == $complexitie[$i]['id']){
                        echo '<option value="'.$complexitie[$i]['id'].'" selected>'.$complexitie[$i]['dificultad'].'</option>';
                    }else{
                        echo '<option value="'.$complexitie[$i]['id'].'">'.$complexitie[$i]['dificultad'].'</option>';
                    }
                    
                }
            ?>  
        </select>
        <br>
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria">
            <?php 
                $len = count($categories);
                for($i=0; $i < $len; $i++) {
                    if($data[0]["id"] == $categories[$i]['id']){
                        echo '<option value="'.$categories[$i]['id'].'" selected>'.$categories[$i]['categoria'].'</option>';
                    }else{
                        echo '<option value="'.$categories[$i]['id'].'">'.$categories[$i]['categoria'].'</option>';
                    }
                    
                }
            ?>
        </select>
        <br>
        <label for="ocacion">Ocacion</label>
        <select name="ocacion" id="ocacion">
            <?php 
                $len = count($occacion);
                for($i=0; $i < $len; $i++) {
                    if($data[0]["id"] == $occacion[$i]['id']){
                        echo '<option value="'.$occacion[$i]['id'].'" selected>'.$occacion[$i]['festividad'].'</option>';
                    }else{
                        echo '<option value="'.$occacion[$i]['id'].'">'.$occacion[$i]['festividad'].'</option>';
                    }
                    
                }
            ?>
        </select>
        <br>
        <label for="preparacion">Preparacion</label>
        <input type="text" name="preparacion" value="<?php echo $data[0]["instrucciones"]; ?>">
        <br>
        <label for="ingredientes">Ingredientes</label>
        <input type="text" name="ingredientes" value="<?php echo $data[0]["ingredientes"]; ?>">
        <br>

        <label for="imagen_url">Imagen principal</label>
        <img id="preview" src="./imgs/<?php echo $data[0]["imagen_url"]; ?>" width="125" height="125" alt="Preview">
        <input id="imagen_url" type="file" name="imagen_url" onchange="readURL(this)">
        <br>
        <input type="hidden" name="id" value="<?php echo $data[0]["id"]; ?>">
        <input type="submit" value="SUBMIT">
</form>

    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>