<?php

include_once 'app/painelAdm/helpers/conexao.php';

/* Futuramente virá do Banco de dados 
   Verificar se existe um usuário no banco
   SIM = Adicionar os valores e iniciar Sessão
   NÃO = Usuário e senha não confere
*/

function verificaSeLogado()
{

    $usuario = $_POST['usuario'];
    $resultConexao = new Conexao();

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);

    if (count($resultadoConsulta)) {

        $_SESSION['usuario'] = $usuario;
        return true;
    } else {
        echo 'Usuário e senha não confere';
    }
}
function inserirUsuario()
{
    //Pegando as variáveis via POST
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);

    //Validar as variáveis e encripitar a senha
    $parametros = array(
        ':nome' => $nome,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO usuarios(nome, senha) VALUES (:nome, :senha)', $parametros);
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}
function atualizarUsuario()
{
    $idUsuario = trim($_POST['id']);
    $senha = trim($_POST['senha']);

    //Validando as Variáveis
    $parametros = array(
        ':id_usuario' => $idUsuario,
        ':senha' => $senha
    );

    //Atualizar no Banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario', $parametros);
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}
