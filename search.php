<?php
    require 'db.php';

    if($_GET){

        $results = $database->select("tb_recipes",[
            "[><]tb_recipe_category"=>["id_recipe_category" => "id_recipe_category"]
        ],[
            "tb_recipes.id_recipe",
            "tb_recipes.recipe_name",
            "tb_recipes.recipe_time",
            "tb_recipes.recipe_image",
            "tb_recipes.recipe_description",
            "tb_recipes.recipe_likes",
            "tb_recipe_category.recipe_category"
        ],[
            "tb_recipes.recipe_name[~]" => $_GET["keyword"]
        ]);
        
    }

    $levels = $database->select("tb_recipe_levels","*");
    $categories = $database->select("tb_recipe_category","*");
    $ocassions = $database->select("tb_recipe_ocassions","*");

    //featured recipes
    $featured_recipes = $database->select("tb_recipes","*",[
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
        <div class="col-3 float-start recipes-sidebar">
            <img class="img-fluid mt-5 mb-3" src="./images/logo-food-york.png" alt="Food York">

            <h3 class="nav-title mt-4">Recipes By Skill Level</h3>
            <ul class="nav flex-column">
                <?php 
                    foreach ($levels as $level){
                        echo "<li class='nav-item'><a class='nav-link nav-text' href='#'>".$level['recipe_level']."</a></li>";
                    }
                ?>
            </ul>

            <h3 class="nav-title mt-4">Recipes By Category</h3>
            <ul class="nav flex-column">
            <?php 
                foreach ($categories as $category){
                    echo "<li class='nav-item'><a class='nav-link nav-text' href='#'>".$category['recipe_category']."</a></li>";
                }
            ?>
            </ul>

            <h3 class="nav-title mt-4">Recipes by Occasion</h3>
            <ul class="nav flex-column">
            <?php 
                foreach ($ocassions as $ocassion){
                    echo "<li class='nav-item'><a class='nav-link nav-text' href='#'>".$ocassion['recipe_ocassion']."</a></li>";
                }
            ?>
            </ul>
        </div>
        <div class="col-9 float-start g-0 recipes-content">
            <div class="row g-0">
                <section class="splide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                            <ul class="splide__list">
                                <?php 
                                    foreach ($featured_recipes as $recipe){
                                        echo "<li class='splide__slide'><a class='' href='#'><img src='./images/".$recipe['recipe_image']."'><div class='featured-recipe'>".$recipe['recipe_name']."</div></a></li>";
                                    }
                                ?>
                            </ul>
                    </div>
                </section>
            </div>
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
            <div class="row g-0 mt-3">
                <?php 
                    foreach ($results as $recipe){
                        echo "<div class='col-3 card'><img src='./images/".$recipe["recipe_image"]."' class='card-img-top' alt='".$recipe["recipe_name"]."'><div class='card-body'><h5 class='card-title'>".$recipe["recipe_name"]."</h5><p class='card-text'>".substr($recipe["recipe_description"], 0, 100)."</p><a href='#' class='btn btn-primary'>VIEW RECIPE</a>
                      </div></div>";
                    }
                ?>
            </div>
            
        </div>
    </div>

    <script src="./js/splide.min.js"></script>
    <script>
       
        new Splide( '.splide' ).mount();
        
    </script>
</body>
</html>