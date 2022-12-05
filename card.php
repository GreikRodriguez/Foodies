<div class="col-md">
    <div class="card">
        <a href="/receta.php?id= <?php echo $recetas[$i]["id"]; ?>">
            <img src="<?php echo $recetas[$i]["imagen_url"]; ?>" class="opacity-card card-img-top img-1" alt="salmon" /></a>
        <div class="card-body color-card">
            <h5 class="card-title color-w align-text"> <?php echo $recetas[$i]["nombre"]; ?> </h5>
            <div class="line br-use"></div>
            <div class="elements-l">
                <img class="icon-size card-img-top" src="/foodiesv2/icons/like.png" alt="like" />
                <h4 class="color-w text-likes"><?php echo $recetas[$i]["likes"]; ?></h4>
                <div class="btn-type">
                    <button type="button" class="btn btn-danger fw-bold">
                        <?php echo $recetas[$i]["categorias"][0]["categoria"]; ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>