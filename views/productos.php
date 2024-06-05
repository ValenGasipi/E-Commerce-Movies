<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<h2 class="text-center text-primary-emphasis m-4">Todas las Peliculas</h2>

    <section class="d-flex flex-wrap gap-4 justify-content-center m-5 mt-3">
<?php
    //   $producto = new Zapatilla();
      $productos = ( new Pelicula() )->catalogoCompleto();
    //   $productos = catalogoCompleto();
?>

<?php
foreach ($productos as $producto) {
    // foreach ($productos as $producto) { //Recorre los productos de cada marca
    $categoriaConMayuscula = (new Pelicula())->categoriaMayuscula($producto->getCategoria_id());
    $directorConMayuscula = (new Pelicula())->directorMayuscula($producto->getDirector_id());
    $nombreConMayuscula = ( new Pelicula() )->nombreMayuscula(($producto->getNombre()));
    $recortarDescripcion = ( new Pelicula() )->recortarDescripcion(($producto->getSinopsis()));
    ?>
        <div class="card" style="width: 15rem;"> <!-- Creo el div de la tarjeta para cada recorrido-->
            <div class="contenedor-img"><img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getNombre() ?>"></div>
            
            <div class="card-body"> <!-- Creo el div del contenido textual de la tarjeta-->
                <h5 class="mb-2 text-primary-emphasis fs-6" ><?= $nombreConMayuscula; ?></h5>
                <h4 class="mb-2 text-secondary fs-6" ><?= $categoriaConMayuscula; ?> - <?= $directorConMayuscula; ?></h5>
                <p class="card-text text-dark-emphasis descripcion"><?= $recortarDescripcion; ?></p> <!-- Creo la descripción y le indico que sea $producto->descripcion-->
                <p class="card-text precio fs-4"><span class="fw-medium me-1">US$</span><?= $producto->getPrecio(); ?></p> <!-- Creo el precio y le indico que sea $producto->precio-->
                <a href="index.php?sec=peliculas&id=<?=$producto->getId()?>" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <?php
    }
// }
?>
</section>
</body>
</html>