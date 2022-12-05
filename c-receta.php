<div class="container-fluid">
    <div class="h4 pb-2 mb-4 color-green">
        <h1 class="title-margin ps-5 pe-5">RECETA</h1>
    </div>

    <div class="row g-1 ps-5 pe-5 ">
        <div class="col-md">
            <div class="card card-size">
                <img src="<?php echo $info[0]["imagen_url"] ?>" style="width: 100%;height: 50vh;object-fit: cover;object-position: 5% 10%;" class="card-img-top" alt="salmon">
                <div class="card-body color-card">
                    <h5 class="card-title color-w align-text"><?php echo $info[0]["nombre"] ?></h5>
                    <h4 class="card-title color-w">10 min</h4>
                    <p class=""></p>
                    <div class="elements-l">
                        <img class="icon-size card-img-top" src="./recetario/icons/like.png" alt="like">
                        <h4 class="color-w text-likes"><?php echo $info[0]["likes"] ?></h4>
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
                    <?php echo $info[0]["instrucciones"] ?>
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