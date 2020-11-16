<?php

include_once "app/painelAdm/helpers/help.php";

session_unset();

// Definindo a variável pg
$pg = 'cpanel';

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}


//Verifica se há alguem logado
if (isset($_SESSION['usuario'])) {

    switch ($pg) {
        case 'cpanel':
            include_once "app/painelAdm/index.php";
            break;

        case 'sair':

            break;

        default:
            include_once "app/painelAdm/index.php";
            break;
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (verificaSeLogado()) {
            include_once "app/painelAdm/index.php";
        }
    } else {
        include_once "app/painelAdm/paginas/login.php";
    }
}
