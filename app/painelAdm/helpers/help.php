<?php

function verificaSeLogado()
{
    $usuario = 'Mila';
    $senha = '123456';
    if ($_POST['usuario'] == $usuario) {

       $_SESSION ['usuario']=$usuario;
       return true;

    } else {
        echo 'Usuário e senha não confere';
    }
}