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
          <h1>Listar Usuários</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <a href="?pg=usuarios-form" class="btn btn-success"> <span class="fas fa-user-plus"></span> Novo Usuário</a>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Escolha um arquivo para fazer a edição</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body text-center">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Imagem</th>
                    <th>Usuário</th>
                    <th>Data Criação</th>
                    <th>Data Atualizaçao</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dados as $DadosUsuarios) { ?>
                    <tr>
                      <td style="width:20px;">
                        <img src="<?php echo $DadosUsuarios ['img']?>" class="img-fluid" alt="">
                      </td>
                      <td><?php echo $DadosUsuarios ['nome']?></td>
                      <td><?php echo $DadosUsuarios ['dataCriacao']?></td>
                      <td><?php echo $DadosUsuarios ['dataAtualizacao']?></td>
                      
                      <td>
                        <a href="?pg=usuarios-visualizar&id=<?php echo $DadosUsuarios['id_usuario']?>" class="btn btn-success" type="submit">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="?pg=usuarios-editar&id=<?php echo $DadosUsuarios['id_usuario']?>" class="btn btn-warning" type="submit">
                          <i class="fas fa-pen"></i>
                        </a>
                        <a href="?pg=usuarios-apagar&id=<?php echo $DadosUsuarios['id_usuario']?>" class="btn btn-danger" type="submit">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>