<?php
// Header
include_once "app/site/paginas/includes/header.php";

// Navegação 
include_once "app/site/paginas/includes/navegacao.php";

echo "<hr>";

// Páginas do meu Site 
// echo '<h1>Minhas Páginas</h1>';

$paginas= isset($_GET['pg']);

if ($paginas) {
    # code...
    switch ($_GET['pg']) {
        
        case 'inicial':
            include_once "app/site/paginas/inicial.php";
            break;

        case 'produtos':
            include_once "app/site/paginas/produtos.php";
            break;

        case 'contato':
            include_once "app/site/paginas/contato.php";
            break;
        
        default:
        include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}


echo '<hr>';

// Rodapé
include_once "app/site/paginas/includes/footer.php";