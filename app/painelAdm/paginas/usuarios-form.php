<?php

$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM usuarios WHERE ORDER BY dataAtualizacao Desc');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listar Usuários</h1>
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
                    <form action="?pg=usuarios-novo" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="usuario">Nome de Usuário</label>
                            <input type="text" name="nome" class="form-control" autofocus id="usuario" placeholder="Definir nome de usuário">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha" placeholder="Definir senha">
                        </div>
                        <div class="form-group">
                            <input type="file" name="img_usuario">
                        </div>
                        <div class="form-group">
                            <a href="?pg=usuarios-lista" class="btn btn-info">Voltar</a>
                            <input type="submit" class="btn btn-success" value="Inserir">
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