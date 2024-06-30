<?php
require_once "../../function/autoload.php";

try {
    $categoria = new Categoria();
    $categoria->edit($_POST["nombre"], $_POST["descripcion"], $_POST["id"]);
    header("Location: ../index.php?seccion=admin_categoria");
} catch (Exception $e) {
    echo $e->getMessage();
    die("No pude editar la categoría");
}