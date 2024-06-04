<?php 
    $id =  $_GET['id'];
    $producto = (new Pelicula())->catalogoPorId($id);
    $categoriaConMayuscula = (new Pelicula())->categoriaMayuscula($producto->getCategoria());
    $nombreConMayuscula = ( new Pelicula() )->nombreMayuscula(($producto->getNombre()));

?>

<section class="tarjetas-comprar mt-4 mb-4 container">

<div class="card-group gap-3">
  <div class="card" style="max-width: 18rem;">
  <img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getNombre() ?>">
    <div class="card-body">
    <p class="card-title">Director: <?= $producto->getDirector(); ?></p>
    <p class="card-title">Genero: <?= $categoriaConMayuscula; ?></p>
    <p class="card-text precio"><span class="me-1">$</span><span class="fw-bold"><?= $producto->getPrecio(); ?></span></p>  
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card" style="max-width: 35rem;">
    <div class="ratio ratio-16x9">
      <iframe class="d-none d-md-block" width="560" height="315" src="<?= $producto->getTrailer(); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="card-body">
      <h5 class="card-title fs-4"><?= $producto->getNombre(); ?></h5>
      <p class="card-text"><?= $producto->getSinopsis(); ?></p>
      <a href="#" class="btn btn-primary">Agregar al carrito</a>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</section>



