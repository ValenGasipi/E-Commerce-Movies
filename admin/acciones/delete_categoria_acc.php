<?php
require_once "../../function/autoload.php";

$id = $_GET["id"] ?? false;
$categoria = (new Categoria())->catalogoCategoria($id);
try {
    $categoria->delete();
} catch (Exception $e) {
    echo $e->getMessage();
    die("No se pudo eliminar la categoría :(");
}


header("Location: ../index.php?seccion=admin_categoria");