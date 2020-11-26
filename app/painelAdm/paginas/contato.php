<?php

$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM contato');

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contato</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
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
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                    <th>O que deseja fazer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dados as $DadosUsuarios) { ?>
                    <tr>
                      <td><?php echo $DadosUsuarios ['id_contato']?></td>
                      <td><?php echo $DadosUsuarios ['nome']?></td>
                      <td><?php echo $DadosUsuarios ['email']?></td>
                      <td><?php echo $DadosUsuarios ['assunto']?></td>
                      <td><?php echo $DadosUsuarios ['mensagem']?></td>
                      <td><?php echo $DadosUsuarios ['dataCriacao']?></td>
                      <td><?php echo $DadosUsuarios ['dataAtualizacao']?></td>
                      
                      <td>
                        <a href="?pg=contato-visualizar&id=<?php echo $DadosUsuarios['id_contato']?>" class="btn btn-success" type="submit">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="?pg=contato-apagar&id=<?php echo $DadosUsuarios['id_contato']?>" class="btn btn-danger" type="submit">
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