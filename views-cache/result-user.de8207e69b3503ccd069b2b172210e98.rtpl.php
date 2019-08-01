<?php if(!class_exists('Rain\Tpl')){exit;}?>      
<div class="container-fluid">

    <div class="mt-5 mb-5">

      <div class="box-body no-padding">

              <table class="table table-striped">

                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th>Telefone</th>
                    <th>Login</th>
                    <th style="width: 140px">&nbsp;</th>
                  </tr>
                </thead>

                <tr>
                    <td><?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $user["desnome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $user["dessetor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $user["destel"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                </tr>



              </table> 
      </div>

    </div>

</div>              