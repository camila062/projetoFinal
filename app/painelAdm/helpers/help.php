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
   }else {
    echo 'Usuário e senha não confere';
   }

}
