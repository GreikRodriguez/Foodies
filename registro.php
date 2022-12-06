<!DOCTYPE html>
<html lang="en">
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
  <section>
      <div class="container-fluid ps-5 pe-5 g-1 color-green">
            <div class="row">
              <div class="col-12 h4 pb-2 mb-4">
                <h1 class="title-margin ps-5 pe-5">Registro de Recetas</h1>
              </div>
            </div>
        <div class="row">
          <div class="col-12 col-md">
            <form action="registro.html" method="POST">
              <div class="mb-3 ps-5 pe-5">
                <label for="nombre" class="form-label register-text">Nombre de la Receta:</label>
                <input type="text" class="form-control me-2 shorter-space" id="nombre" placeholder="Nombre Receta...">
              </div>
               <div class="register-line">
                  <div class="mb-3 ps-5 pe-5">
                    <label for="inputGroupFile01" class="form-label">Complejidad</label>
                    <select name="" id="">
                      <option value="Fácil">Fácil</option>
                      <option value="Medio">Intermedio</option>
                      <option value="Medio">Avanzado</option>
                  </select>
                  </div>
                  <div class="mb-3 ps-5 pe-5">
                    <label for="inputGroupFile01" class="form-label">Categoria</label>
                    <select name="" id="">
                      <option value="Desayuno">Desayuno</option>
                      <option value="Desayuno">Entradas</option>
                      <option value="Almuerzo">Almuerzo</option>
                      <option value="Sopas">Sopas</option>
                      <option value="Postres">Postres</option>
                      <option value="Bebidas">Bebidas</option>
                    </select>
                  </div>
                  <div class="mb-3 ps-5 pe-5">
                   <label for="inputGroupFile01" class="form-label">Ocasión</label>
                     <select name="" id="">
                     <option value="Cumpleaños">Todas</option>
                      <option value="Cumpleaños">Cumpleaños</option>
                      <option value="Día de la madre">Día de la madre</option>
                      <option value="Día del padre">Día del padre</option>
                      <option value="Día del niño">Día del niño</option>
                      <option value="Navidad">Navidad</option>
                      <option value="Semana Santa">Semana Santa</option>
                      <option value="Verano">Verano</option>
                     </select>
                  </div>
               </div>
                  <div class="mb-3 ps-5 pe-5">
                    <label for="preparacion" class="form-label title-margin register-text">Preparación:</label>
                    <textarea class="form-control shorter-space" id="preparacion" name="preparacion" rows="3"></textarea>
                  </div>
                  <div class="mb-3 ps-5 pe-5">
                    <label for="ingredientes" class="form-label register-text">Ingredientes:</label>
                    <textarea class="form-control shorter-space" id="ingredientes" name="ingredientes" rows="3"></textarea>
                  </div>
                  <div class="ps-5" >
                  <button type="submit" class="btn btn-success"> Subir Receta </button>
                  </div> 
            </form>
          </div>
            <div class="mb-3 col-md ">
                <label for="imagen" class="form-label register-text">Imagen:</label>
                <input type="file" class="form-control image-register" id="imagen" name="imagen...">
            </div>
        </div>
      </div>    
  </section>



          <div class="container-fluid me-5 mb-3 ps-5 pe-5 color-green">
            <table class="table">
              <h1 class="pt-5">Tabla de Recetas</h1>
              <thead class="color-table">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">complejidad</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Ocasión</th>
                  <th scope="col">IMG</th>
                  <th scope="col">Opciones</th>
                  
                </tr>
              </thead>
              <form>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    
                    <td>Pan de soda con trigo sarraceno y pipas de calabaza</td>
                    <td>Intermedio</td>
                    <td>Postre</td>
                    <td>Navidad</td>
                    <td>img</td>
                    <td>@/@</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    
                    <td>Tataki de ternera marinada con mostaza, especias y sal de carbón</td>
                    <td>Avanzado</td>
                    <td>Almuerzo</td>
                    <td>Dia de la Madre</td>
                    <td>img</td>
                    <td>@/@</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    
                    <td>Omelet de huevo</td>
                    <td>Facil</td>
                    <td>Desayuno</td>
                    <td>Todas</td>
                    <td>img</td>
                    <td>@/@</td>
                  
                    </td>
                  </tr>
                </tbody>
              </form>
            </table>
          </div>
          <?php include "footer.php" ?>
</body>
</html>