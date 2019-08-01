<?php if(!class_exists('Rain\Tpl')){exit;}?>      

      <div class="box-body no-padding">

              <table class="table table-striped">

                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th>Problema</th>
                    <th>Data</th>
                    <th style="width: 60px ; color:red;">Status</th>
                    <th style="width: 140px">&nbsp;</th>
                  </tr>
                </thead>

                <tr>
                    <td><?php echo htmlspecialchars( $solicit["idsolicit"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $solicit["desnome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $solicit["dessetor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $solicit["desprob"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php echo htmlspecialchars( $solicit["desdata"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td style="width: 60px ; color:red;"><?php echo htmlspecialchars( $solicit["desstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                </tr>



              </table> 