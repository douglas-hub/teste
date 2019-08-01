<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Suporte Técnico
        <small>administrador</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     


      <section class="content-header">
  <h1>
    Solicitações de Atendimento não realizadas
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><a href="/admin/users">Usuários</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
            
            <div class="box-header">
              <a href="/admin/users/create" class="btn btn-success">Cadastrar Atendimento</a>
            </div>

            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">ID Atend.</th>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th style="color:red;">Técnico</th>
                    <th>Problema</th>
                    <th>Data</th>
                    <th style="width: 60px;color:red; ">Status</th>
                                      </tr>
                </thead>
                <tbody>

                  <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                  <tr>

                    <td><?php echo htmlspecialchars( $value1["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desnome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["dessetor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td style="color:red;"><?php echo htmlspecialchars( $value1["destecnico"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php echo htmlspecialchars( $value1["desprob"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> 
                    <td><?php echo htmlspecialchars( $value1["desdate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td style="color:red;"><?php echo htmlspecialchars( $value1["desstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td>

                      <a href="/admin/ok/<?php echo htmlspecialchars( $value1["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>OK</a>
                      <a href="/admin/apropriar/<?php echo htmlspecialchars( $value1["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente apropriar-se?')" class="btn btn-primary btn-xs" ><i class="fa fa-edit"></i>Apropriar-se</a>
                      <a href="/admin/update/<?php echo htmlspecialchars( $value1["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="/admin/<?php echo htmlspecialchars( $value1["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>

                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
  </div>

</section>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 