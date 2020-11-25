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
                <?php foreach ($DadosUsuario as $dados) { ?>
                    <form action="?pg=usuarios-editar" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome de Usuário</label>
                            <input type="text" name="nome" value="<?php echo $dados['nome']?>" class="form-control" disabled id="usuario">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Senha</label>
                            <input type="password" name="senha" autofocus class="form-control" id="senha" placeholder="Definir nova senha">
                        </div>
                        <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario']?>">
                        <div class="form-group">
                            <a href="?pg=usuarios-lista" class="btn btn-info">Voltar</a>
                            <input type="submit" class="btn btn-success" value="Atualizar">
                        </div>
                    </form>
                    <?php } ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>