<?php

$peliculas = (new Pelicula())->catalogoCompleto();

?>

<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5 fw-bold">Administración de Películas</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Portada</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Director</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Sinópsis</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peliculas as $pelicula) { ?>
                    <tr>
                        <td> <img src="../img/<?= $pelicula->getImagen() ?>" alt="Imagen de la película" class="img-fluid rounded shadow-sm"> </td>
                        <td><?= $pelicula->getNombre() ?> </td>
                        <td><?= $pelicula->getDirector_id() ?></td>
                        <td><?= $pelicula->getCategoria_id() ?></td>
                        <td><?= $pelicula->getSinopsis() ?></td>
                        <td><?= $pelicula->getPrecio() ?></td>
                        <td>
                            <a href="index.php?seccion=edit_pelicula&id=<?= $pelicula->getId() ?>" class="d-block btn btn-sm btn-warning mb-1">Editar</a>
                            <a href="index.php?seccion=delete_pelicula&id=<?= $pelicula->getId() ?>" class="d-block btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="index.php?seccion=add_pelicula" class="btn btn-primary mt-5">Agregar Película</a>

        </div>
    </div>
</div>
