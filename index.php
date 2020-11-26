<?php
include_once "app/painelAdm/helpers/conexao.php";

// Header
include_once "app/site/paginas/includes/header.php";

// Navegação 
include_once "app/site/paginas/includes/navegacao.php";


// Páginas do meu Site 
// echo '<h1>Minhas Páginas</h1>';

$paginas = isset($_GET['pg']);

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

        case 'validaLogin':
            include_once "app/site/paginas/validaLogin.php";
            break;

        case 'cad-mensagem':
            //pegar as variáveis via post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $assunto = $_POST['assunto'];
                $mensagem = $_POST['mensagem'];

                $parametros = array(
                    ':nome' => $nome,
                    ':email' => $email,
                    ':assunto' => $assunto,
                    ':mensagem' => $mensagem
                );

                $inserirMsg = new Conexao();
                $inserirMsg->intervencaoNoBanco('INSERT INTO contato (nome, email,assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)', $parametros);
            } else {
            }

            //validar os parâmetros
            //inserir no banco de dados
            //retornar a tela de contato

            break;

        default:
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}




// Rodapé
include_once "app/site/paginas/includes/footer.php";
