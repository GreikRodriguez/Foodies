<?php 
    require 'DB.php';

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
   
    $data = $database->select("Recetas", "*", [
        "id" => $_POST["id"]
    ]);

    if($_FILES["imagen_url"]["name"] == ""){
        //echo "no files";
        $img = $data[0]["imagen_url"];
    }else{
        //echo "files";
        if(isset($_FILES["imagen_url"])){
            $errors = array();
            $file_name = $_FILES["imagen_url"]["name"];
            $file_size = $_FILES["imagen_url"]["size"];
            $file_tmp = $_FILES["imagen_url"]["tmp_name"];
            $file_type = $_FILES["imagen_url"]["type"];
            $file_ext_arr = explode(".", $_FILES["imagen_url"]["name"]);

            $file_ext = end($file_ext_arr);
            $img_ext = array("jpeg", "png", "jpg", "gif");

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type is not supported";
            }

            if(empty($errors)){
                $img = "recipe-upload-".generateRandomString().".".$file_ext;
                move_uploaded_file($file_tmp, "imgs/".$img);
            }
        }
    }
    $database->update("Recetas", [
        "nombre" => $_POST["nombre"],
        "imagen_url"=> $img,
        "instrucciones"=> $_POST["preparacion"],
        "porciones"=> $_POST["porciones"],
        "ingredientes"=> $_POST["ingredientes"],
        "dificultad_id"=> $_POST["complejidad"],
        "categorias_id"=> $_POST["categoria"],
        "festividades_id"=> $_POST["ocacion"]
        /* "tiempo"=> $_POST["nombre"] */
        ],[
        "id"=>$_POST["id"]
    ]);
    header("location: recipes.php");
?>