
<nav class="navbar navbar-expand-lg navbar-light background ">
        <div class="container">
            <a class="navbar-brand text-light" href="index.php?sec=home">FilmLens</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?sec=home">
                        <?= (!isset($_GET["sec"]) || (isset($_GET["sec"]) && $_GET["sec"] == "home")) ? "<b>Home</b>" : "Home" ?>
                    </a>
                </li>

                    <li class="nav-item">
                        <!-- Dropdawn Filtros ================ -->
                        <div class="btn-group">
                          <!-- <button type="button" class="btn btn-danger">Productos</button> -->
                          <a class="nav-link text-light btn btn-secondary" href="index.php?sec=productos"><?php if (isset($_GET["sec"]) && $_GET["sec"]    == "productos" || isset($_GET["marca"]) || isset($_GET["estilo"]) || isset($_GET["id"])) {
                                echo "<b>Productos</b>";
                            } else {
                                echo "Productos";
                            } ?></a>
                          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"  aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="#">Todos</a></li> -->
                            <li>
                            <a href="index.php?sec=productos" class="dropdown-item text-decoration-none "><?= isset($_GET["sec"]) && $_GET["sec"] == "productos" ? "<b>TODOS</b>" : "TODOS" ?></a>
                            </li>
                            <!-- <li><a class="dropdown-item" href="#">Terror</a></li> -->
                            <li>
                            <a href="index.php?sec=filtros&categoria=3" class="dropdown-item text-decoration-none "><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "3") {
                                    echo "<b>Terror</b>";
                            } else {
                                echo "Terror";
                            } ?></a>
                            </li>
                            <!-- <li><a class="dropdown-item" href="#">Comedia</a></li> -->
                            <li>
                            <a href="index.php?sec=filtros&categoria=2" class="dropdown-item text-decoration-none "><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "2") {
                                echo "<b>Comedia</b>";
                            } else {
                                echo "Comedia";
                            } ?></a>
                            </li>
                            <!-- <li><a class="dropdown-item" href="#">Suspenso</a></li> -->
                            <li>
                            <a href="index.php?sec=filtros&categoria=1" class="dropdown-item text-decoration-none "><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "1") {
                                echo "<b>Suspenso</b>";
                            } else {
                                echo "Suspenso";
                            } ?></a>
                            </li>
                          </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link  text-light" href="index.php?sec=quienes_somos"><?= isset($_GET["sec"]) && $_GET["sec"] == "quienes_somos" ? "<b>¿Quienes Somos?</b>" : "¿Quienes Somos?" ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?sec=envios"><?= isset($_GET["sec"]) && $_GET["sec"] == "envios" ? "<b>Envios</b>" : "Envios" ?></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>