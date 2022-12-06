<?php
include "DB.php";

$recetasL = $database->select("Recetas", "*");


for ($i = 0; $i < count($recetasL); $i++) {


    $id_receta = $recetasL[$i]["id"];
    $lista_id_categorias = $database->select('Recetas_has_Categorias', 'Categorias_id', ["Recetas_id" => $id_receta]);

    if (is_numeric($lista_id_categorias)) {

        $categorias = $database->select('Categoria', "*", ["id" => $lista_id_categorias]);
        $recetasL[$i]["categorias"] = [["categoria" => $categorias["categoria"]]];
    } else if (count($lista_id_categorias) > 0) {

        $dificultad = $database->select('dificultad', "*", ["id" => $lista_id_categorias]);
        $recetasL[$i]["dificultad"] = $dificultad;
    } else {
        $recetasL[$i]["ocaciones"] = [["ocaciones" => "Almuerzo X"]];
    }
}
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secciones</title>
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

  <?php include "header.php"?>
     <section>
        <div class="h4 pb-2 mb-4 color-green ">
          <h2 class="title-margin ps-5 pe-5">ALMUERZO</h2>
        </div>
  
        <div class="row row-cols-1 row-cols-md-5 g-4 ps-5 pe-5 card-size-top-10">
              <div class="col">
                <div class="card">
                  <a href="../recetario/Index.html"><img src="./imgs/salmon.jpg" class="opacity-card card-img-top" alt="..."></a>
                  <div class="card-body color-card">
                    <h5 class="card-title color-w align-text">Salmón al estilo teriyaki</h5>
                    <p class="card-text"></p>
                    <div class="line br-use-2"></div>         
                      <div class=" elements-l"> 
                        <img class="icon-size card-img-top" src="./icons/like.png" alt="like"> 
                        <h4 class="color-w text-likes">500</h4>
                        <div class="btn-type ">
                          <button type="button" class="btn btn-danger fw-bold">Almuerzo</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href="../recetario/Index.html"><img src="./imgs/pollo.jpg" class="opacity-card card-img-top" alt="..."></a>
                  <div class="card-body color-card">
                    <h5 class="card-title color-w align-text">Pollo al horno en salsa de mandarina veg</h5>
                    <p class="card-text"></p>
                    <div class="line br-mobile"></div>         
                      <div class=" elements-l"> 
                        <img class="icon-size card-img-top" src="./icons/like.png" alt="like"> 
                        <h4 class="color-w text-likes">500</h4>
                        <div class="btn-type ">
                          <button type="button" class="btn btn-danger fw-bold">Almuerzo</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href="../recetario/Index.html"><img src="./imgs/carne.jpg" class="opacity-card card-img-top" alt="..."></a>
                  <div class="card-body color-card">
                    <h5 class="card-title color-w align-text">Tataki de ternera con mostaza y especias</h5>
                    <p class="card-text"></p>
                    <div class="line br-mobile"></div>         
                      <div class=" elements-l"> 
                        <img class="icon-size card-img-top" src="./icons/like.png" alt="like"> 
                        <h4 class="color-w text-likes">500</h4>
                        <div class="btn-type ">
                          <button type="button" class="btn btn-danger fw-bold">Almuerzo</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href="../recetario/Index.html"><img src="./imgs/huevo.jpg" class="opacity-card card-img-top" alt="..."></a>
                  <div class="card-body color-card">
                    <h5 class="card-title color-w align-text">Bowl de quinoa, verduritas y huevo</h5>
                    <p class="card-text"></p>
                    <div class="line"></div>         
                      <div class="elements-l"> 
                        <img class="icon-size card-img-top" src="./icons/like.png" alt="like"> 
                        <h4 class="color-w text-likes">500</h4>
                        <div class="btn-type ">
                          <button type="button" class="btn btn-danger fw-bold">Almuerzo</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>  
    </section>

  <!-- filtro -->
  <section>
        <div class="h4 pb-2 mb-4 color-green ">
            <h2 class="title-margin ps-5 pe-5">RECETAS</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-5 g-4 ps-5 pe-5pr card-size">
            <?php
            for ($i = 0; $i < count($recetasL); $i++) {
                echo "<div class='col-md'>
                        <div class='card'>
                            <a href=/receta.php?id='" . $recetasL[$i]["id"] . "'><img src='" . $recetasL[$i]["imagen_url"] . "' class='opacity-card card-img '
                                    alt='salmon'></a>
                            <div class='card-body color-card'>
                                <h5 class='card-title color-w align-text'>" . $recetasL[$i]["nombre"] . "</h5>
                                <div class='line br-use'></div>
                                <div class=' elements-l'>
                                    <img class='icon-size card-img-top' src='/foodiesv2/icons/like.png' alt='like'>
                                    <h4 class='color-w text-likes'>" . $recetasL[$i]["likes"] . "</h4>";


                echo "<div class='btn-type '>
                            <button type='button' class='btn btn-danger fw-bold'>" . $recetasL[$i]["categorias"][0]["categoria"] . "</button>
                         </div>";


                echo            "</div>
                            </div>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </section>
    <!-- filtro -->

    <?php include "footer.php" ?>
</body>
</html>