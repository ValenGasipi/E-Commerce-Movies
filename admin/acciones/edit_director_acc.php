<?php
require_once "../../function/autoload.php";
$fileData = $_FILES["imagen"] ?? FALSE;

try {
    $director = new Director();

    if( !empty($fileData["tmp_name"]) ){
        if( !empty($_POST["imagen_original"]) ){
            (new Imagen())->borrarImagen("../../img/directores/".$_POST["imagen_original"]);
        }
        $imagenNueva = (new Imagen())->subirImagen("../../img/directores", $fileData);
        $director->reemplazarImagen($imagenNueva, $_POST["id"]);
    }
    $director->edit($_POST["nombre"],$_POST["biografia"], $_POST["id"]);
    header("Location: ../index.php?seccion=admin_director");
} catch (Exception $e) {
    echo $e->getMessage();
    die("No pude editar el director");
}