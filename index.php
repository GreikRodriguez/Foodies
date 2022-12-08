<?php
    include "DB.php";
    /* $data=$database ->select("Recetas", "*"); */
    $levels = $database->select("dificultad","*");
    $categories = $database->select("Categorias","*");
    $ocassions = $database->select("festividades","*");

    //featured recipes
    $featured_recipes = $database->select("Recetas","*",[
        "recipe_is_featured" => 1
    ]);
    //all recipes
    $recipes = $database->select("Recetas",[
        "[><]Categorias"=>["id" => "id_categoria"],
        "[><]dificultad"=>["dificultad_id" => "id"],
        "[><]festividades"=>["id_festividad" => "id"],
    ],[
        "Recetas.id",
        "Recetas.nombre", 
        "Recetas.tiempo", 
        "Recetas.imagen_url", 
        "Recetas.instrucciones", 
        "Recetas.likes", 
        "Recetas.porciones", 
        "Recetas.ingredientes",
        "Categorias.categoria",
        "Recetas.id_ocaciones",
        "Recetas.id_categoria", 
        "Recetas.dificultad_id", 
        "festividades.festividades", 
        "dificultad.dificultad"  
    ]);
    //top 10
    $popular_recipes = $database->select("Recetas","*",[
        "ORDER" => [
            "likes" => "DESC"
        ],
        'LIMIT' => 10
    ]);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    <!-- carrusel -->
    <div>
        <div class="main-carousel margin-carrusel" data-flickity='{ "cellAlign": "left", "contain": true }'>
            <div class="carousel-cell"><img src="/foodiesv2/img/promo1.jpg" class="d-block w-100" alt="promo1"></div>
            <div class="carousel-cell"><img src="/foodiesv2/img/promo2.jpg" class="d-block w-100" alt="promo2"></div>
            <div class="carousel-cell"><img src="/foodiesv2/img/promo3.jpg" class="d-block w-100" alt="promo1"></div>
        </div>
    </div>
    <!-- carrusel -->


    <!-- top recetas -->
    <section>
        <div class="h4 pb-2 mb-4 color-green ">
            <h2 class="title-margin ps-5 pe-5">TOP 10 RECETAS</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-5 g-4 ps-5 pe-5 card-size-top-10">
            <?php 
             foreach ($popular_recipes as $recipe){
                echo "<div class='col-md'>
                <div class='card'>
                <a href='receta.php?id="
                .$recipe["id"]."'class='text-pink  nav-link topnav-link'><img class='opacity-card card-img-top img-1' src='./imgs/".$recipe["imagen_url"]."'>
                <div class='card-body color-card'>
                  <div class='card-title color-w align-text'>
                <h5 class='card-title'>".$recipe["nombre"]."</h5>
                <div class='line br-use'></div>
                <div class='elements-l'>
                <img class='icon-size card-img-top' src='like.png' alt='like'/>
                <h4 class='color-w text-likes'>".$recipe["likes"]."</h4>
                <div class='btn-type'><button type='button' class='btn btn-danger fw-bold'>".$recipe["categoria"]."</button></div>
                </div>
                </a>
                  </div>
                </div></div></div>";
            }
            ?>
        </div>
    </section>
    <!-- top recetas -->

    <!-- recetas -->
    <section>
        <div class="h4 pb-2 mb-4 color-green ">
            <h2 class="title-margin ps-5 pe-5">RECETAS DE COCINA</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-5 g-4 ps-5 pe-5 card-size-top-10">
                <?php 
                    foreach ($recipes as $recipe){
                        echo "<div class='col-md'>
                        <div class='card'>
                        <a href='receta.php?id="
                        .$recipe["id"]."'class='text-pink nav-link topnav-link'><img class='opacity-card card-img-top img-1' src='./imgs/".$recipe["imagen_url"]."'>
                          <div class='card-body color-card'>
                          <div class='card-title color-w align-text'>
                        <h5 class='card-title'>".$recipe["nombre"]."</h5>
                        <div class='line br-use'></div>
                        <div class='elements-l'> 
                        <img class='icon-size card-img-top' src='like.png' alt='like'/>
                        <h4 class='color-w text-likes'>".$recipe["likes"]."</h4>
                        <div class='btn-type'><button type='button' class='btn btn-danger fw-bold'>000</button></div>
                        </div>
                        </a>
                            </div>
                        </div></div></div>";
                    }
                ?>      


            
                 <!-- echo "<div class='col-md'>
                        <div class='card'>
                            <a href=/receta.php?id='" . $recetasG[$i]["id"] . "'><img src='" . $recetasG[$i]["imagen_url"] . "' class='opacity-card card-img '
                                    alt='salmon'></a>
                            <div class='card-body color-card'>
                                <h5 class='card-title color-w align-text'>" . $recetasG[$i]["nombre"] . "</h5>
                                <div class='line br-use'></div>
                                <div class=' elements-l'>
                                    <img class='icon-size card-img-top' src='/foodiesv2/icons/like.png' alt='like'>
                                    <h4 class='color-w text-likes'>" . $recetasG[$i]["likes"] . "</h4>";


                echo "<div class='btn-type '>
                            <button type='button' class='btn btn-danger fw-bold'>" . $recetasG[$i]["categorias"][0]["categoria"] . "</button>
                         </div>";


                echo            "</div>
                            </div>
                        </div>
                    </div>"; -->
            
        </div>
    </section>
    <!-- recetas -->



    <?php include "footer.php" ?>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            AOS.init();

            document.querySelector('.mobile-icon').addEventListener('click', function(event) {
                console.log('click');
                document.getElementById('navbar-main').classList.add('show-nav');
            });

            document.querySelector('#btn-close').addEventListener('click', function(event) {
                document.getElementById('navbar-main').classList.remove('show-nav');
            });
        });
    </script>
</body>

</html>