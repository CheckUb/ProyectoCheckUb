<header class="p-3 mb-3 border-bottom bg-primary">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="Index.php" class="d-flex align-items-left mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="Front/img/ico/logo.png" class="rounded shadow-sm mx-1 my-1" width="75" height="35"></a>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Cursos</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Seminarios</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Novedades</a></li>

            </ul>

            <form action="#" method="GET" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Buscar Cursos" aria-label="Buscar" name="buscar">
                </div>
            </form>

            <ul class="nav col-12 col-lg-auto justify-content-center">
                <li class="nav-link px-2 text-white text-end"> Bienvenido, <?php
                                                                            $name = (isset($_SESSION['Perfil']['Nombre'])) ? $_SESSION['Perfil']['Nombre'] : $_SESSION['Perfil']['Correo'];
                                                                            echo $name ?>
                </li>
            </ul>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $_SESSION['Perfil']['Foto']; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="http://localhost/inacap/globalservice/perfil">Configuracion</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="CerrarSesion.php">Sign out</a></li>
                </ul>
            </div>

        </div>
    </div>
</header>


