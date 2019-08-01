<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Atendimentos
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Atendimento</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/update/<?php echo htmlspecialchars( $user["idatend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="destecnico">Técnico</label>
              <input type="text" class="form-control" id="destecnico" name="destecnico" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["destecnico"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desprob">Problema</label>
              <input type="text" class="form-control" id="desprob" required name="desprob" placeholder="Digite o problema"  value="<?php echo htmlspecialchars( $user["desprob"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desdate">Data e hora</label>
              <input type="text" class="form-control" id="desdate" name="desdate" placeholder="Digite a data" value="<?php echo htmlspecialchars( $user["desdate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desstatus">Status</label>

              

              <select id="desstatus" name="desstatus">
                  <option value="Aberto">Aberto</option> 
                  <option value="OK" selected>OK</option>
              </select>

            </div>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->