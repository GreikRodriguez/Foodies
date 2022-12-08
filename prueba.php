<?php
include "DB.php";

$data=$database ->select("Recetas", "*");
var_dump($data);

?>
