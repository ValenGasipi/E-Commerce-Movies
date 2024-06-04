<?php   
    $categoriaSeleccionada = isset($_GET["categoria"]) ? $_GET["categoria"] : null;
    $filtrosPorEstilo = (new Pelicula())->catalogoCategoria($categoriaSeleccionada);
?>


<h2 class="text-center text-primary-emphasis m-4"><?= ucfirst($categoriaSeleccionada) //strtoupper($categoriaSeleccionada) convierte toda la cadena a mayuscula, sino se puede usar ucfirst que pone como mayuscula la primer letra?> </h2> 

<section class="d-flex flex-wrap gap-4 justify-content-center m-5 mt-3">

<?php
foreach ($filtrosPorEstilo as $producto) {
    // foreach ($productos as $producto) { //Recorre los productos de cada marca
        $categoriaConMayuscula = (new Pelicula())->categoriaMayuscula($producto->getCategoria());
        $nombreConMayuscula = ( new Pelicula() )->nombreMayuscula(($producto->getNombre()));
        $recortarDescripcion = ( new Pelicula() )->recortarDescripcion(($producto->getSinopsis()));
        ?>
            <div class="card" style="width: 18rem;"> <!-- Creo el div de la tarjeta para cada recorrido-->
                <div class="contenedor-img"><img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getNombre() ?>"></div>
                
                <div class="card-body"> <!-- Creo el div del contenido textual de la tarjeta-->
                    <h5 class="mb-2 text-primary-emphasis fs-6" ><?= $nombreConMayuscula; ?></h5>
                    <h4 class="mb-2 text-secondary fs-6" ><?= $categoriaConMayuscula; ?></h5>
                    <h3 class="card-title mb-3"><?= $producto->getDirector(); ?></h3> <!-- Creo el titulo y le indico que sea $producto->modelo-->
                    <p class="card-text text-dark-emphasis descripcion"><?= $recortarDescripcion; ?></p> <!-- Creo la descripción y le indico que sea $producto->descripcion-->
                    <p class="card-text precio fs-4"><span class="fw-medium me-1">US$</span><?= $producto->getPrecio(); ?></p> <!-- Creo el precio y le indico que sea $producto->precio-->
                    <a href="index.php?sec=peliculas&id=<?=$producto->getId()?>" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <?php
    // }
}
?>
</section>