<?php

$categorias = (new Categoria())->catalogoCompleto();

?>

<div class="row my-5 container-categorias mx-auto">
    <div class="col">
        <h1 class="text-center mb-5 fw-bold">Administracion de Categorías</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categorias as $categoria) { ?>
                    <tr>
                        <td><?= $categoria->getNombre() ?> </td>
                        <td><?= $categoria->getDescripcion() ?></td>
                        <td>
                            <a href="index.php?seccion=edit_categoria&id=<?= $categoria->getId() ?>" class="d-block btn btn-sm btn-warning mb-1">Editar</a>
                            <a href="index.php?seccion=delete_categoria&id=<?= $categoria->getId() ?>" class="d-block btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="index.php?seccion=add_categoria" class="btn btn-primary mt-5">Agregar Categoría</a>

        </div>
    </div>
</div>