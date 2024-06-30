<?php

$directores = (new Director())->catalogoCompleto();

?>

<div class="row my-5 container-directores mx-auto">
    <div class="col">
        <h1 class="text-center mb-5 fw-bold">Administracion de Directores</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Biografia</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($directores as $director) { ?>
                    <tr>
                        <td class="container-img-director"> <img src="../img/directores/<?= $director->getImagen() ?>" alt="Imagen del director" class="img-fluid rounded shadow-sm"> </td>
                        <td><?= $director->getNombre() ?> </td>
                        <td><?= $director->getBiografia() ?></td>
                        <td>
                            <a href="index.php?seccion=edit_director&id=<?= $director->getId() ?>" class="d-block btn btn-sm btn-warning mb-1">Editar</a>
                            <a href="index.php?seccion=delete_director&id=<?= $director->getId() ?>" class="d-block btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="index.php?seccion=add_director" class="btn btn-primary mt-5">Agregar Director</a>

        </div>
    </div>
</div>