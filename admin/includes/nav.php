<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FilmLens</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link text-light btn btn-secondary" href="index.php?seccion=principal"><?php if (isset($_GET["seccion"]) && $_GET["seccion"] == "principal") {
                                echo "<b>Principal</b>";
                            } else {
                                echo "Principal";
                            } ?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-light btn btn-secondary" href="index.php?seccion=admin_pelicula"><?php if (isset($_GET["seccion"]) && $_GET["seccion"] == "admin_pelicula") {
                                echo "<b>Películas</b>";
                            } else {
                                echo "Películas";
                            } ?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-light btn btn-secondary" href="index.php?seccion=admin_director"><?php if (isset($_GET["seccion"]) && $_GET["seccion"] == "admin_director") {
                                echo "<b>Directores</b>";
                            } else {
                                echo "Directores";
                            } ?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-light btn btn-secondary" href="index.php?seccion=admin_categoria"><?php if (isset($_GET["seccion"]) && $_GET["seccion"] == "admin_categoria") {
                                echo "<b>Categorías</b>";
                            } else {
                                echo "Categorías";
                            } ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>