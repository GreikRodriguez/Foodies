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

    // array -> $items = [];
    if(isset($_POST)){

        if(isset($_FILES["imagen_url"])){
            $error = array();
            $file_name = $_FILES["imagen_url"]["name"];
            $file_size = $_FILES["imagen_url"]["size"];
            $file_tmp = $_FILES["imagen_url"]["tmp_name"];
            $file_type = $_FILES["imagen_url"]["type"];
            $file_ext_arr = explode(".", $_FILES["imagen_url"]["name"]); //explote descompone el string

            $file_ext = end($file_ext_arr);
            $img_ext = array("jpeg","png", "jpg", "gif");

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type is not supported";
            }

            if(empty($errors)){
                $img = "recipe-upload-".generateRandomString().".".$file_ext;//genera el nombre
                move_uploaded_file($file_tmp, "imgs/".$img);

                $database->insert("Recetas", [
                    "nombre" => $_POST["nombre"],
                    "imagen_url"=> $img,
                    "instrucciones"=> $_POST["preparacion"],
                    "porciones"=> $_POST["porciones"],
                    "ingredientes"=> $_POST["ingredientes"],
                    "dificultad_id"=> $_POST["complejidad"],
                    "categorias_id"=> $_POST["categoria"],
                    "festividades_id"=> $_POST["ocacion"]
                    /* "tiempo"=> $_POST["nombre"] */
                ]);
                header("location: recipes.php");
            }
        }   
    }
?>