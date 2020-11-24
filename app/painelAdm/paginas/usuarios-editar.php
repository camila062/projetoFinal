<?php

$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM usuarios');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Usuários</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="?pg=incial">Home</a>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <form action="?pg=usuarios-novo" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome de Usuário</label>
                            <input type="text" name="nome" class="form-control" autofocus id="usuario" placeholder="Definir nome de usuário">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha" placeholder="Definir senha">
                        </div>
                        <div class="form-group">
                            <a href="?pg=usuarios-lista" class="btn btn-info">Voltar</a>
                            <input type="submit" class="btn btn-success" value="Atualizar">
                        </div>
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>