<?php
    require 'db.php';
    require 'fpdf.php';

    //recipe
    $recipe = $database->select("tb_recipes",[
        "[><]tb_recipe_category"=>["id_recipe_category" => "id_recipe_category"],
        "[><]tb_recipe_levels"=>["id_recipe_level" => "id_recipe_level"],
        "[><]tb_recipe_ocassions"=>["id_recipe_ocassion" => "id_recipe_ocassion"],
    ],[
        "tb_recipes.id_recipe",
        "tb_recipes.id_recipe_category",
        "tb_recipes.recipe_name",
        "tb_recipes.recipe_time",
        "tb_recipes.recipe_total_time",
        "tb_recipes.recipe_yields",
        "tb_recipes.recipe_image",
        "tb_recipes.recipe_description",
        "tb_recipes.recipe_likes",
        "tb_recipes.recipe_ingredients",
        "tb_recipes.recipe_directions",
        "tb_recipe_category.recipe_category",
        "tb_recipes.id_recipe_level",
        "tb_recipes.id_recipe_ocassion",
        "tb_recipe_levels.recipe_level"
    ],[
        "tb_recipes.id_recipe" => $_GET["id_recipe"]
    ]);
	
	var_dump($recipe);

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',18);
    $pdf->Image('./images/'.$recipe[0]["recipe_image"], 150, 10, 50, 50);

    $pdf->Cell(40,10, $recipe[0]["recipe_name"]);
    $pdf->SetFont('Arial','I',12);
    $pdf->Ln();
    $pdf->Cell(40,10,'Cook time: '.$recipe[0]["recipe_time"]);
    $pdf->Ln(5);
    $pdf->Cell(40,10,'Prep time: '.$recipe[0]["recipe_total_time"]);
    $pdf->Ln(5);
    $pdf->Cell(40,10,'Yield: '.$recipe[0]["recipe_yields"]);
    $pdf->Ln(5);
    $pdf->Cell(40,10,'Skill level: '.$recipe[0]["recipe_level"]);
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial','B',16);
    $pdf->Ln();
    $pdf->Cell(40,10,'Ingredients');
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $ingredients = [];
    $ingredients = explode(",", $recipe[0]["recipe_ingredients"]);

    foreach ($ingredients as $key => $ingredient){
        if($key != array_key_last($ingredients)){
            $pdf->Cell(40,10, '- '.$ingredient);
            $pdf->Ln(5);
        }
    }

    $pdf->SetFont('Arial','B',16);
    $pdf->Ln();
    $pdf->Cell(40,10,'Directions');
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $directions = [];
    $directions = explode(",", $recipe[0]["recipe_directions"]);

    foreach ($directions as $key => $direction){
        if($key != array_key_last($directions)){
            $pdf->write(5, '- '.$direction);
            $pdf->Ln();
            //$pdf->Ln(5);
        }
    }

    //$pdf->Output();
    $pdf->Output('D', $recipe[0]["recipe_name"].'.pdf');
	
?>