<div class="container-fluid table-info">
    <div class="container">
        <nav class="navbar  navbar-expand-lg navbar-info">
            <a class="navbar-brand" href=""><img src="app/assets/img/iconN.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg'] == 'inicial') ? 'btn btn-outline-info py-2' : '') ?> " href="?pg=inicial">Inicial </a></li>
                    <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg'] == 'inicial') ? 'btn btn-outline-info py-2' : '') ?> " href="?pg=produtos">Produtos </a></li>
                    <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg'] == 'inicial') ? 'btn btn-outline-info py-2' : '') ?> " href="?pg=contato">Contato </a></li>
                </ul>

                <?php
                if (isset($_SESSION[''])) {
                ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-outline-info py-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Perfil
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-danger" href="#"><span class="icon-exit"></span> Sair</a>
                            </div>
                        </li>
                    </ul>
                <?php
                } else {
                ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-outline-info py-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Perfil
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-danger" href="cpanel.php?pg=cpanel"><span class="icon-enter"></span> Login</a>
                                <a class="dropdown-item text-danger" href="#"><span class="icon-exit"></span> Sair</a>
                            </div>
                        </li>
                    </ul>
                <?php
                }
                ?>










            </div>
        </nav>
    </div>
</div>