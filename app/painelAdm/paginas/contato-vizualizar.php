<?php

$id = isset($_GET['id']);

if ($id) {
  $id = $_GET['id'];

  $parametros = array(
    ':id_contato' => $id
  );

  $resultUsuario = new Conexao();
  $dados = $resultUsuario->consultarBanco('SELECT * FROM contato WHERE id_contato = :id_contato', $parametros);

  visualizarMsg();
} else {
  Header('Location: cpanel.php?pg=contato');
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
            <form action="?pg=contato-novo" method="POST">
              <div class="jumbotron">
                <h4>Dados do Usuário:</h4>
                <div class="lead">
                  <h5>Nome:</h5>
                  <?php echo $dadosUsuarios['nome']?>
                  <h5>E-mail:</h5>
                  <?php echo $dadosUsuarios['email']?>
                  <h5>Assunto:</h5>
                  <?php echo $dadosUsuarios['assunto']?>
                  <h5>Mensagem:</h5>
                  <?php echo $dadosUsuarios['nome']?>
                  <h5>Data Criação:</h5>
                  <?php echo $dadosUsuarios['dataCriacao']?>
                  <h5>Data Atualização:</h5>
                  <?php echo $dadosUsuarios['dataAtualizacao']?>
                </div>
              </div>
              <div class="form-group">
                <a href="cpanel.php?pg=contato" class="btn btn-info">Voltar</a>
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