<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
require_once "../../function/autoload.php";

// $personajes_secundarios = $_POST["personajes_secundarios"];
try {
    $imagen = ( new Imagen() )->subirImagen("../../img/", $_FILES["portada"]);
    $id_pelicula = (new Pelicula())->add(
        $_POST["nombre"],
        $_POST["categoria_id"],  
        $_POST["director_id"],
        $_POST["trailer"],
        $_POST["sinopsis"],
        $imagen,
        $_POST["precio"]
    );

    header("Location: ../index.php?seccion=admin_pelicula");
} catch (\Exception $e) {
    echo $e->getMessage();
    die("No se pudo cargar la película :(");
}