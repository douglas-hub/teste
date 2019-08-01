<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper">

      <section class="content-header">
  <h1>
    Seu histórico de Atendimentos
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">  

            <div class="box-header">
              <a href="/user-atendimento" class="btn btn-success">Solicitar Atendimento</a>
            </div>

            <section class="content-header">
            <ol class="breadcrumb">
              <li><a href="/user"><i class="fa fa-dashboard"></i>INICIO</a></li>
            </ol>
            </section>


            <div class="box-body no-padding">
              <table class="table table-striped">

                <thead>

                  <tr>
                    <th style="width: 10px">Id atendimento</th>
                    <th style="color:red;">Técnico</th>
                    <th>Problema</th>
                    <th>Data</th>
                    <th style="color:red;">Status</th>
                    <th>Id do Uusuario</th>
                    <th style="width: 140px">&nbsp;</th>
                  </tr>

                </thead>


                <tbody>

                  <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>

                  <tr>

                    <td><?php echo htmlspecialchars( $value1["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td style="color:red;"><?php echo htmlspecialchars( $value1["destecnico"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desprob"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desdate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td style="color:red;"><?php echo htmlspecialchars( $value1["desstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php echo htmlspecialchars( $value1["fiduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>

                  </tr>

                  <?php } ?>

                </tbody>

              </table>

            </div>

          </div>

    </div>

  </div>

</section>




    </section>
    <!-- /.content -->
  </div>