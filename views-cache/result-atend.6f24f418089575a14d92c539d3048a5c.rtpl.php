<?php if(!class_exists('Rain\Tpl')){exit;}?>      
<div class="content-wrapper">

  <section class="content">   
            <h1>
              Solicitações de Atendimento
            </h1>
            <ol class="breadcrumb">
              <li><a href="/user"><i class="fa fa-dashboard"></i>Inicio</a></li>
              <li class="active"><a href="/admin/users">Usuários</a></li>
            </ol>

    <div class="mt-5 mb-5">

      <div class="box-body no-padding">

              <table class="table table-striped">

                <thead>
                  <tr>
                    <th style="width: 10px">Id atendimento</th>
                    <th style="color:red;">Técnico</th>
                    <th>Problema</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th>Id do Uusuario</th>
                    <th style="width: 140px">&nbsp;</th>
                  </tr>
                </thead>

                <tr>
                    <td><?php echo htmlspecialchars( $user["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $user["destecnico"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $user["desprob"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $user["desdate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $user["desstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php echo htmlspecialchars( $user["fiduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                </tr>



              </table> 
      </div>

    </div>

  </section>

</div>              