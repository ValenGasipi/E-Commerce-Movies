<?php
require_once "../../function/autoload.php";

$id = $_GET["id"] ?? false;
$director = (new Director())->catalogoDirector($id);
try {
    (new Imagen())->borrarImagen("../../img/directores/".$director->getImagen());
    $director->delete();
} catch (Exception $e) {
    echo $e->getMessage();
    die("No se pudo eliminar :(");
}


header("Location: ../index.php?seccion=admin_director");