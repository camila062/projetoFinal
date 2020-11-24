<?php

$id = isset($_GET['id']);

if ($id) {
  $id = $_GET['id'];

  $parametros = array(
    ':id_usuario' => $id
  );

  $resultUsuario = new Conexao();
  $dados = $resultUsuario->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);
} else {
  Header('Location: ?pg=usuarios-lista');
}

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Visualizar Usuários</h1>
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
          <?php foreach ($dados as $dadosUsuarios) { ?>
            <form action="?pg=usuarios-novo" method="POST">
              <div class="jumbotron">
                <h4>Usuário:</h4>
                <div class="lead">
                  <?php echo $dadosUsuarios['nome']?>
                </div>
              </div>
              <div class="form-group">
                <a href="?pg=usuarios-lista" class="btn btn-info">Voltar</a>
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