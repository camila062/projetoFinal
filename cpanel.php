<?php
// Header
// include_once "app/painelAdm/paginas/includes/header.php";

// Navegação 
// include_once "app/painelAdm/paginas/includes/navegacao.php";


// Páginas do meu Site 
// echo '<h1>Minhas Páginas</h1>';

$paginas= isset($_GET['pg']);

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