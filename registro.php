<?php
require 'DB.php';
/* if ($_SERVER['REQUEST_METHOD'] == "POST") {
  include "registros/_registro.php";
  $_POST["picture"] = $_FILES["imagen"];
  insertRecipe($_POST);
}  */

/* $complexity = ["Fácil", "Medio", "Avanzado"];
$categoties = ["Desayuno", "Entradas", "Almuerzo", "Sopas", "Postres", "Bebidas"];
$occasions = ["Todas", "Cumpleaños", "Día de la madre", "Día del padre", "Día del niño", "Navidad", "Semana Santa", "Verano"]; */

$complexity = $database->select("dificultad","*");
    $categories = $database->select("Categorias","*");
    $occasions = $database->select("festividades","*");
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
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
<!-- Registro -->
  <section>
    <div class="container-fluid ps-5 pe-5 g-1 color-green">
      <div class="row">
        <div class="col-12 h4 pb-2 mb-4">
          <h1 class="title-margin ps-5 pe-5">Registro de Recetas</h1>
        </div>
      </div>
      <div>
        <div>
          <form action="response.php" enctype="multipart/form-data" method="POST" class="row">
            <div class="col-12 col-md">

              <div class="mb-3 ps-5 pe-5">
                <label for="nombre" class="form-label register-text">Nombre de la Receta:</label>
                <input type="text" id="nombre" name="nombre" class="form-control me-2 shorter-space shadow-lg" placeholder="Nombre Receta...">
              </div>

              <div class="register-line">

                <div class="mb-3 ps-5 pe-5">
                  <label for="complejidad" class="form-label">Complejidad</label>
                  <select name="complejidad" id="complejidad">
                    <?php 
                      $len = count($complexity);
                      for($i=0; $i < $len; $i++) {
                      echo '<option value="'.$complexity[$i]
                      ['id'].'">'.$complexity[$i]
                      ['dificultad'].'</option>';
                      }
                      ?>
                  </select>
                </div>

                <div class="mb-3 ps-5 pe-5">
                  <label for="categoria" class="form-label">Categoria</label>
                  <select name="categoria" id="categoria">
                    <?php 
                      $len = count($categories);
                      for($i=0; $i < $len; $i++) {
                      echo '<option value="'.$categories[$i]
                      ['id'].'">'.$categories[$i]
                      ['categoria'].'</option>';
                      }
                      ?>
                  </select>
                </div>

                <div class="mb-3 ps-5 pe-5">
                  <label for="ocacion" class="form-label">Ocasión</label>
                  <select name="ocacion" id="ocacion">
                    <?php 
                            $len = count($occasions);
                            for($i=0; $i < $len; $i++) {
                                echo '<option value="'.$occasions[$i]
                                ['id'].'">'.$occasions[$i]
                                ['festividades'].'</option>';
                            }
                        ?>
                  </select>
                </div>
              </div>
              <div class="mb-3 ps-5 pe-5">
                <label for="preparacion" class="form-label title-margin register-text">Preparación:</label>
                <textarea class="form-control shorter-space shadow-lg" id="preparacion" name="preparacion" rows="3"></textarea>
              </div>
              <div class="mb-3 ps-5 pe-5">
                <label for="ingredientes" class="form-label register-text">Ingredientes:</label>
                <textarea class="form-control shorter-space shadow-lg" id="ingredientes" name="ingredientes" rows="3" placeholder="Ejemplo: arroz, agua, aceite..."></textarea>
              </div>
              <div class="mb-3 ps-5 pe-5">
                <label for="porciones" class="form-label register-text">Porciones:</label>
                <textarea class="form-control me-2 shorter-space shadow-lg" id="porciones" name="porciones"></textarea>
              </div>
              <div class="ps-5">
                <button type="submit" class="btn btn-success" value="Guardar receta"> Subir Receta </button>
              </div>
            </div>

            <div class="mb-3 col-md ">
              <label for="imagen_url" class="form-label register-text">Seleccionar Imagen:</label>
              <img id="preview" src="./imgs/" width="125" height="125" alt="Preview" class="me-5">
              <input type="file" class="form-control image-register" id="imagen_url" name="imagen_url" lang="es" onchange="readURL(this)">
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="ps-5 ps-5 pe-5 row col-12 h4 pb-2 mb-4">
      <a href="/recipes.php""><button class="btn btn-danger title-margin ps-5 pe-5"> Tabla </button></a>
  </div>

  <?php include "footer.php" ?>
</body>

</html>