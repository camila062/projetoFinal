<?php
// Header
// include_once "app/painelAdm/paginas/includes/header.php";

// Navegação 
// include_once "app/painelAdm/paginas/includes/navegacao.php";


// Páginas do meu Site 
// echo '<h1>Minhas Páginas</h1>';

if (!isset($_SESSION['usuario'])) {
    $usuario = 'camila2gmail.com';
    $senha = '123456';

    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

    switch ($_GET['pg']) {
        case 'cpanel':
            include_once "app/painelAdm/index.php";
            break;

            case 'login':
            include_once "app/painelAdm/index.php";
            break;

        default:
            #code...
            break;
    }
} else {
    include_once "app/painelAdm/paginas/login.php";
};



$paginas = isset($_GET['pg']);

if ($paginas) {
    # code...
    switch ($_GET['pg']) {

        case 'cpanel':
            include_once "app/painelAdm/paginas/login.php";
            // include_once "app/site/paginas/inicial.php";
            break;

        default:
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}




// Rodapé
// include_once "app/site/paginas/includes/footer.php";