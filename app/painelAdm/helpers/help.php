<?php

include_once 'app/painelAdm/helpers/conexao.php';

/* Futuramente virá do Banco de dados 
   Verificar se existe um usuário no banco
   SIM = Adicionar os valores e iniciar Sessão
   NÃO = Usuário e senha não confere
*/

function verificaSeLogado()
{

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultConexao = new Conexao();
    $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);

    if (count($resultadoConsulta) > 0) {
        $senha_bd = $resultadoConsulta[0]['senha'];

        if (password_verify($senha, $senha_bd)) {
            //adiciona sessão
            $_SESSION['usuario'] = $usuario;
            return true;
        } else {
            $erro = 'Usuário ou senha inválidos';
            include_once "app/painelAdm/paginas/login.php";
        }
    } else {
        $erro = 'Usuário ou senha inválidos';
        include_once "app/painelAdm/paginas/login.php";
    }
}


function inserirUsuario()
{
    //Pegando as variáveis via POST
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);

    // echo '<pre>';
    // print_r($_FILES);
    // // die();

    //Pegando imagem
    //$img_usuario = $_FILES['img_usuario'];
    //$img_usuario = $_FILES['img_usuario']['name'];

    move_uploaded_file($_FILES['img_usuario']['tmp_name'], 'app/painelAdm/assets/img/' . $_FILES['img_usuario']['name']);
    // die('Upload Finalizado com sucesso');


    //Validar as variáveis e encripitar a senha
    $parametros = array(
        ':nome' => $nome,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT),
        ':img_usuario' => ($_FILES['img_usuario']['name']== true) ? 'app/painelAdm/assets/img/' . $_FILES['img_usuario']['name'] :'app/painelAdm/assets/img/anonimo1.jpg'
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO usuarios(nome, senha, img) VALUES (:nome, :senha, :img_usuario)', $parametros);
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}


function atualizarUsuario()
{
    $idUsuario = trim($_POST['id_usuario']);
    $senha = trim($_POST['senha']);

    //Validando as Variáveis
    $parametros = array(
        ':id_usuario' => $idUsuario,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    //Atualizar no Banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario', $parametros);

    include_once "app/painelAdm/paginas/usuarios-listar.php";
}


function visualizarUsuario($id)
{
    if ($id) {
        $parametros = array(
            ':id_usuario' => $_GET['id']
        );

        $resultUsuarioConsulta = new Conexao();
        $dados = $resultUsuarioConsulta->consultarBanco('SELECT * FROM usuarios WHERE :id_usuario = id_usuario', $parametros);

        if (count($dados) > 0) {
            return $dados;
        } else {
            Header('Location: ?pg=usuarios-lista');
        }
    }
}

function visualizarMsg()
{
    $idContato = $_GET['id'];

    $parametros = array(
        ':visualizar' => 1,
        'id_contato' => $idContato
    );

    $resultUsuarioConsulta = new Conexao();
    $dados = $resultUsuarioConsulta->intervencaoNoBanco('UPDATE contato SET visualizar = :visualizar WHERE id_contato = :id_contato', $parametros);
}
