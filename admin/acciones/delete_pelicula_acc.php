<?php
require_once "../../function/autoload.php";

$id = $_GET["id"] ?? false;
$pelicula = (new Pelicula())->catalogoPorId($id);
try {
    if( $pelicula->getImagen() != "" ){
        (new Imagen())->borrarImagen("../../img/".$pelicula->getImagen());
    }
    $pelicula->delete();
} catch (Exception $e) {
    echo $e->getMessage();
    die("No se pudo eliminar la Película :(");
}

header("Location: ../index.php?seccion=admin_pelicula");

