<?php

include_once "app/painelAdm/helpers/help.php";

session_start();

// Definindo a variável pg
$pg = 'cpanel';

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}


//Verifica se há alguem logado
if (isset($_SESSION['usuario'])) {

    switch ($pg) {
        case 'cpanel':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'contato':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/contato.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'produtos':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/produtos.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;


        case 'sair':
            session_destroy();
            Header('Location:' . $_SERVER['PHP_SELF']);
            break;


            /************************** C R U D ***************************/
        case 'usuarios-form':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/usuarios-form.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'usuarios-lista':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/usuarios-listar.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'usuarios-novo':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            //Função Criar novo usuário
            inserirUsuario();
            include_once "app/painelAdm/paginas/usuarios-listar.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'usuarios-visualizar':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/usuarios-vizualizar.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'usuarios-editar':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";

            if ($_REQUEST['RESQUEST_METHOD'] == 'POST') {
                // Função de atualização de usuário
                atualizarUsuario();
            } else {
                
                echo 'mostrar usuário pelo id';
                // $IdUsuarioEditar = isset($_GET['id']);
                // if ($IdUsuarioEditar) {
                // }
            }

            include_once "app/painelAdm/paginas/usuarios-editar.php";

            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'usuarios-apagar':

            $parametros = array(
                ':id_usuario' => $_GET['id']
            );

            $apagarUsuario = new Conexao();
            $apagarUsuario->intervencaoNoBanco('DELETE FROM usuarios WHERE id_usuario = :id_usuario', $parametros);
            Header('Location: ?pg=usuarios-lista');

            break;


        default:
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (verificaSeLogado()) {
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
        }
    } else {
        include_once "app/painelAdm/paginas/login.php";
    }
}
