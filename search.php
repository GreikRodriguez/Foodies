<?php
    require 'DB.php';

    if($_GET){

        $results = $database->select("Recetas",[
            "[><]Categorias"=>["id" => "id"]
        ],[
            "Recetas.id",
            "Recetas.nombre",
            "Recetas.tiempo",
            "Recetas.imagen_url",
            "Recetas.instrucciones",
            "Recetas.likes",
            "Recetas.porciones",
            "Recetas.dificultad_id",
            "Recetas.ingredientes"
        ],[
            "Recetas.nombre[~]" => $_GET["keyword"]
        ]);
        
    }

    $levels = $database->select("dificultad","*");
    $categories = $database->select("Categorias","*");
    $ocassions = $database->select("festividades","*");

    //featured recipes
    $featured_recipes = $database->select("Recetas","*",[
        "recipe_is_featured" => 1
    ]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food York</title>
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <!-- Slider -->
    <link rel="stylesheet" href="./css/splide.min.css">
    <!-- Main CSS-->
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container-fluid g-0">
        <!-- <div class="col-3 float-start recipes-sidebar">
            <img class="img-fluid mt-5 mb-3" src="./images/logo-food-york.png" alt="Food York"> -->

            <!--<h3 class="nav-title mt-4">Recipes By Skill Level</h3>
            <ul class="nav flex-column">-->
                <?php 
                   /*  foreach ($levels as $level){
                        echo "<li class='nav-item'><a class='nav-link nav-text' href='#'>".$level['recipe_level']."</a></li>";
                    } */
                ?>
            <!-- </ul>

            <h3 class="nav-title mt-4">Recipes By Category</h3>
            <ul class="nav flex-column"> -->
            <?php 
                /* foreach ($categories as $category){
                    echo "<li class='nav-item'><a class='nav-link nav-text' href='#'>".$category['recipe_category']."</a></li>";
                } */
            ?>
            <!-- </ul>

            <h3 class="nav-title mt-4">Recipes by Occasion</h3>
            <ul class="nav flex-column"> -->
            <?php 
                /* foreach ($ocassions as $ocassion){
                    echo "<li class='nav-item'><a class='nav-link nav-text' href='#'>".$ocassion['festividades']."</a></li>";
                } */
            ?>
            <!-- </ul>
        </div> -->
        <!-- <div class="col-9 float-start g-0 recipes-content">
            <div class="row g-0">
                <section class="splide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                            <ul class="splide__list">
                                <?php 
                                    /* foreach ($featured_recipes as $recipe){
                                        echo "<li class='splide__slide'><a class='' href='#'><img src='./imgs/".$recipe['imagen_url']."'><div class='featured-recipe'>".$recipe['nombre']."</div></a></li>";
                                    } */
                                ?>
                            </ul>
                    </div>
                </section> -->
           <!--  </div> -->
            <div class="row g-0 mt-5">
                <form class="d-flex pe-3 ps-3" action="search.php" method="get" role="search">
                    <input class="form-control search-recipe" type="search" name="keyword" placeholder="Search recipe" aria-label="Search">
                    <button class="btn btn-outline-success ms-2" type="submit">Search</button>
                </form>

                <?php 
                    if(count($results) > 0){
                        echo "<h4 class='text-center mt-3'>".count($results)." results for <span class='fw-bolder'>".$_GET["keyword"]."</span></h4>";
                    }else{
                        echo "<h4 class='text-center mt-3'>No results for <span class='fw-bolder'>".$_GET["keyword"]."</span></h4>";
                    }
                ?>
            </div>
        
            
             <div class="row row-cols-1 row-cols-md-5 g-4 ps-5 pe-5pr card-size">
                <?php 
                    foreach ($results as $recipe){
                        echo "<div class='col-md'><div class='card'> 
                        
                        <a href=/receta.php?id='" . $recipe["id"] . "'><img src='./imgs/".$recipe["imagen_url"]."' class='icon-size card-img-top''></a>
                        
                        <div class='card-body color-card'> <h5 class='card-title color-w align-text'>" . $recipe["nombre"] . "</h5><div class='line br-use'></div>
                        <div class=' elements-l'>
                        <img class='icon-size card-img-top' src='/foodiesv2/icons/like.png' alt='like'>
                        <h4 class='color-w text-likes'>" . $recipe["likes"] . "</h4>
                        <div class='btn-type '>
                        <button type='button' class='btn btn-danger fw-bold'></button>
                        </div>
                        </div>
                        </div>
                        </div>";
                    }
                ?>
             </div>
           
            

        

           



        <!-- </div> -->
    </div>

    <script src="./js/splide.min.js"></script>
    <script>
       
        new Splide( '.splide' ).mount();
        
    </script>
</body>
</html>