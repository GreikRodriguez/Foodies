<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="./css/main.css">
  
</head>
<body>
     <!-- nav menu -->
     <header >
        <div class="position-absolute top-0 start-0 pt-3 pb-3 ps-3 mobile-bar position-tab">
          <img class="mobile-icon" src="./icons/bars.svg" alt="menu bar">
      </div>
    <!--  Menu navigation -->
      <nav id="navbar-main" class="navbar top-nav mobile-offcanvas navbar-expand-lg mx-auto color-light total-size">
          <div class="d-flex justify-content-between align-items-center ">
              <a href="../foodiesv2/Index.html"><img src="./img2/Logo.png" class="size position-relative ms-5 mobile-logo" alt="Graphic identifier"></a>
              <div class="offcanvas-header"><button id="btn-close" class="btn btn-light float-end me-5">X</button></div>
          </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="top-nav-item"><a class="nav-link top-nav-link top-nav-item" aria-current="page" href="../foodiesv2/Index.html">INICIO</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle top-nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CATEGORIA</a>
                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="../secciones/Index.html">DESAYUNO</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">ENTRADAS</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">ALMUERZO</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">SOPAS</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">POSTRES</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">BEBIDAS</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle top-nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">DIFICULTAD</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../secciones/Index.html">FACIL</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">INTERMEDIA</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">AVANZADO</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle top-nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">OCACIONES</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../secciones/Index.html">TODAS</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">CUMPLEAÑOS</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">DIA DE LA MADRE</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">DIA DEL PADRE</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">DIA DEL NIÑO</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">NAVIDAD</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">SEMANA SANTA</a></li>
                      <li><a class="dropdown-item" href="../secciones/Index.html">VERANO</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex search-nav ps-5 pe-5 ">
                  <input class="form-control me-2 " type="text" placeholder="Buscar Recetas..."> 
                  <a href="#"><img src="icons/lupa.png" alt="Lupa"></a>
                </form>
              </div>
             <!--  responsive part -->
              <div class="offcanvas-header mt-5 mt-5-mb margin-nav-mb">
                <div class="row">
                    <div class="col-md">
                        <div class="row">
                            <p class="text-light header-text text-decorate cont-text">CATEGORIA</p>
                            <div class="col">
                                <ul class="p-0 ul-class ">
                                    <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">DESAYUNO</a></li>
                                    <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">ENTRADAS</a></li>
                                    <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">ALMUERZO</a></li>
                                    <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">SOPAS</a></li>
                                    <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">POSTRES</a></li>
                                    <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">BEBIDAS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row">
                            <p class="text-light header-text text-decorate cont-text">DIFICULTAD</p>
                            <div class="col">
                              <ul class="p-0 ul-class">
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">FACIL</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">INTERMEDIO</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link text-mid" href="../secciones/Index.html">AVANZADO</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row">
                            <p class="text-light header-text text-decorate cont-text">OCACIONES</p>
                            <div class="col">
                              <ul class="p-0 ul-class">
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">TODAS</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">CUMPLEAÑOS</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">DIA DE LA MADRE</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">DIA DEL PADRE</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">DIA DEL NIÑO</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">NAVIDAD</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">SEMANA SANTA</a></li>
                                  <li class="header-no-item mb-3 top-nav-link text-mid"><a class="header-text mobile-link" href="../secciones/Index.html">VERANO</a></li>
                                  </ul>
                            </div>
                        </div>
                    </div>
        </nav>  
     </header>
    <!-- nav menu -->



     <!-- cart info -->
<div class="container-fluid">
    <div class="h4 pb-2 mb-4 color-green">
      <h1 class="title-margin ps-5 pe-5">RECETA</h1>
    </div>
  
    <div class="row g-1 ps-5 pe-5 ">
        <div class="col-md">
          <div class="card card-size">
            <img src="./img2/salmonrecetario.jpg" class="card-img-top" alt="salmon">
            <div class="card-body color-card">
              <h5 class="card-title color-w align-text">Salmón a la ribereña</h5>
              <h4 class="card-title color-w">10 min</h4>
              <p class=""></p>
              <div class="elements-l">
                <img class="icon-size card-img-top" src="./icons/like.png" alt="like">
                <h4 class="color-w text-likes">500</h4>
                <div class="btn-type ">
                  <button type="button" class="btn btn-danger fw-bold">Facil</button>
                  <button type="button" class="btn btn-danger fw-bold">Almuerzo</button>
                  <button type="button" class="btn btn-danger fw-bold">Semana Santa</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      
        <div class="col-md">
          <div class="format-paragraph">
          <p class="info-paragraph giant-info color-green ">
            Limpiamos las rodajas de salmón y las secamos con papel absorbente. Salamos y pasamos por harina, asegurándonos de retirar el exceso. 
            Calentamos el aceite en una sartén amplia y freímos el salmón un par de minutos por cada lado. Retiramos y reservamos. 
            Retiramos el aceite (con cuidado de no quemarnos) y, en la misma sartén sin limpiarla, salteamos el jamón en dados. Añadimos la sidra, el caldo de pescado y hervimos a fuego alto durante un par de minutos. 
            Los restos de harina que quedan en la sartén espesarán un poco la salsa. Por último añadimos el salmón y damos un hervor corto a fuego suave, regando la superficie con la salsa. 
            Retiramos del fuego y servimos inmediatamente, acompañando el salmón de un poco de salsa.
          </p>
          
          <ul class="list-group-ingredients color-green">
            <li class="list-group-item-ingredients giant-info">Salmón fresco rodaja 2</li>
            <li class="list-group-item-ingredients giant-info">Harina de trigo 75 g</li>
            <li class="list-group-item-ingredients giant-info">Aceite de oliva virgen extra 100 ml</li>
            <li class="list-group-item-ingredients giant-info">Jamón ibérico 50 g</li>
            <li class="list-group-item-ingredients giant-info">Sidra de manzana 100 ml</li>
            <li class="list-group-item-ingredients giant-info">Caldo de pescado o fumet 100 ml</li>
            <li class="list-group-item-ingredients giant-info">Sal
          </ul>
        </div>
      </div>

    </div> 
  </div>  
  <!-- cart info -->
    


  <section>
    <div class="h4 pb-2 mb-4 color-green ">
      <h2 class="title-margin ps-5 pe-5">RECOMENDACIONES:</h2>
    </div>

    <div class="row row-cols-1 row-cols-md-5 g-4 ps-5 pe-5 card-size-top-10">
        <div class="col">
            <div class="card">
              <a href="../recetario/Index.html"><img src="./img2/pollo.jpg" class="opacity-card card-img-top" alt="..."></a>
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
                <a href="../recetario/Index.html"><img src="./img2/carne.jpg" class="opacity-card card-img-top" alt="..."></a>
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
                <a href="../recetario/Index.html"><img src="./img2/batidona.jpg" class="opacity-card card-img-top" alt="..."></a>
              <div class="card-body color-card">
                <h5 class="card-title color-w align-text">Smoothie de bayas de goji</h5>
                <p class="card-text"></p>
                <div class="line br-use-2"></div>         
                  <div class=" elements-l"> 
                    <img class="icon-size card-img-top" src="./icons/like.png" alt="like"> 
                    <h4 class="color-w text-likes">500</h4>
                    <div class="btn-type ">
                      <button type="button" class="btn btn-danger fw-bold">Bebidas</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
    </div>  
</section>


    <!-- Footer -->
    <footer class="top-nav container-fluid footer title-margin">
        <div class="row footer-contacts">
          
            <h4 class=" contacts-title color-w title-margin">CONTACTOS</h4>
          
                <ul class="text-center center-information">
                  <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#"><img src="./icons/llamada-telefonica.png" class="me-3" alt="tel">+506 12345678</a></li>
                  <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#"><img src="./icons/correo-electronico.png" class="me-3" alt="correo">foodies@gmail.com</a></li>
                  <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#"><img src="./icons/marcador-de-posicion.png" class="me-3" alt="ubicacion">San Jose, Costa Rica Av TI</a></li>
                </ul>
              
          <div class="legal-text social-media ms-1">
            <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/facebook.png" alt="facebook"></a>
            <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/gorjeo.png" alt="tweeter"></a>
            <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/instagram.png" alt="instagram"></a>
            <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/pinterest.png" alt="pinterest"></a>
            <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/youtube.png" alt="youtube"></a>
            <div class="line btn-margin"></div> 
            <h6 class="text-center color-w margin-text"> ©2022 Foodies. Todos los derechos reservados.</h6>  
          </div>
        </div> 
       </footer> 
    <!-- Footer -->
           
    <!-- AOS Animation -->
       <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
       <script>
           document.addEventListener("DOMContentLoaded", function(){
               
               AOS.init();
      
               document.querySelector('.mobile-icon').addEventListener('click', function(event){
                   console.log('click');
                   document.getElementById('navbar-main').classList.add('show-nav');
               });
      
               document.querySelector('#btn-close').addEventListener('click', function(event){
                   document.getElementById('navbar-main').classList.remove('show-nav');
               });
           });
       </script>
    <!-- AOS Animation -->
</body>
</html>